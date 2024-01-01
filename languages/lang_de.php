<?php
#Application name: PhpCollab
#Status page: 2
#Path by root: ../languages/lang_de.php

//translator(s): Jochen B�nnagel, Wolfram Lamm, Andreas Nagler
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$dayNameArray = array(
    1 => "Montag",
    2 => "Dienstag",
    3 => "Mittwoch",
    4 => "Donerstag",
    5 => "Freitag",
    6 => "Samstag",
    7 => "Sonntag"
);

$monthNameArray = array(
    1 => "Januar",
    "Februar",
    "M&auml;rz",
    "April",
    "Mai",
    "Juni",
    "Juli",
    "August",
    "September",
    "Oktober",
    "November",
    "Dezember"
);

$status = array(0 => "Kunde fertig", 1 => "fertig", 2 => "nicht begonnen", 3 => "offen", 4 => "unterbrochen");

$profil = array(
    0 => "Administrator",
    1 => "Projektmanager",
    2 => "Benutzer",
    3 => "Kunde",
    4 => "Disabled",
    5 => "Project Manager Administrator"
);

$priority = array(0 => "keine", 1 => "sehr niedrig", 2 => "niedrig", 3 => "mittel", 4 => "hoch", 5 => "sehr hoch");

$statusTopic = array(0 => "geschlossen", 1 => "offen");
$statusTopicBis = array(0 => "ja", 1 => "nein");

$statusPublish = array(0 => "ja", 1 => "nein");

$statusFile = array(
    0 => "freigegeben",
    1 => "editiert freigegeben",
    2 => "wartet auf Freigabe",
    3 => "keine Freigabe n&ouml;tig",
    4 => "nicht freigegeben"
);

$phaseStatus = array(0 => "Nicht begonnen", 1 => "Offen", 2 => "Fertig", 3 => "Ausgesetzt");

$requestStatus = array(0 => "Neu", 1 => "Offen", 2 => "Fertig");

$invoiceStatus = array(0 => "Offen", 1 => "Versendet", 2 => "Bezahlt");

