<?php

$checkSession = "true";
require_once '../includes/library.php';

$strings = $GLOBALS["strings"];

$setTitle .= " : " . $strings["my_reports"];

include APP_ROOT . '/views/layout/header.php';

$blockPage = new phpCollab\Block();
$blockPage->openBreadcrumbs();
$blockPage->itemBreadcrumbs($blockPage->buildLink("../reports/listreports.php?", $strings["reports"], "in"));
$blockPage->itemBreadcrumbs($strings["my_reports"]);
$blockPage->closeBreadcrumbs();

if ($msg != "") {
    include '../includes/messages.php';
    $blockPage->messageBox($msgLabel);
}

$block1 = new phpCollab\Block();

$block1->form = "wbSe";
$block1->openForm("../reports/listreports.php#" . $block1->form . "Anchor", null, $csrfHandler);

$block1->heading($strings["my_reports"]);

try {
    $reports = $container->getReportsLoader();
} catch (Exception $exception) {
    $logger->error('Exception', ['Error' => $exception->getMessage()]);
}

$sorting = $block1->sortingValue;

$dataSet = $reports->getReportsByOwner($session->get("id"), $sorting);

$reportCount = count($dataSet);

$block1->openPaletteIcon();
$block1->paletteIcon(0, "add", $strings["add"]);
if ($reportCount !== 0) {
    $block1->paletteIcon(1, "remove", $strings["delete"]);
}
$block1->closePaletteIcon();

$block1->sorting("reports", $sortingUser["reports"], "rep.name ASC",
    $sortingFields = [0 => "rep.name", 1 => "rep.created"]);


if ($dataSet) {
    $block1->openResults();
    $block1->labels($labels = [0 => $strings["name"], 1 => $strings["created"]], "false");

    foreach ($dataSet as $data) {
        $block1->openRow();
        $block1->checkboxRow($data["rep_id"]);
        $block1->cellRow($blockPage->buildLink("../reports/resultsreport.php?id=" . $data["rep_id"], $data["rep_name"],
            "in"));
        $block1->cellRow(phpCollab\Util::createDate($data["rep_created"], $session->get("timezone")));
    }
    $block1->closeResults();
} else {
    $block1->noresults();
}

$block1->closeFormResults();

$block1->openPaletteScript();
$block1->paletteScript(0, "add", "../reports/createreport.php?", "true,true,true", $strings["add"]);
if ($reportCount !== 0) {
    $block1->paletteScript(1, "remove", "../reports/deletereports.php?", "false,true,true", $strings["delete"]);
}
$block1->closePaletteScript($reportCount, array_column($dataSet, 'rep_id'));

include APP_ROOT . '/views/layout/footer.php';
