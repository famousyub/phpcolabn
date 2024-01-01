<?php
#Application name: PhpCollab

$checkSession = "true";
require_once '../includes/library.php';

$setTitle .= " : " . $strings["bulletin_board"];

$bouton[5] = "over";
$titlePage = $strings["bulletin_board"];

include APP_ROOT . '/projects_site/include_header.php';

try {
    $topics = $container->getTopicsLoader();
} catch (Exception $exception) {
    $logger->error('Exception', ['Error' => $exception->getMessage()]);
}

$listTopics = $topics->getProjectSiteTopics($session->get("project"), 'topic.last_post DESC');

$block1 = new phpCollab\Block();

if ($session->getFlashBag()->has('message')) {
    $block1->messageBox( $session->getFlashBag()->get('message')[0] );
}

$block1->heading($strings["bulletin_board"]);

if (!empty($listTopics)) {
    echo <<<TABLE
<table class="listing striped">
    <tr>
        <th>{$strings["topic"]}</th>
        <th>{$strings["posts"]}</th>
        <th>{$strings["owner"]}</th>
        <th class="active">{$strings["last_post"]}</th>
    </tr>
    <tbody>
TABLE;

    foreach ($listTopics as $listTopic) {
        $topicDate = phpCollab\Util::createDate($listTopic["top_last_post"], $session->get("timezone"));
        echo <<< TR
<tr>
    <td><a href="showallthreads.php?topic={$listTopic["top_id"]}">{$listTopic["top_subject"]}</a></td>
    <td>{$listTopic["top_posts"]}</td>
    <td>{$listTopic["top_mem_name"]}</td>
    <td>$topicDate</td></tr>
TR;
    }
    echo "</tbody></table><hr />";
} else {
    echo <<<NORESULTS
    <table>
        <tr>
            <td colspan="4">{$strings["no_items"]}</td>
        </tr>
    </table>
    <hr>
NORESULTS;
}

echo <<<CREATE
<br><br>
<a href="createthread.php?" class="FooterCell">{$strings["create_topic"]}</a>
CREATE;


include APP_ROOT . "/projects_site/include_footer.php";