$strings["please_login"] = "Bitte anmelden";
$strings["requirements"] = "Systemanforderungen";
$strings["login"] = "Anmelden";
$strings["no_items"] = "Nichts Anzuzeigen";
$strings["logout"] = "Abmelden";
$strings["preferences"] = "Einstellungen";
$strings["my_tasks"] = "Meine Aufgaben";
$strings["edit_task"] = "Aufgabe bearbeiten";
$strings["copy_task"] = "Aufgabe kopieren";
$strings["add_task"] = "Aufgabe hinzuf&uuml;gen";
$strings["delete_tasks"] = "Aufgaben l&ouml;schen";
$strings["assignment_history"] = "Historie der Zuweisung";
$strings["assigned_on"] = "zugewiesen am";
$strings["assigned_by"] = "zugewiesen von";
$strings["to"] = "an";
$strings["comment"] = "Kommentar";
$strings["task_assigned"] = "Aufgabe zugewiesen an";
$strings["task_unassigned"] = "Aufgabe nicht zugewiesen";
$strings["edit_multiple_tasks"] = "mehrere Aufgaben bearbeiten";
$strings["tasks_selected"] = "Aufgaben ausgew&auml;hlt. W&auml;hlen Sie neue Werte oder [keine &Auml;nderung] um die aktuellen Werte zu behalten";
$strings["assignment_comment"] = "Kommentar zur Zuweisung";
$strings["no_change"] = "[keine &Auml;nderung]";
$strings["my_discussions"] = "Meine Diskussionen";
$strings["discussions"] = "Diskussionen";
$strings["delete_discussions"] = "Diskussionen l&ouml;schen";
$strings["delete_discussions_note"] = "Anmerkung: Diskussionen k&ouml;nnen nach dem L&ouml;schen nicht mehr ge&ouml;ffnet werden.";
$strings["topic"] = "Thema";
$strings["posts"] = "Nachrichten";
$strings["latest_post"] = "letzte Nachricht";
$strings["my_reports"] = "Meine Berichte";
$strings["reports"] = "Berichte";
$strings["create_report"] = "Bericht erzeugen";
$strings["report_intro"] = "W&auml;hlen Sie hier die Parameter f&uuml;r ihren Aufgabenbericht und speichern Sie ihn sp&auml;ter auf der Ergebnisseite.";
$strings["admin_intro"] = "Projekteinstellungen und Konfiguration";
$strings["copy_of"] = "Kopie von ";
$strings["add"] = "Hinzuf&uuml;gen";
$strings["delete"] = "L&ouml;schen";
$strings["remove"] = "Entfernen";
$strings["copy"] = "Kopieren";
$strings["view"] = "Ansehen";
$strings["edit"] = "Bearbeiten";
$strings["update"] = "Aktualisieren";
$strings["none"] = "Keine";
$strings["close"] = "Schlie&szlig;en";
$strings["new"] = "Neu";
$strings["select_all"] = "Alle Ausw&auml;hlen";
$strings["unassigned"] = "Nicht Zugewiesen";
$strings["my_projects"] = "Meine Projekte";
$strings["project"] = "Projekt";
$strings["active"] = "Aktiv";
$strings["inactive"] = "Inaktiv";
$strings["project_id"] = "Projekt ID";
$strings["edit_project"] = "Projekt editieren";
$strings["copy_project"] = "Projekt kopieren";
$strings["add_project"] = "Projekt hinzuf&uuml;gen";
$strings["clients"] = "Kunden";
$strings["organization"] = "Kundenorganisation";
$strings["client_projects"] = "Kundenprojekte";
$strings["client_users"] = "Kundenbenutzer";
$strings["edit_organization"] = "Kundenorganisation editieren";
$strings["add_organization"] = "Kundenorganisation hinzuf&uuml;gen";
$strings["organizations"] = "Kundenorganisationen";
$strings["owner"] = "Besitzer";
$strings["projects"] = "Projekte";
$strings["files"] = "Dateien";
$strings["search"] = "Suchen";
$strings["user"] = "Benutzer";
$strings["project_manager"] = "Projektmanager";
$strings["due"] = "F&auml;llig";
$strings["task"] = "Aufgabe";
$strings["tasks"] = "Aufgaben";
$strings["add_team"] = "Teammitglieder hinzuf&uuml;gen";
$strings["team_members"] = "Teammitglieder";
$strings["full_name"] = "Voller Name";
$strings["title"] = "Titel";
$strings["user_name"] = "Benutzername";
$strings["work_phone"] = "Telefon Dienstlich";
$strings["priority"] = "Priorit&auml;t";
$strings["description"] = "Beschreibung";
$strings["phone"] = "Telefon";
$strings["address"] = "Addresse";
$strings["comments"] = "Kommentare";
$strings["created"] = "Angelegt";
$strings["assigned"] = "Zugewiesen";
$strings["modified"] = "Ge&auml;ndert";
$strings["assigned_to"] = "Besitzer";
$strings["due_date"] = "F&auml;lligkeit";
$strings["estimated_time"] = "Gesch&auml;tzte Zeit";
$strings["actual_time"] = "Tats&auml;chliche Zeit";
$strings["delete_following"] = "Folgendes l&ouml;schen?";
$strings["cancel"] = "Abbrechen";
$strings["and"] = "und";
$strings["user_management"] = "Benutzerverwaltung";
$strings["system_information"] = "Systeminformationen";
$strings["product_information"] = "Produktinformationen";
$strings["system_properties"] = "Systemeigenschaften";
$strings["create"] = "Anlegen";
$strings["report_save"] = "Speichern Sie diesen Bericht auf Ihre Startseite, um ihn sp&auml;ter erneut zu erstellen.";
$strings["report_name"] = "Name des Berichts";
$strings["save"] = "Speichern";
$strings["matches"] = "Treffer";
$strings["match"] = "Treffer";
$strings["report_results"] = "Ergebnis des Berichts";
$strings["success"] = "Erfolg";
$strings["addition_succeeded"] = "Hinzuf&uuml;gen erfolgreich";
$strings["deletion_succeeded"] = "L&ouml;schen erfolgreich";
$strings["report_created"] = "Bericht angelegt";
$strings["deleted_reports"] = "Berichte gel&ouml;scht";
$strings["modification_succeeded"] = "&Auml;nderung erfolgreich";
$strings["errors"] = "Fehler gefunden";
$strings["blank_user"] = "Der Benutzer wurde nicht gefunden.";
$strings["blank_organization"] = "Die Kundenorganisation wurde nicht gefunden.";
$strings["blank_project"] = "Das Projekt wurde nicht gefunden.";
$strings["user_profile"] = "Benutzerprofil";
$strings["change_password"] = "Passwort &auml;ndern";
$strings["change_password_user"] = "Passwort des Benutzers &auml;ndern.";
$strings["old_password_error"] = "Das alte Passwort wurde nicht korrekt eingegeben. Bitte wiederholen Sie die Eingabe.";
$strings["new_password_error"] = "Die beiden neuen Passw&ouml;rter stimmen nicht &uuml;berein. Bitte wiederholen Sie die Eingabe.";
$strings["notifications"] = "Benachrichtigungen";
$strings["change_password_intro"] = "Altes Passwort eingeben, dann neues Passwort eingeben und best&auml;tigen.";
$strings["old_password"] = "Altes Passwort";
$strings["password"] = "Passwort";
$strings["new_password"] = "Neues Passwort";
$strings["confirm_password"] = "Passwort best&auml;tigen";
$strings["home_phone"] = "Telefon Privat";
$strings["mobile_phone"] = "Telefon Mobil";
$strings["permissions"] = "Berechtigungen";
$strings["administrator_permissions"] = "Administratorrechte";
$strings["project_manager_permissions"] = "Projektmanagerrechte";
$strings["user_permissions"] = "Benutzerrechte";
$strings["account_created"] = "Konto angelegt";
$strings["edit_user"] = "Benutzer editieren";
$strings["edit_user_details"] = "Kontendetails des Benutzers editieren.";
$strings["change_user_password"] = "Passwort des Benutzers &auml;ndern.";
$strings["select_permissions"] = "Berichtigungen f&uuml;r den Benutzer ausw&auml;hlen.";
$strings["add_user"] = "Benutzer hinzuf&uuml;gen";
$strings["enter_user_details"] = "Geben Sie die Details des anzulegenden Kontos ein.";
$strings["enter_password"] = "Geben Sie das Passwort des Benutzers ein.";
$strings["success_logout"] = "Sie haben sich erfolgreich abgemeldet. Sie k&ouml;nnen sich nun mit Ihrem Benutzernamen und Passwort wieder anmelden.";
$strings["invalid_login"] = "Der eingegebene Benutzername und/oder das Passwort sind ung&uuml;ltig. Bitte wiederholen Sie die Eingabe.";
$strings["profile"] = "Profil";
$strings["user_details"] = "Benutzerinformationen editieren";
$strings["edit_user_account"] = "Editieren Sie Ihre Benutzerinformationen";
$strings["no_permissions"] = "Sie sind zu dieser Aktion nicht berechtigt.";
$strings["discussion"] = "Diskussion";
$strings["retired"] = "Im Ruhestand";
$strings["last_post"] = "Letzte Nachricht";
$strings["post_reply"] = "Antwort Schreiben";
$strings["posted_by"] = "Geschrieben von";
$strings["when"] = "Wann";
$strings["post_to_discussion"] = "Abschicken";
$strings["message"] = "Nachricht";
$strings["delete_reports"] = "Berichte L&ouml;schen";
$strings["delete_projects"] = "Projekte L&ouml;schen";
$strings["delete_organizations"] = "Kundenorganisationen L&ouml;schen";
$strings["delete_organizations_note"] = "Anmerkung: Alle Kundenbenutzer dieser Organisationen werden gel&ouml;scht und alle ihre Projekte verlieren Ihre Zuordnung.";
$strings["delete_messages"] = "Nachrichten L&ouml;schen";
$strings["attention"] = "Achtung";
$strings["delete_teamownermix"] = "Entfernen erfolgreich, aber der Besitzer kann nicht aus dem Projektteam entfernt werden.team.";
$strings["delete_teamowner"] = "Der Besitzer kann nicht aus dem Projektteam entfernt werden.";
$strings["enter_keywords"] = "Schl&uuml;sselworte eingeben";
$strings["search_options"] = "Schl&uuml;sselworte und Suchoptionen";
$strings["search_note"] = "Das Feld &quot;Suchen nach&quot; muss ausgef&uuml;llt sein.";
$strings["search_results"] = "Suchergebnisse";
$strings["users"] = "Benutzer";
$strings["search_for"] = "Suchen nach";
$strings["results_for_keywords"] = "Suchergebnisse f&uuml;r Schl&uuml;sselworte";
$strings["add_discussion"] = "Diskussion Hinzuf&uuml;gen";
$strings["delete_users"] = "Benutzerkonten L&ouml;schen";
$strings["reassignment_user"] = "Projekte und Aufgaben neu zuordnen";
$strings["there"] = "Es sind";
$strings["owned_by"] = "Im Besitz der oben genannten Nutzer.";
$strings["reassign_to"] = "Vor dem L&ouml;schen von Benutzern, diese zuweisen an";
$strings["no_files"] = "Keine Dateien verkn&uuml;pft";
$strings["published"] = "Ver&ouml;ffentlicht";
$strings["project_site"] = "Projektsite";
$strings["approval_tracking"] = "Freigabeverfolgung";
$strings["size"] = "Gr&ouml;&szlig;e";
$strings["add_project_site"] = "Zur Projektsite hinzuf&uuml;gen";
$strings["remove_project_site"] = "Von der Projektsite entfernen";
$strings["more_search"] = "Weitere Suchoptionen";
$strings["results_with"] = "Ergebnisse finden mit";
$strings["search_topics"] = "Themen Suchen";
$strings["search_properties"] = "Eigenschaften Suchen";
$strings["date_restrictions"] = "Datumsgrenzen";
$strings["case_sensitive"] = "Gro&szlig;/Kleinschreibung";
$strings["yes"] = "Ja";
$strings["no"] = "Nein";
$strings["sort_by"] = "Sortieren nach";
$strings["type"] = "Typ";
$strings["date"] = "Datum";
$strings["all_words"] = "alle W&ouml;rter";
$strings["any_words"] = "min. ein Wort";
$strings["exact_match"] = "Genaue &Uuml;bereinstimmung";
$strings["all_dates"] = "Alle Daten";
$strings["between_dates"] = "Zwischen Daten";
$strings["all_content"] = "Aller Inhalt";
$strings["all_properties"] = "Alle Eigenschaften";
$strings["no_results_search"] = "Die Suche lieferte kein Ergebnis.";
$strings["no_results_report"] = "Der Bericht lieferte kein Ergebnis.";
$strings["schema_date"] = "JJJJ/MM/TT";
$strings["hours"] = "Stunden";
$strings["choice"] = "Auswahl";
$strings["missing_file"] = "Datei fehlt!";
$strings["project_site_deleted"] = "Projektsite erfolgreich gel&ouml;scht.";
$strings["add_user_project_site"] = "Der Benutzer hat jetzt Zugriff auf die Projektsite.";
$strings["remove_user_project_site"] = "Benutzerberechtigung erfolgreich entfernt.";
$strings["add_project_site_success"] = "Hinzuf&uuml;gen zur Projektsite erfolgreich.";
$strings["remove_project_site_success"] = "Entfernen von der Projektsite erfolgreich.";
$strings["add_file_success"] = "Eine Datei verkn&uuml;pft.";
$strings["delete_file_success"] = "Verkn&uuml;pfung erfolgreich entfernt.";
$strings["update_comment_file"] = "Dateikommentar erfolgreich ge&auml;ndert.";
$strings["session_false"] = "Fehlerhafte Benutzersitzung";
$strings["logs"] = "Protokolle";
$strings["logout_time"] = "Automatisch abmelden";
$strings["noti_foot1"] = "Diese Mitteilung wurde von PhpCollab erzeugt.";
$strings["noti_foot2"] = "Ihre PhpCollab Homepage finden sie hier:";
$strings["noti_taskassignment1"] = "Neue Aufgabe:";
$strings["noti_taskassignment2"] = "Ihnen wurde eine Aufgabe zugewiesen:";
$strings["noti_moreinfo"] = "Weitere Informationen hier:";
$strings["noti_prioritytaskchange1"] = "Aufgabenpriorit&auml;t ge&auml;ndert:";
$strings["noti_prioritytaskchange2"] = "Die Priorit&auml;t der folgenden Aufgabe wurde ge&auml;ndert:";
$strings["noti_statustaskchange1"] = "Aufgabenstatus ge&auml;ndert:";
$strings["noti_statustaskchange2"] = "Der Status der folgenden Aufgabe wurde ge&auml;ndert:";
$strings["login_username"] = "Sie m&uuml;ssen einen Benutzernamen eingeben.";
$strings["login_password"] = "Bitte geben Sie ein Passwort ein.";
$strings["login_clientuser"] = "Dies ist ein Kunden-Benutzerkonto. Sie haben damit keinen Zugriff auf PhpCollab.";
$strings["user_already_exists"] = "Es existiert bereits ein Benutzer mit diesem Namen. Bitte w&auml;hlen Sie eine Abwandlung des Benutzernamens.";
$strings["noti_duedatetaskchange1"] = "Aufgabenf&auml;lligkeit ge&auml;ndert:";
$strings["noti_duedatetaskchange2"] = "Die F&auml;lligkeit der folgenden Aufgaben wurde ge&auml;ndert:";
$strings["company"] = "Unternehmen";
$strings["show_all"] = "Alle anzeigen";
$strings["delete_message"] = "Diese Nachricht l&ouml;schen";
$strings["project_team"] = "Projektteam";
$strings["document_list"] = "Dokumentenliste";
$strings["bulletin_board"] = "Diskussionsforum";
$strings["bulletin_board_topic"] = "Diskussionsthema";
$strings["create_topic"] = "Neues Thema anlegen";
$strings["topic_form"] = "Themenformular";
$strings["enter_message"] = "Geben Sie Ihre Nachricht ein";
$strings["upload_file"] = "Datei hochladen";
$strings["upload_form"] = "Formular hochladen";
$strings["upload"] = "Hochladen";
$strings["document"] = "Dokument";
$strings["approval_comments"] = "Freigabekommentar";
$strings["client_tasks"] = "Aufgaben des Kunden";
$strings["team_tasks"] = "Aufgaben des Teams";
$strings["team_member_details"] = "Details der Projektteam-Mitglieder";
$strings["client_task_details"] = "Details der Kundenaufgaben";
$strings["team_task_details"] = "Details der Teamaufgaben";
$strings["language"] = "Sprache";
$strings["welcome"] = "Willkommen";
$strings["your_projectsite"] = "zu Ihrer Projektsite";
$strings["contact_projectsite"] = "Wenn Sie Fragen &uuml;ber das Extranet haben, wenden Sie sich an den Projektleiter";
$strings["company_details"] = "Firmendetails";
$strings["database"] = "Datenbank sichern und wiederherstellen";
$strings["company_info"] = "Firmeninformation editieren";
$strings["create_projectsite"] = "Projektsite anlegen";
$strings["projectsite_url"] = "URL der Projektsite";
$strings["design_template"] = "Designvorlage";
$strings["preview_design_template"] = "Vorschau der Designvorlage";
$strings["delete_projectsite"] = "Projektsite l&ouml;schen";
$strings["add_file"] = "Datei hinzuf&uuml;gen";
$strings["linked_content"] = "Verkn&uuml;pfte Inhalte";
$strings["edit_file"] = "Dateiinformationen editieren";
$strings["permitted_client"] = "Berechtigte Kundenbenutzer";
$strings["grant_client"] = "Berechtigung f&uuml;r die Projektsite";
$strings["add_client_user"] = "Kundenbenutzer hinzuf&uuml;gen";
$strings["edit_client_user"] = "Kundenbenutzer editieren";
$strings["client_user"] = "Kundenbenutzer";
$strings["client_change_status"] = "&Auml;ndern Sie Ihren Status, wenn Sie diese Aufgabe abgeschlossen haben.";
$strings["project_status"] = "Projektstatus";
$strings["view_projectsite"] = "Projektsite anzeigen";
$strings["enter_login"] = "Geben Sie Ihren Benutzernamen ein, um das Passwort zu erhalten"; //"new password"
$strings["send"] = "Abschicken";
$strings["no_login"] = "Benutzername nicht in der Datenbank";
$strings["email_pwd"] = "Passwort abgeschickt";
$strings["no_email"] = "Keine Email Adresse angegeben";
$strings["forgot_pwd"] = "Passwort vergessen?";
$strings["project_owner"] = "Sie k&ouml;nnen nur Ihre eigenen Projekte &auml;ndern.";
$strings["connected"] = "Verbunden";
$strings["session"] = "Sitzung";
$strings["last_visit"] = "Letzter Besuch";
$strings["task_owner"] = "Sie sind kein Mitglied dieses Projekts";
$strings["export"] = "Exportieren";
$strings["reassignment_clientuser"] = "Neuzuweisung der Aufgabe";
$strings["organization_already_exists"] = "Dieser Name ist bereits vergeben. Bitte w&auml;hlen Sie einen anderen.";
$strings["blank_organization_field"] = "Bitte geben Sie den Namen der Kundenorganisation ein.";
$strings["blank_fields"] = "Pflichtfelder";
$strings["projectsite_login_fails"] = "Es ist nicht m�glich diesen Benutzernamen und Passwort zu best�tigen.";
$strings["start_date"] = "Start Datum";
$strings["completion"] = "Fertig";
$strings["update_available"] = "Ein Update ist verf&uuml;gbar!";
$strings["version_current"] = "Benutzte Version";
$strings["version_latest"] = "Die neuste Version ist";
$strings["sourceforge_link"] = "Siehe Projektseite auf Sourceforge";
$strings["demo_mode"] = "Demo Modus. Aktion nicht erlaubt.";
$strings["setup_erase"] = "Datei setup.php l&ouml;schen!!";
$strings["setup_erase_file"] = "Klicken Sie hier, um zu versuchen und entfernen Sie die Setup-Datei.";
$strings["setup_erase_file_ua"] = "Wir können es uns nicht entfernen Sie die Datei, ist es nicht writtable. Bitte löschen Sie manuell.";
$strings["no_file"] = "Keine Datei ausgew&auml;hlt";
$strings["exceed_size"] = "Maximale Dateigr&ouml;&szlig;e &uuml;berschritten";//FIXED szlig
$strings["no_php"] = "Php Dateien nicht erlaubt";
$strings["approval_date"] = "Datum der Freigabe";
$strings["approver"] = "Freigegeben von";
$strings["error_database"] = "Keine Verbindung zur Datenbank";
$strings["error_server"] = "Keine Verbindung zum Server";
$strings["version_control"] = "Versionskontrolle";
$strings["vc_last_in"] = "Zuletzt ge&auml;ndert";
$strings["ifa_comments"] = "Kommentare zur Freigabe";
$strings["ifa_command"] = "Freigabestatus &auml;ndern";
$strings["ifc_revisions"] = "Alternativen";
$strings["ifc_revision_of"] = "Alternative zu Version";
$strings["ifc_add_revision"] = "Alternative hinzuf&uuml;gen";
$strings["ifc_update_file"] = "Update Datei";
$strings["ifc_last_date"] = "Zuletzt ge&auml;ndert";
$strings["ifc_version_history"] = "Versions Historie";
$strings["ifc_delete_file"] = "L�sche Datei und alle Kindversionen & Reviews";
$strings["ifc_delete_version"] = "Ausgew&auml;hlte Version l&ouml;schen";
$strings["ifc_delete_review"] = "Ausgew&auml;hlte Alternative l&ouml;schen";
$strings["ifc_no_revisions"] = "Zur Zeit keine Alternativen";
$strings["unlink_files"] = "ENDG&Uuml;LTIG l&ouml;schen";
$strings["remove_team"] = "L&ouml;sche Team Mitglieder";
$strings["remove_team_info"] = "Diese Beutzer vom Projektteam l&ouml;schen?";
$strings["remove_team_client"] = "Berechtigung, die Projekt Sie zu sehen, l&ouml;schen";
$strings["note"] = "Notiz";
$strings["notes"] = "Notizen";
$strings["subject"] = "Betreff";
$strings["delete_note"] = "Notiz l&ouml;schen";
$strings["add_note"] = "Notiz hinzuf&uuml;gen";
$strings["edit_note"] = "Notiz &auml;ndern";
$strings["version_increm"] = "Versions&auml;nderung angeben:";
$strings["url_dev"] = "Development URL";
$strings["url_prod"] = "Endversion URL";
$strings["note_owner"] = "Nur eigene Notizen &auml;nderbar.";
$strings["alpha_only"] = "Nur alpha-numerisch im Login";
$strings["edit_notifications"] = "E-mail Benachrichtigungen &auml;ndern";
$strings["edit_notifications_info"] = "Erignisse ausw&auml;hlen, bei denen du benachrichtgt werden willst.";
$strings["select_deselect"] = "Alles an-/abw&auml;hlen";
$strings["noti_addprojectteam1"] = "Aufgenommen in das Projekt Team :";
$strings["noti_addprojectteam2"] = "Du wurdest in folgendes Projektteam aufgenommen :";
$strings["noti_removeprojectteam1"] = "Entfernen aus Projekt Team :";
$strings["noti_removeprojectteam2"] = "Du wurdest aus folgendem Projekt Team entfernt :";
$strings["noti_newpost1"] = "Neuer Beitrag :";
$strings["noti_newpost2"] = "Neuer Diskussionsbeitrag in :";
$strings["edit_noti_taskassignment"] = "Mir wurde eine neue Aufgabe zugewiesen.";
$strings["edit_noti_statustaskchange"] = "Der Status einer meiner Aufgaben wurde ge&auml;ndert.";
$strings["edit_noti_prioritytaskchange"] = "Die Priorit&auml;t einer meiner Aufgaben wurde ge&auml;ndert.";
$strings["edit_noti_duedatetaskchange"] = "Das Startdatum einer meiner Aufgaben wurde ge&auml;ndert.";
$strings["edit_noti_addprojectteam"] = "Ich wurde in ein Projekt Team aufgenommen.";
$strings["edit_noti_removeprojectteam"] = "Ich wurde aus einem Projekt Team entfernt.";
$strings["edit_noti_newpost"] = "In einer Diskussion wurde ein neuer Beitrag eingegeben.";
$strings["add_optional"] = "Eingeben wenn gew&uuml;scht:";
$strings["assignment_comment_info"] = "Kommentar &uuml;ber die Zuweisung eingeben";
$strings["my_notes"] = "Meine Notizen";
$strings["edit_settings"] = "Einstellungen &auml;ndern";
$strings["max_upload"] = "Maximale Dateigr&ouml;&szlig;e";//FIXED szlig
$strings["project_folder_size"] = "Project Verzeichnis (gr&ouml;&szlig;e)";
$strings["calendar"] = "Kalender";
$strings["date_start"] = "Start Datum";
$strings["date_end"] = "Ende Datum";
$strings["time_start"] = "Start Zeit";
$strings["time_end"] = "Ende Zeit";
$strings["calendar_reminder"] = "Erinnerung";
$strings["shortname"] = "Kurzname";
$strings["calendar_recurring"] = "Ereignis wiederholt sich jede Woche an diesem Tag";
$strings["edit_database"] = "Datenbank &auml;ndern";
$strings["noti_newtopic1"] = "Neue Diskussion :";
$strings["noti_newtopic2"] = "Eine neue Diskussion wurde in folgendem Projekt er&ouml;ffnet :";
$strings["edit_noti_newtopic"] = "Ein neuer Betreff in einer Diskussion wurde er&ouml;ffnet.";
$strings["today"] = "Heute";
$strings["previous"] = "Zur&uuml;ck";
$strings["next"] = "Weiter";
$strings["help"] = "Hilfe";
$strings["complete_date"] = "Fertig";
$strings["scope_creep"] = "Differenz";
$strings["days"] = "Tage";
$strings["remember_password"] = "Password speichern";
$strings["client_add_task_note"] = "Anmerkung: Die eingegebene Aufgabe wird in die Datenbank eingetragen, erscheint hier jedoch erst wenn sie einem Teammitglied zugeordnet wurde!";
$strings["noti_clientaddtask1"] = "Aufgabe vom Kunden hinzugef&uuml;gt :";
$strings["noti_clientaddtask2"] = "Beim folgenden Projekt wurde eine Aufgabe vom Kunden hinzugef&uuml;gt :";
$strings["phases"] = "Phasen";
$strings["current_phase"] = "Aktive Phase(n)";
$strings["total_tasks"] = "Aufgaben insgesamt";
$strings["uncomplete_tasks"] = "Unfertige Aufgaben";
$strings["no_current_phase"] = "Zur Zeit keine Phase aktiv";
$strings["enable_phases"] = "Phasen einschalten";
$strings["phase_enabled"] = "Phasen eingeschaltet";
$strings["options"] = "Optionen";
$strings["support_request"] = "Support Anfrage";
$strings["support_requests"] = "Support Anfragen";
$strings["support_id"] = "Anfrage ID";
$strings["my_support_request"] = "Meine Support Anfragen";
$strings["introduction"] = "Einf&uuml;hrung";
$strings["submit"] = "Absenden";
$strings["date_open"] = "Start Datum";
$strings["date_close"] = "Ende Datum";
$strings["add_support_request"] = "Neue Anfrage stellen";
$strings["add_support_response"] = "Anfrage beantworten";
$strings["respond"] = "Antworten";
$strings["delete_support_request"] = "Anfrage gel&ouml;scht";
$strings["delete_request"] = "Anfrage l&ouml;schen";
$strings["delete_support_post"] = "Anfrage l&ouml;schen";
$strings["new_requests"] = "Neue Anfragen";
$strings["open_requests"] = "Offene Anfragen";
$strings["closed_requests"] = "Alle Anfragen";
$strings["manage_new_requests"] = "Neue Anfragen bearbeiten";
$strings["manage_open_requests"] = "Offene Anfragen bearbeiten";
$strings["manage_closed_requests"] = "Alle Anfragen bearbeiten";
$strings["responses"] = "Antworten";
$strings["edit_status"] = "Status &auml;ndern";

