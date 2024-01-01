<?php

$checkSession = "true";
require_once '../includes/library.php';

try {
    $bookmarks = $container->getBookmarksLoader();
} catch (Exception $exception) {
    $logger->error('Exception', ['Error' => $exception->getMessage()]);
}

$id = $request->query->get("id");

$bookmarkDetail = $bookmarks->getBookmarkById($id);

if ($bookmarkDetail['boo_users'] != "") {
    $pieces = explode("|", $bookmarkDetail['boo_users']);
    $comptPieces = count($pieces);
    $private = "false";
    for ($i = 0; $i < $comptPieces; $i++) {
        if ($session->get("id") == $pieces[$i]) {
            $private = "true";
        }
    }
}

if (
    ($bookmarkDetail['boo_users'] == "" && $bookmarkDetail['boo_owner'] != $session->get("id") && $bookmarkDetail['boo_shared'] == "0")
    ||
    ($private == "false" && $bookmarkDetail['boo_owner'] != $session->get("id"))
) {
    phpCollab\Util::headerFunction("../bookmarks/listbookmarks.php?view=my&msg=bookmarkOwner");
}

$setTitle .= " : View Bookmark (" . $bookmarkDetail['boo_name'] . ")";

include APP_ROOT . '/views/layout/header.php';

$blockPage = new phpCollab\Block();
$blockPage->openBreadcrumbs();
$blockPage->itemBreadcrumbs($blockPage->buildLink("../bookmarks/listbookmarks.php?view=" . $request->query->get('view'),
    $strings["bookmarks"], 'in'));
$blockPage->itemBreadcrumbs($bookmarkDetail['boo_name']);
$blockPage->closeBreadcrumbs();

if ($msg != "") {
    include '../includes/messages.php';
    $blockPage->messageBox($msgLabel);
}

$block1 = new phpCollab\Block();
$block1->form = "tdD";
$block1->openForm("../bookmarks/viewbookmark.php#" . $block1->form . "Anchor", null, $csrfHandler);
$block1->heading($strings["bookmark"] . " : " . $bookmarkDetail['boo_name']);
if ($bookmarkDetail['boo_owner'] == $session->get("id")) {
    $block1->openPaletteIcon();
    $block1->paletteIcon(0, "remove", $strings["delete"]);

    $block1->paletteIcon(4, "edit", $strings["edit"]);
    $block1->closePaletteIcon();
}

$block1->openContent();
$block1->contentTitle($strings["info"]);

$block1->contentRow($strings["name"], $bookmarkDetail['boo_name']);
$block1->contentRow($strings["url"],
    $blockPage->buildLink(htmlspecialchars($bookmarkDetail['boo_url'], ENT_QUOTES ), htmlspecialchars($bookmarkDetail['boo_url'], ENT_QUOTES), 'out'));
$block1->contentRow($strings["description"], nl2br($bookmarkDetail['boo_description']));

$block1->closeContent();
$block1->closeForm();

if ($bookmarkDetail['boo_owner'] == $session->get("id")) {
    $block1->openPaletteScript();
    $block1->paletteScript(0, "remove", "../bookmarks/deletebookmarks.php?id=" . $bookmarkDetail['boo_id'] . "",
        "true,true,false", $strings["delete"]);
    $block1->paletteScript(4, "edit", "../bookmarks/editbookmark.php?id=" . $bookmarkDetail['boo_id'] . "",
        "true,true,false", $strings["edit"]);

    $block1->closePaletteScript("", []);
}

include APP_ROOT . '/views/layout/footer.php';
