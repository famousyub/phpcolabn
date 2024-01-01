<?php

$checkSession = "true";
require_once '../includes/library.php';

if ($request->isMethod('post')) {

    if ($request->request->get('tables')) {

        $dumpSettings = [
            'include-tables' => $request->request->get('tables'),
        ];

        if ($request->request->get('what') == "structureonly") {
            $dumpSettings['no-data'] = true;
        }

        if ($request->request->get('what') == "dataonly") {
            $dumpSettings['no-create-info'] = true; // Data only
        }

        if ((bool)$request->request->get('drop')) {
            $dumpSettings['add-drop-table'] = true;
        }

        if ((bool)$request->request->get('extended_insert')) {
            $dumpSettings['extended-insert'] = true;
        }

        if ((bool)$request->request->get('complete_insert')) {
            $dumpSettings['complete-insert'] = true;
        }

        if ($request->request->get('zip') == 'zip') {
            $dumpSettings['compress'] = true;
        }

        $admins = $container->getAdministration();

        $admins->dumpTables($dumpSettings);

    } else {
        return;
    }
}