$strings["noti_support_request_new2"] = "Eine Support Anfrage wurde gestellt. Betreff: ";
$strings["noti_support_post2"] = "Ein neuer Text wurde der Support Anfrage hinzugefuegt. Details:";
$strings["noti_support_status2"] = "Ihre Support Anfrage wurde bearbeitet. Details:";
$strings["noti_support_team_new2"] = "Eine neue Support Anfrage wurde gestellt baim Projekt ";
//2.0
$strings["delete_subtasks"] = "Unteraufgabe l&ouml;schen";
$strings["add_subtask"] = "Unteraufgabe hinzuf&uuml;gen";
$strings["edit_subtask"] = "Unteraufgabe &auml;ndern";
$strings["subtask"] = "Unteraufgabe";
$strings["subtasks"] = "Unteraufgaben";
$strings["show_details"] = "Details zeigen";
$strings["updates_task"] = "Aufgaben &Auml;nderungen";
$strings["updates_subtask"] = "Unteraufgaben &Auml;nderungen";
//2.1
$strings["go_projects_site"] = "Zur Projektseite";
$strings["bookmark"] = "Lesezeichen";
$strings["bookmarks"] = "Lesezeichen";
$strings["bookmark_category"] = "Kategorie";
$strings["bookmark_category_new"] = "Neue Kategorie";
$strings["bookmarks_all"] = "Alle";
$strings["bookmarks_my"] = "Meine Lesezeichen";
$strings["my"] = "Meine";
$strings["bookmarks_private"] = "Privat";
$strings["shared"] = "Allgemein";
$strings["private"] = "Privat";
$strings["add_bookmark"] = "Neues Lesezeichen";
$strings["edit_bookmark"] = "Lesezeichen &auml;ndern";
$strings["delete_bookmarks"] = "Lesezeichen l&ouml;schen";
$strings["client_subtask_details"] = "Kunden Subtask Details";
$strings["client_change_status_subtask"] = "Aendere den Status, wenn die Unteraufgabe fertig ist";
$strings["disabled_permissions"] = "Deaktivierter Account";
$strings["user_timezone"] = "Zeitzone (GMT)";
//2.2
$strings["bug"] = "Fehlerverfolgung";
//2.3
$strings["report"] = "Bericht";
//2.4
$strings["settings_notwritable"] = "Settings.php file ist nicht speicherbar";
//2.5
$strings["invoicing"] = "Rechnungen";
$strings["invoice"] = "Rechnung";
$strings["invoices"] = "Rechnungen";
$strings["date_invoice"] = "Rechnungsdatum";
$strings["header_note"] = "Kopfzeile";
$strings["footer_note"] = "Fusszeile";
$strings["total_ex_tax"] = "Gesamtbetrag ohne Steuer";
$strings["total_inc_tax"] = "Gesamtbetrag mit Steuer";
$strings["tax_rate"] = "Steuerrate";
$strings["tax_amount"] = "Steuerbetrag";
$strings["invoice_items"] = "Rechnungsposten";
$strings["amount_ex_tax"] = "Betrag ohne Steuer";
$strings["completed"] = "Fertiggestellt";
$strings["name_print"] = "Name";
$strings["edit_invoice"] = "Bearbeite Rechnung";
$strings["edit_invoiceitem"] = "Bearbeite Rechnungsposten";
$strings["calculation"] = "Berechnung";
$strings["items"] = "Posten";
$strings["service_management"] = "Service Management";
$strings["hourly_rate"] = "Stundenrate";
$strings["add_service"] = "Addiere Service";
$strings["edit_service"] = "Bearbeite Service";
$strings["delete_services"] = "L&ouml;sche Services";
$strings["worked_hours"] = "Gearbeitete Stunden";
$strings["rate_type"] = "Typ";
$strings["rate_value"] = "Betrag";
$strings["note_invoice_items_notcompleted"] = "Nicht alle Posten sind fertiggestellt";

