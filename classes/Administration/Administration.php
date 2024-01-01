<?php


namespace phpCollab\Administration;

use Apfelbox\FileDownload\FileDownload;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Ifsnop\Mysqldump as IMysqldump;
use phpCollab\Database;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Class Admins
 * @package phpCollab
 */
class Administration
{
    protected $admins_gateway;
    protected $db;
    protected $update;
    protected $newVersion;

    /**
     * Assignments constructor.
     * @param Database $database
     */
    public function __construct(Database $database)
    {
        $this->db = $database;
        $this->admins_gateway = new AdministrationGateway($this->db);
        $this->update = false;
    }

    /**
     * @param $oldVersion
     * @param string $tablePrefix
     * @param string $uuid
     * @param Session $session
     * @return bool
     */
    public function checkForUpdate($oldVersion, string $tablePrefix, string $uuid, Session $session): bool
    {
        if (empty($session->get('updateAvailable'))) {
            try {

                $headers = [
                    'X-server' => $_SERVER['SERVER_SOFTWARE'],
                    'X-php_version' => phpversion(),
                    'X-phpcollab_version' => $oldVersion,
                    'X-phpcollab_lang' => $session->get("language") ?? '',
                    'X-phpcollab_tablePrefix' => $tablePrefix ?? '',
                    'X-phpcollab_theme' => $session->get("theme") ?? ''
                ];

                if (!empty($uuid)) {
                    $headers['X-uuid'] = $uuid;
                }

                $client = new Client([
                    'base_uri' => 'https://www.phpcollab.com',
                    'timeout' => 2.0,
                    'headers' => $headers
                ]);

                $res = $client->request('GET', '/website/version.php',
                    [
                        'allow_redirects' => true,
                        'synchronous' => true,
                        'timeout' => 5.0
                    ]
                );

                $this->newVersion = $res->getBody()->getContents();

                if ($oldVersion < $this->newVersion) {
                    $this->update = true;
                    $session->set('newVersion', $this->newVersion);
                    $session->set('updateAvailable', true);
                } else {
                    $session->set('updateAvailable', false);
                }
            } catch (GuzzleException $e) {
                error_log('GuzzleException: ' . $e->getMessage());
            } catch (Exception $exception) {
                return false;
            }
        }

        if ($session->get('updateAvailable') === true && !empty($session->get('newVersion'))) {
            $this->update = true;
            $this->newVersion = $session->get('newVersion');
        } else {
            $this->update = false;
        }
        return $this->update;
    }

    /**
     * @param null $dumpSettings
     */
    public function dumpTables($dumpSettings = null)
    {
        if ($dumpSettings['compress'] === true) {
            $dumpSettings['compress'] = 'Gzip';
        }

        try {
            $fileExtension = ($dumpSettings['compress'] === 'Gzip') ? '.zip' : '.sql';
            $fileName = MYDATABASE . '_' . date("Y_m_d", time()) . $fileExtension;

            $dump = new IMysqldump\Mysqldump('mysql:host=' . MYSERVER . ';dbname=' . MYDATABASE, MYLOGIN, MYPASSWORD,
                $dumpSettings);
            $dump->start('/tmp/' . $fileName);

            $fileDownload = FileDownload::createFromFilePath("/tmp/" . $fileName);
            $fileDownload->sendDownload($fileName);

        } catch (Exception $e) {
            echo 'mysqldump-php error: ' . $e->getMessage();
        }
    }

    /**
     * @return bool
     */
    public function isUpdate(): bool
    {
        return $this->update;
    }

    /**
     * @return mixed
     */
    public function getNewVersion()
    {
        return $this->newVersion;
    }
}
