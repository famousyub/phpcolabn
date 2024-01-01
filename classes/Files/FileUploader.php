<?php


namespace phpCollab\Files;

use Exception;
use phpCollab\Database;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class Files
 * @package phpCollab\Files
 */
class FileUploader
{
    protected $files_gateway;
    protected $db;
    protected $strings;
    protected $root;
    private $fileExtension;

    private $fileObj;

    /**
     * Files constructor.
     * @param Database $database
     * @param UploadedFile $fileObj
     */
    public function __construct(Database $database, UploadedFile $fileObj)
    {
        $this->db = $database;
        $this->files_gateway = new FilesGateway($this->db);
        $this->strings = $GLOBALS["strings"];
        $this->root = $GLOBALS["root"];

        $this->fileObj = $fileObj;
    }

    /**
     * @return void
     */
    private function hasErrors(): void
    {
        // Check for any errors with the file
        try {
            CheckForFileErrorsService::hasErrors($this->fileObj);
            return;
        } catch (Exception $exception) {
            return;
        }
    }

    /**
     * @throws Exception
     */
    private function isFileTooBig()
    {
        // Check that the file does not exceed the size limitations.
        FileExceedsSizeService::exceedsSize($this->fileObj);
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function checkFileUpload(): bool
    {
        try {
            $this->hasErrors();
            $this->isFileTooBig();
            $this->fileObj->getErrorMessage();

            /**
             * Check to see if the file is an allowed mime-type
             */
            $extension = GuessMimeType::isAllowedMimeType(
                $this->fileObj,
                GuessMimeType::IMAGES
            );

            if (is_string($extension)) {
                $this->fileExtension = $extension;
            }
            return true;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * @return mixed
     */
    public function getFileExtension()
    {
        return $this->fileExtension;
    }

    /**
     * @param string $path
     * @param string $name
     * @param string|null $extension
     * @return File
     * @throws Exception
     */
    public function move(string $path, string $name, string $extension = null): File
    {
        if (is_null($extension) && is_null($this->fileExtension)) {
            throw new Exception('Extension is invalid or not set.');
        }

        if (is_null($extension) && !is_null($this->fileExtension)) {
            $extension = $this->fileExtension;
        }

        $fileName = $name . '.' . $extension;

        return $this->fileObj->move($path, $fileName);
    }
}