$rateType = array(
    0 => "Geb&uuml;hr nach Kunde",
    1 => "Geb&uuml;hr nach Projekt",
    2 => "Geb&uuml;hr nach Organisation",
    3 => "Geb&uuml;hr nach Service"
);

//HACKS

$strings["update_newsdesk"] = "Aktualisiere Eintr&auml;ge";
$strings["my_newsdesk"] = "Mein Newsdesk";
$strings["edit_newsdesk"] = "Bearbeite Artikel";
$strings["copy_newsdesk"] = "Kopiere Artikel";
$strings["add_newsdesk"] = "Artikel hinzuf&uuml;gen";
$strings["del_newsdesk"] = "L&ouml;sche Artikel";
$strings["delete_news_note"] = "Achtung: Dies l&ouml;scht auch alle Kommentare des gew&auml;hlten Artikels";
$strings["author"] = "Autor";
$strings["blank_newsdesk_title"] = "Leerer Titel gefunden";
$strings["blank_newsdesk"] = "News kann nicht gefunden werden.";
$strings["blank_newsdesk_comment"] = "Leerer Kommentar gefunden";
$strings["remove_newsdesk"] = "Der News Artikel wurde mit all seinen Kommentaren gel&ouml;scht";
$strings["add_newsdesk_comment"] = "F&uuml;ge Kommentar zum Artikel hinzu";
$strings["edit_newsdesk_comment"] = "Bearbeite Kommentar zum Artikel";
$strings["del_newsdesk_comment"] = "L&ouml;sche Kommentar zum News Artikel";
$strings["remove_newsdesk_comment"] = "Der Kommentar zum News Artikel wurde gel&ouml;scht";
$strings["errorpermission_newsdesk"] = "Keine Berechtigung zum Bearbeiten oder L&ouml;schen";
$strings["errorpermission_newsdesk_comment"] = "Keine Berechtigung zum Bearbeiten oder L&ouml;schen";
$strings["newsdesk_related"] = "Zum Projekt zugeordnet";
$strings["newsdesk_related_generic"] = "Allgemeine News (zu keinem Projekt zugeordnet)";
$strings["newsdesk_related_links"] = "Zugeordneter Link zu den News";
$strings["newsdesk_rss"] = "Aktiviere RSS f&uuml;r diese News";
$strings["newsdesk_rss_enabled"] = "RSS f&uuml;r diese News aktiviert";

$strings["noti_memberactivation1"] = "Account wurde aktiviert";
$strings["noti_memberactivation3"] = "Benutzername:";
$strings["noti_memberactivation4"] = "Kennwort:";

//BEGIN email project users mod
$strings["email_users"] = "Email Benutzer";
$strings["email_following"] = "Email folgt";
$strings["email_sent"] = "Ihre email wurde erfolgreich verschickt.";
//END email project users mod

$strings["clients_connected"] = "(Kunden auf der Projekt Site)";

//2.5rc3
$strings["my_subtasks"] = "Meine Teilaufgaben";
