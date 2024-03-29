<?php
#Application name: PhpCollab
#Status page: 2
//translator(s): Luca Mercuri <siggy@siggy.info>, Francesco Fullone <fullone@csr.unibo.it>
$byteUnits = array('Byte', 'KB', 'MB', 'GB');

$dayNameArray = array(
    1 => "Lunedi",
    2 => "Martedi",
    3 => "Mercoledi",
    4 => "Giovedi",
    5 => "Venerdi",
    6 => "Sabato",
    7 => "Domenica"
);

$monthNameArray = array(
    1 => "Gennaio",
    "Febbraio",
    "Marzo",
    "Aprile",
    "Maggio",
    "Giugno",
    "Luglio",
    "Agosto",
    "Settembre",
    "Ottobre",
    "Novembre",
    "Dicembre"
);

$status = array(0 => "Cliente Completato", 1 => "Completato", 2 => "Non avviato", 3 => "Aperto", 4 => "Sospeso");

$profil = array(
    0 => "Amministratore",
    1 => "Responsabile Progetto",
    2 => "Utente",
    3 => "Cliente Utente",
    4 => "Disabilitato",
    5 => "Amministratore responsabile progetto"
);

$priority = array(0 => "Nessuna", 1 => "Molto bassa", 2 => "Bassa", 3 => "Media", 4 => "Alta", 5 => "Molto alta");

$statusTopic = array(0 => "Chiuso", 1 => "Aperto");
$statusTopicBis = array(0 => "S&#236;", 1 => "No");

$statusPublish = array(0 => "S&#236;", 1 => "No");

$statusFile = array(
    0 => "Approvato",
    1 => "Approvato con cambiamenti",
    2 => "In attesa di approvazione",
    3 => "Approvazione non necessaria",
    4 => "Non approvato"
);

$phaseStatus = array(0 => "Non Partita", 1 => "Aperta", 2 => "Completata", 3 => "Sospesa");

$requestStatus = array(0 => "Nuovo", 1 => "Aperta", 2 => "Completata");

$invoiceStatus = array(0 => "Aperta", 1 => "Spedita", 2 => "Pagata");

$strings["please_login"] = "Log In";
$strings["requirements"] = "Requisiti di sistema";
$strings["no_items"] = "Nessun articolo da visualizzare";
$strings["preferences"] = "Preferenze";
$strings["my_tasks"] = "I miei task";
$strings["edit_task"] = "Modifica task";
$strings["copy_task"] = "Copia task";
$strings["add_task"] = "Aggiungi task";
$strings["delete_tasks"] = "Cancella task";
$strings["assignment_history"] = "Storia dell'assegnazione";
$strings["assigned_on"] = "Assegnato il";
$strings["assigned_by"] = "Assegnato da";
$strings["to"] = "A";
$strings["comment"] = "Commento";
$strings["task_assigned"] = "Task assegnato a ";
$strings["task_unassigned"] = "Task assegnato non assegnato (Non assegnato)";
$strings["edit_multiple_tasks"] = "Modifica task multipli";
$strings["tasks_selected"] = "task selezionati. Scegli i nuovi valori per questi task, o seleziona [ nessun cambiamento ] per mantenere i valori correnti.";
$strings["assignment_comment"] = "Commento di assegnazione";
$strings["no_change"] = "[nessun cambiamento]";
$strings["my_discussions"] = "Le mie discussioni";
$strings["discussions"] = "Discussioni";
$strings["delete_discussions"] = "Cancella le discussioni";
$strings["delete_discussions_note"] = "Nota: Le discussioni non possono essere riaperte una volta che sono state cancellate.";
$strings["topic"] = "Soggetto";
$strings["posts"] = "Messaggi";
$strings["latest_post"] = "Ultimo messaggio";
$strings["my_reports"] = "I miei rapporti";
$strings["reports"] = "Rapporti";
$strings["create_report"] = "Crea il rapporto";
$strings["report_intro"] = "Seleziona i tuoi task riportando i parametri qui, e registra la query nella pagina dei risultati dopo la creazione del tuo rapporto.";
$strings["admin_intro"] = "Definizione e configurazione dell'installazione.";
$strings["copy_of"] = "Copia di ";
$strings["add"] = "Aggiungi";
$strings["delete"] = "Cancella";
$strings["remove"] = "Rimuovi";
$strings["copy"] = "Copia";
$strings["view"] = "Vedi";
$strings["edit"] = "Modifica";
$strings["update"] = "Aggiornamento";
$strings["details"] = "Particolari";
$strings["none"] = "Nessuno";
$strings["close"] = "Chiudi";
$strings["new"] = "Nuovo";
$strings["select_all"] = "Seleziona tutti";
$strings["unassigned"] = "Non assegnato";
$strings["administrator"] = "Amministratore";
$strings["my_projects"] = "I miei progetti";
$strings["project"] = "Progetto";
$strings["active"] = "Attivo";
$strings["inactive"] = "Inattivo";
$strings["project_id"] = "ID Progetto";
$strings["edit_project"] = "Modifica il progetto";
$strings["copy_project"] = "Copia il progetto";
$strings["add_project"] = "Aggiungi il progetto";
$strings["clients"] = "Clienti";
$strings["organization"] = "Organizzazione cliente";
$strings["client_projects"] = "Progetti cliente";
$strings["client_users"] = "Utenti del cliente";
$strings["edit_organization"] = "Modifica l'organizzazione cliente";
$strings["add_organization"] = "Aggiungi l'organizzazione cliente";
$strings["organizations"] = "Organizzazioni clienti";
$strings["status"] = "Condizione";
$strings["owner"] = "Proprietario";
$strings["projects"] = "Progetti";
$strings["files"] = "File";
$strings["search"] = "Cerca";
$strings["admin"] = "Amministratore";
$strings["user"] = "Utente";
$strings["project_manager"] = "Responsabile del progetto";
$strings["due"] = "Scadenza";
$strings["tasks"] = "Task";
$strings["team"] = "Squadra";
$strings["add_team"] = "Aggiungi ai membri della squadra";
$strings["team_members"] = "I membri della squadra";
$strings["full_name"] = "Nome completo";
$strings["title"] = "Titolo";
$strings["user_name"] = "Nome utente";
$strings["work_phone"] = "Telefono di lavoro";
$strings["priority"] = "Priorit&#224;";
$strings["name"] = "Nome";
$strings["id"] = "Id";
$strings["description"] = "Descrizione";
$strings["phone"] = "Telefono";
$strings["address"] = "Indirizzo";
$strings["comments"] = "Commenti";
$strings["created"] = "Creato";
$strings["assigned"] = "Assegnato";
$strings["modified"] = "Modificato";
$strings["assigned_to"] = "Assegnato a";
$strings["due_date"] = "Data scadenza";
$strings["estimated_time"] = "Tempo valutato";
$strings["actual_time"] = "Tempo reale";
$strings["delete_following"] = "Cancellare quanto segue?";
$strings["cancel"] = "Annulla";
$strings["and"] = "e";
$strings["administration"] = "Admin";
$strings["user_management"] = "Gestione utente";
$strings["system_information"] = "Informazioni sistema";
$strings["product_information"] = "Informazioni prodotto";
$strings["system_properties"] = "Propriet&#224; sistema";
$strings["create"] = "Crea";
$strings["report_save"] = "Registra questo rapporto nella tua homepage per poter ricominciare la ricerca.";
$strings["report_name"] = "Nome del rapporto";
$strings["save"] = "Salva";
$strings["matches"] = "Corrispondenze";
$strings["match"] = "Corrispondenza";
$strings["report_results"] = "Risultati rapporto";
$strings["success"] = "Successo";
$strings["addition_succeeded"] = "Aggiunta riuscita";
$strings["deletion_succeeded"] = "Cancellazione riuscita";
$strings["report_created"] = "Rapporto creato";
$strings["deleted_reports"] = "Rapporti cancellati";
$strings["modification_succeeded"] = "Modifica riuscita";
$strings["errors"] = "Errori trovati!";
$strings["blank_user"] = "Utente introvabile.";
$strings["blank_organization"] = "Organizzazione cliente introvabile.";
$strings["blank_project"] = "Progetto introvabile.";
$strings["user_profile"] = "Profilo utente";
$strings["change_password"] = "Cambia password";
$strings["change_password_user"] = "Cambia la password dell'utente.";
$strings["old_password_error"] = "La vecchia password inserita &#232; incorretta. Ridigita la vecchia password.";
$strings["new_password_error"] = "Le due password inserite non corrispondono. Ridigita la nuova password.";
$strings["notifications"] = "Notifiche";
$strings["change_password_intro"] = "Inserisci la vecchia password poi la nuova e confermala.";
$strings["old_password"] = "Vecchia password";
$strings["password"] = "password";
$strings["new_password"] = "Nuova password";
$strings["confirm_password"] = "Conferma password";
$strings["home_phone"] = "Telefono di casa";
$strings["mobile_phone"] = "Cellulare";
$strings["permissions"] = "Permessi";
$strings["administrator_permissions"] = "Permessi amministratore";
$strings["project_manager_permissions"] = "Permessi responsabile progetto";
$strings["user_permissions"] = "Permessi utente";
$strings["account_created"] = "Account creato";
$strings["edit_user"] = "Modifica utente";
$strings["edit_user_details"] = "Modifica i particolari dell'account utente.";
$strings["change_user_password"] = "Cambia la password dell'utente.";
$strings["select_permissions"] = "Seleziona i permessi per questo utente";
$strings["add_user"] = "Aggiungi utente";
$strings["enter_user_details"] = "Inserisci i particolari per l'account utente che stai creando.";
$strings["enter_password"] = "Entra la password dell'utente.";
$strings["success_logout"] = "Sei uscito con successo. Puoi rientrare facendo il log in qui sotto con il tuo username e password.";
$strings["invalid_login"] = "Il nome utente e/o la password che avete inserito non sono validi - Ritenta il login controllando i tuoi dati.";
$strings["profile"] = "Profilo";
$strings["user_details"] = "Particolari account del cliente.";
$strings["edit_user_account"] = "Modifica le informazioni del tuo account.";
$strings["no_permissions"] = "Non hai permessi sufficienti per effettuare quest'azione.";
$strings["discussion"] = "Discussione";
$strings["retired"] = "Chiusa";
$strings["last_post"] = "Ultimo messaggio";
$strings["post_reply"] = "Invia una risposta";
$strings["posted_by"] = "Inviata da";
$strings["when"] = "Quando";
$strings["post_to_discussion"] = "Invia un messaggio";
$strings["message"] = "Messaggio";
$strings["delete_reports"] = "Cancella i rapporti";
$strings["delete_projects"] = "Cancella i progetti";
$strings["delete_organizations"] = "Cancella le organizzazioni clienti";
$strings["delete_organizations_note"] = "Nota: Ci&#242; canceller&#224; tutti gli utenti clienti per quelle organizzazioni cliente, e separer&#224; tutti i progetti in corso da quelle organizzazioni cliente.";
$strings["delete_messages"] = "Cancella messaggi";
$strings["attention"] = "Attenzione";
$strings["delete_teamownermix"] = "Rimozione riuscita, ma il proprietario del progetto non pu&#242; essere rimosso dalla squadra progetto.";


$strings["delete_teamowner"] = "Non puoi rimuovere il proprietario del progetto dalla squadra progetto.";
$strings["enter_keywords"] = "Inserisci le parole chiavi";
$strings["search_options"] = "Opzioni di ricerca e di parole chiave";
$strings["search_note"] = "Devi inserire l'informazione nel campo Cerca.";
$strings["search_results"] = "Risultati della ricerca";
$strings["users"] = "Utenti";
$strings["search_for"] = "Cerca";
$strings["results_for_keywords"] = "Risultati della ricerca per parole chiavi";
$strings["add_discussion"] = "Aggiungi la discussione";
$strings["delete_users"] = "Cancella gli account utenti";
$strings["reassignment_user"] = "Nuova assegnazione di operazione e di progetto";
$strings["there"] = "Ci sono";
$strings["owned_by"] = "posseduto dagli utenti qui sopra.";
$strings["reassign_to"] = "Prima di cancellare gli utenti, riassegnali a";
$strings["no_files"] = "Nessun file collegato";
$strings["published"] = "Pubblicato";
$strings["project_site"] = "Sito del progetto";
$strings["approval_tracking"] = "Percorso di approvazione";
$strings["size"] = "Grandezza";
$strings["add_project_site"] = "Aggiungi al sito del progetto";
$strings["remove_project_site"] = "Rimuovi dal sito del progetto";
$strings["more_search"] = "Altre opzioni di ricerca";
$strings["results_with"] = "Trova i risultati con";
$strings["search_topics"] = "Soggetti della ricerca";
$strings["search_properties"] = "Propriet&#224; della ricerca";
$strings["date_restrictions"] = "Limitazioni delle date";
$strings["case_sensitive"] = "Sensibile al carattere";
$strings["yes"] = "Si";
$strings["sort_by"] = "Ordina per";
$strings["type"] = "Tipo";
$strings["date"] = "Data";
$strings["all_words"] = "tutte le parole";
$strings["any_words"] = "ogni parola";
$strings["exact_match"] = "corrispondenza esatta";
$strings["all_dates"] = "Tutte le date";
$strings["between_dates"] = "Tra le date";
$strings["all_content"] = "Tutti i contenuti";
$strings["all_properties"] = "Tutte le proprieta'";
$strings["no_results_search"] = "La ricerca non ha prodotto risultati.";
$strings["no_results_report"] = "Il rapporto non ha prodotto risultati.";
$strings["schema_date"] = "AAAA/MM/GG";
$strings["hours"] = "ore";
$strings["choice"] = "Scelta";
$strings["missing_file"] = "File mancante !";
$strings["project_site_deleted"] = "Il sito del progetto &egrave; stato cancellato con successo.";
$strings["add_user_project_site"] = "Sono stati garantiti all'utente i permessi per accedere al sito del progetto.";
$strings["remove_user_project_site"] = "Sono stati rimossi i permessi all'utente.";
$strings["add_project_site_success"] = "Aggiunte effettuate al sito del progetto.";
$strings["remove_project_site_success"] = "Rimozione del sito del progetto effettuata.";
$strings["add_file_success"] = "Aggiunto un elemento.";
$strings["delete_file_success"] = "Eliminazione effettuata.";
$strings["update_comment_file"] = "Il file di commento &egrave; stato aggiornato.";
$strings["session_false"] = "Errore nella sessione";
$strings["logs"] = "Log";
$strings["noti_foot1"] = "Questa notifica &egrave; stata generata da PhpCollab.";
$strings["noti_foot2"] = "Per vedere la homepage di PhpCollab Home Page, visita:";
$strings["noti_taskassignment1"] = "Nuovo task:";
$strings["noti_taskassignment2"] = "Un task ti &egrave; stato assegnato:";
$strings["noti_moreinfo"] = "Per maggiori informazioni visita:";
$strings["noti_prioritytaskchange1"] = "Priorita' del task cambiata:";
$strings["noti_prioritytaskchange2"] = "La priorita' del seguente task e' stata cambiata:";
$strings["noti_statustaskchange1"] = "Stato del task cambiato:";
$strings["noti_statustaskchange2"] = "Lo stato del seguente task e' stato cambiato:";
$strings["login_username"] = "Devi inserire uno user name.";
$strings["login_password"] = "Digita la password.";
$strings["login_clientuser"] = "Questo e' un'account cliente. Non e' possibile accedere a PhpCollab tramite un'account cliente.";
$strings["user_already_exists"] = "E' gia' presente un utente con questo nome. Cambia il nome scelto.";
$strings["noti_duedatetaskchange1"] = "Data scadenza task cambiata:";
$strings["noti_duedatetaskchange2"] = "La data di scadenza del seguente task e' stata cambiata:";
$strings["company"] = "Compagnia";
$strings["show_all"] = "Mostra tutti";
$strings["information"] = "Informazioni";
$strings["delete_message"] = "Cancella questo messaggio";
$strings["project_team"] = "Squadra progetto";
$strings["document_list"] = "Lista documenti";
$strings["bulletin_board"] = "Bacheca";
$strings["bulletin_board_topic"] = "Argomento bacheca";
$strings["create_topic"] = "Crea un nuovo argomento";
$strings["topic_form"] = "Form Argomento";
$strings["enter_message"] = "Inserisci il tuo messaggio";
$strings["upload_file"] = "Aggiungi un file";
$strings["upload_form"] = "Form di caricamento file";
$strings["upload"] = "Aggiungi il file";
$strings["document"] = "Documento";
$strings["approval_comments"] = "Commenti di approvazione";
$strings["client_tasks"] = "Task clienti";
$strings["team_tasks"] = "Task squadra";
$strings["team_member_details"] = "Dettagli squadra progetto";
$strings["client_task_details"] = "Dettagli task clienti";
$strings["team_task_details"] = "Dettagli task squadra";
$strings["language"] = "Lingua";
$strings["welcome"] = "Benvenuto";
$strings["your_projectsite"] = "al sito del tuo progetto";
$strings["contact_projectsite"] = "Se hai domande sulla extranet o sulle informazioni trovate qui, contatta il responsabile del progetto";
$strings["company_details"] = "Dettagli organizzazione";
$strings["database"] = "Salva e ripristina il database";
$strings["company_info"] = "Modifica le informazioni della tua organizzazione";
$strings["create_projectsite"] = "Crea il sito del progetto";
$strings["projectsite_url"] = "URL del sito del progetto";
$strings["design_template"] = "Design template";
$strings["preview_design_template"] = "Anteprima design template";
$strings["delete_projectsite"] = "Cancella il sito del progetto";
$strings["add_file"] = "Aggiungi file";
$strings["linked_content"] = "Contenuti correlati";
$strings["edit_file"] = "Modifica i dettagli dei file";
$strings["permitted_client"] = "Utenti del cliente autorizzati";
$strings["grant_client"] = "Permetti di vedere il sito del progetto";
$strings["add_client_user"] = "Aggiungi utente per il cliente";
$strings["edit_client_user"] = "Modifica utente del cliente";
$strings["client_user"] = "Utente del cliente";
$strings["client_change_status"] = "Cambia lo status sotto quando hai completato il task";
$strings["project_status"] = "Stato del progetto";
$strings["view_projectsite"] = "Guarda il sito del progetto";
$strings["enter_login"] = "Inserisci il tuo login per ricevere la password"; //"new password"
$strings["send"] = "Invia";
$strings["no_login"] = "Login non trovata nel database";
$strings["email_pwd"] = "Password inviata";
$strings["no_email"] = "Utente senza email";
$strings["forgot_pwd"] = "Hai dimenticato la tua password ?";
$strings["project_owner"] = "Puoi effettuare cambiamenti solo su un tuo progetto.";
$strings["connected"] = "Connesso";
$strings["session"] = "Sessione";
$strings["last_visit"] = "Ultima visita";
$strings["compteur"] = "Totale";
$strings["task_owner"] = "Non fai parte del team di questo progetto";
$strings["export"] = "Esporta";
$strings["reassignment_clientuser"] = "Reassegnazione dei task";
$strings["organization_already_exists"] = "Questo nome &egrave; gi&agrave; in uso nel sistema. Scegliene un'altro.";
$strings["blank_organization_field"] = "Devi inserire il nome dell'organizzazione cliente.";
$strings["blank_fields"] = "campo obbligatorio";
$strings["projectsite_login_fails"] = "Non possiamo confermare la combinazione di utente e password inserita.";
$strings["start_date"] = "Data d'inizio";
$strings["completion"] = "Completamento";
$strings["update_available"] = "Un aggiornamento &egrave; disponibile!";
$strings["version_current"] = "Stai utilizzando la versione";
$strings["version_latest"] = "L'ultima versione &egrave;";
$strings["sourceforge_link"] = "Guarda la pagina progetto su Sourceforge";
$strings["demo_mode"] = "Modalit&#224; demo. Azione non consentita.";
$strings["setup_erase"] = "Cancella il file setup.php!!";
$strings["no_file"] = "Nessun file selezionato";
$strings["exceed_size"] = "Grandezza file oltre il massimo consentito";
$strings["no_php"] = "File Php non permessi";
$strings["approval_date"] = "Data di approvazione";
$strings["approver"] = "Approvato da";
$strings["error_database"] = "Impossibile connettersi al database";
$strings["error_server"] = "Impossibile connettersi al server";
$strings["version_control"] = "Controllo della versione";
$strings["vc_status"] = "Stato";
$strings["vc_last_in"] = "Data ultima modifica";
$strings["ifa_comments"] = "Commenti approvati";
$strings["ifa_command"] = "Cambia stato ad approvato";
$strings["vc_version"] = "Versione";
$strings["ifc_revisions"] = "Revisioni";
$strings["ifc_revision_of"] = "Versione della revisione";
$strings["ifc_add_revision"] = "Aggiungi una revisione";
$strings["ifc_update_file"] = "Aggiorna file";
$strings["ifc_last_date"] = "Data ultima modifica";
$strings["ifc_version_history"] = "Storico delle versioni";
$strings["ifc_delete_file"] = "Cancella il file e tutte le versioni & revisioni figlie";
$strings["ifc_delete_version"] = "Cancella la versione selezionata";
$strings["ifc_delete_review"] = "Cancella la revisione selezionata";
$strings["ifc_no_revisions"] = "Non sono disponibili revisioni di questo documento";
$strings["unlink_files"] = "Cancella il file";
$strings["remove_team"] = "Rimuovi un membro dal team";
$strings["remove_team_info"] = "Rimuovere l'utente dal team del progetto?";
$strings["remove_team_client"] = "Rimuovi i permessi di vedere il sito del progetto";
$strings["note"] = "Nota";
$strings["notes"] = "Note";
$strings["subject"] = "Oggetto";
$strings["delete_note"] = "Cancella le note inserite";
$strings["add_note"] = "Aggiungi una nota";
$strings["edit_note"] = "Modifica una nota";
$strings["version_increm"] = "Seleziona la versione a cui applicare i cambiamenti:";
$strings["url_dev"] = "Indirizzo del sito di sviluppo";
$strings["url_prod"] = "Indirizzo del sito finale";
$strings["note_owner"] = "Puoi fare cambiamenti solo sulle tue note.";
$strings["alpha_only"] = "Caratteri alfa-numerici solo nel login";
$strings["edit_notifications"] = "Configura la notifica via e-mail";
$strings["edit_notifications_info"] = "Seleziona gli eventi per i quali vuoi ricevere una notifica via e-mail.";
$strings["select_deselect"] = "Seleziona/deseleziona tutto";
$strings["noti_addprojectteam1"] = "Aggiunto al team del progetto :";
$strings["noti_addprojectteam2"] = "Sei stato agggiunto al team del progetto per :";
$strings["noti_removeprojectteam1"] = "Rimosso dal team del progetto :";
$strings["noti_removeprojectteam2"] = "Sei stato rimosso dal team del progetto per :";
$strings["noti_newpost1"] = "Nuovo post :";
$strings["noti_newpost2"] = "Un post è stato aggiunto alla seguente discussione :";
$strings["edit_noti_taskassignment"] = "Sono stato assegnato a un nuovo task.";
$strings["edit_noti_statustaskchange"] = "Lo stato di uno dei miei task è cambiato.";
$strings["edit_noti_prioritytaskchange"] = "La priorit&#224; di uno dei miei task è cambiata.";
$strings["edit_noti_duedatetaskchange"] = "La data di scadenza di uno dei miei task è cambiata.";
$strings["edit_noti_addprojectteam"] = "Sono stato aggiunto al team di un progetto.";
$strings["edit_noti_removeprojectteam"] = "Sono stato rimosso dal team di un progetto.";
$strings["edit_noti_newpost"] = "Un nuovo messaggio è stato aggiunto nella discussione.";
$strings["add_optional"] = "Aggiungi un modulo";
$strings["assignment_comment_info"] = "Aggiungi commenti a proposito delle assegnazioni per questo task";
$strings["my_notes"] = "I miei appunti";
$strings["edit_settings"] = "Modifica settaggi";
$strings["max_upload"] = "Grandezza massima dei file";
$strings["project_folder_size"] = "Grandezza cartella del progetto";
$strings["calendar"] = "Calendario";
$strings["date_start"] = "Data iniziale";
$strings["date_end"] = "Data finale";
$strings["time_start"] = "Orario iniziale";
$strings["time_end"] = "Orario finale";
$strings["calendar_reminder"] = "Promemoria";
$strings["shortname"] = "Abbreviazione";
$strings["calendar_recurring"] = "L'evento ricorre ogni settimana questo giorno";
$strings["edit_database"] = "Modifica database";
$strings["noti_newtopic1"] = "Nuova discussione :";
$strings["noti_newtopic2"] = "Una nuova discussione è stata aggiunta al seguente progetto :";
$strings["edit_noti_newtopic"] = "Un nuovo argomento di discussione è stato creato.";
$strings["today"] = "Oggi";
$strings["previous"] = "Precedente";
$strings["next"] = "Successivo";
$strings["help"] = "Aiuto";
$strings["complete_date"] = "Data completata";
$strings["scope_creep"] = "Slittamento scopo"; //cambiamento obiettivo
$strings["days"] = "Giorni";
$strings["remember_password"] = "Ricorda password";
$strings["client_add_task_note"] = "Nota: Il task inserito è stato registrato nel data base, apparir&#224; qui solamente se assegnato ad un membro del team!";
$strings["noti_clientaddtask1"] = "Task aggiunto dal cliente :";
$strings["noti_clientaddtask2"] = "Un nuovo task è stato aggiunto dal cliente dal project site al seguente progetto :";
$strings["phase"] = "Fase";
$strings["phases"] = "Fasi";
$strings["phase_id"] = "ID Fase";
$strings["current_phase"] = "Fasi attive";
$strings["total_tasks"] = "Tasks totali";
$strings["uncomplete_tasks"] = "Tasks incompleti";
$strings["no_current_phase"] = "Nessuna fase è attualmente attiva";
$strings["true"] = "Vero";
$strings["false"] = "Falso";
$strings["enable_phases"] = "Abilita fasi";
$strings["phase_enabled"] = "Fasi abilitate";
$strings["order"] = "Ordina";
$strings["options"] = "Opzioni";

$strings["support"] = "Supporto";
$strings["support_request"] = "Richiesta di supporto";
$strings["support_requests"] = "Richieste di supporto";
$strings["support_id"] = "ID Richiesta";
$strings["my_support_request"] = "Le mie richieste di supporto";
$strings["introduction"] = "Introduzione";
$strings["submit"] = "Invia";
$strings["support_management"] = "Gestione supporto";
$strings["date_open"] = "Data Aperta";
$strings["date_close"] = "Data Bloccata";
$strings["add_support_request"] = "Aggiungi richiesta di supporto";
$strings["add_support_response"] = "Aggiungi risposta di supporto";
$strings["respond"] = "Rispondi";
$strings["delete_support_request"] = "Richiesta di supporto cancellata";
$strings["delete_request"] = "Cancella richiesta di supporto";
$strings["delete_support_post"] = "Cancella risposte di supporto";
$strings["new_requests"] = "Richieste nuove";
$strings["open_requests"] = "Richieste aperte";
$strings["closed_requests"] = "Richieste complete";
$strings["manage_new_requests"] = "Gestisci nuove richieste";
$strings["manage_open_requests"] = "Gestisci richieste aperte";
$strings["manage_closed_requests"] = "Gestisci richieste completate";
$strings["responses"] = "Risposte";
$strings["edit_status"] = "Modifica status";
$strings["noti_support_request_new2"] = "Hai inviato una richiesta di supporto riguardante: ";
$strings["noti_support_post2"] = "Una nuova risposta è stata aggiunta alla tua richiesta di supporto. Per favore ricontrolla i dettagli.";
$strings["noti_support_status2"] = "La tua richiesta di supporto è stata aggiornata. Per favore ricontrolla i dettagli.";
$strings["noti_support_team_new2"] = "Una nuova richiesta di supporto è stata aggiunta al progetto: ";
//2.0
$strings["delete_subtasks"] = "Cancella sotto-task";
$strings["add_subtask"] = "Aggiungi sotto-task";
$strings["edit_subtask"] = "Modifica sotto-task";
$strings["subtask"] = "Sotto-Task";
$strings["subtasks"] = "Sotto-Task";
$strings["show_details"] = "Mostra dettagli";
$strings["updates_task"] = "Storico degli aggiornamenti ai task";
$strings["updates_subtask"] = "Storico degli aggiornamenti ai sotto-task";
//2.1
$strings["go_projects_site"] = "Vai al sito dei progetti";
$strings["bookmark"] = "Preferiti";
$strings["bookmarks"] = "Preferiti";
$strings["bookmark_category"] = "Categoria";
$strings["bookmark_category_new"] = "Nuova categoria";
$strings["bookmarks_all"] = "Tutti";
$strings["bookmarks_my"] = "I miei preferiti";
$strings["my"] = "Miei";
$strings["bookmarks_private"] = "Privati";
$strings["shared"] = "Condivisi";
$strings["private"] = "Privato";
$strings["add_bookmark"] = "Aggiungi ai preferiti";
$strings["edit_bookmark"] = "Modifica indirizzo";
$strings["delete_bookmarks"] = "Cancella indirizzo";
$strings["team_subtask_details"] = "Dettagli team del sotto-task";
$strings["client_subtask_details"] = "Dettagli cliente del sotto-task";
$strings["client_change_status_subtask"] = "Modifica il tuo status sotto quando hai completato questo sotto-task";
$strings["disabled_permissions"] = "Disabilita utente";
//2.2
$strings["project_manager_administrator_permissions"] = "Amministratore responsabile progetto";
$strings["bug"] = "Gestione Bug";
//2.3
$strings["report"] = "Rapporto";
$strings["license"] = "Licenza";
//2.4
$strings["settings_notwritable"] = "Il file <b>settings.php</b> non è modificabile (controlla i permessi)";
//2.5
$strings["invoicing"] = "Fatturazione";
$strings["invoice"] = "Fattura";
$strings["invoices"] = "Fatture";
$strings["date_invoice"] = "Date fatturazione";
$strings["header_note"] = "Intestazione";
$strings["footer_note"] = "Piè di pagina";
$strings["total_ex_tax"] = "Totale tasse escluse";
$strings["total_inc_tax"] = "Totale tasse incluse";
$strings["tax_rate"] = "Tariffa tasse";
$strings["tax_amount"] = "Importo Tasse";
$strings["invoice_items"] = "Voci fattura";
$strings["amount_ex_tax"] = "Importo escluse tasse";
$strings["completed"] = "Completato";
$strings["service"] = "Servizio";
$strings["name_print"] = "Nome stampato";
$strings["edit_invoice"] = "Modifica fattura";
$strings["edit_invoiceitem"] = "Modifica voci fattura";
$strings["calculation"] = "Calcolo";
$strings["items"] = "Voci";
$strings["position"] = "Posizione";
$strings["service_management"] = "Servizio amministrativo"; //insicure on this (?) :?:
$strings["hourly_rate"] = "Tariffa oraria";
$strings["add_service"] = "Aggiungi servizio";
$strings["edit_service"] = "Modifica servizio";
$strings["delete_services"] = "Cancella servizi";
$strings["worked_hours"] = "Ore di lavoro";
$strings["rate_type"] = "Tipo di tariffa";
$strings["rate_value"] = "Valore della tariffa";
$strings["note_invoice_items_notcompleted"] = "Non tutte le voci sono state completate";

$rateType = array(
    0 => "Tariffa personalizzata",
    1 => "Tariffa per progetto",
    2 => "Tariffa per organizzazione",
    3 => "Tariffa per servizio"
);
//HACKS

$strings["newsdesk"] = "Articoli";
$strings["newsdesk_list"] = "Lista degli articoli";
$strings["article_newsdesk"] = "Testo dell\'articolo";
$strings["update_newsdesk"] = "Aggiorna le voci";
$strings["my_newsdesk"] = "I miei articoli";
$strings["edit_newsdesk"] = "Modifica l\'articolo";
$strings["copy_newsdesk"] = "Copia l\'articolo";
$strings["add_newsdesk"] = "Aggiungi un articolo";
$strings["del_newsdesk"] = "Cancella un articolo";
$strings["delete_news_note"] = "Attenzione: Questo cancellerà oltre l\'articolo anche tutti i commenti allegati";
$strings["author"] = "Autore";
$strings["blank_newsdesk_title"] = "Attenzione il titolo è vuoto";
$strings["blank_newsdesk"] = "L'articolo non può essere trovato";
$strings["blank_newsdesk_comment"] = "Attenzione il commento deve essere compilato";
$strings["remove_newsdesk"] = "L'articolo è stato cancellato con tutti i commenti allegati";
$strings["add_newsdesk_comment"] = "Aggiungi un commento all\'articolo";
$strings["edit_newsdesk_comment"] = "Modifica il commento dell\'articolo";
$strings["del_newsdesk_comment"] = "Cancella il commento dell\'articolo";
$strings["remove_newsdesk_comment"] = "Il commento è stato cancellato con successo";
$strings["errorpermission_newsdesk_comment"] = "Non hai abbastanza permessi per modificare o cancellare questo commento";
$strings["errorpermission_newsdesk"] = "Non hai abbastanza permessi per modificare o cancellare questa notizia";
$strings["newsdesk_related"] = "Progetto Correlato";
$strings["newsdesk_related_generic"] = "Articolo generico (non correlato a progetti)";
$strings["newsdesk_rss"] = "Abilita l' RSS per questo articolo";
$strings["newsdesk_rss_enabled"] = "RSS abilitato per l'articolo";
$strings["newsdesk_related_links"] = "Links correlati all'articolo";

$strings["noti_memberactivation1"] = "Account attivato";
$strings["noti_memberactivation5"] = "Dopo aver compilato le informazioni sovrastanti ed aver premuto \"invio\" ti sarà permesso accedere al tuo account. \n\nInsieme a questa email, riceverai un messaggio riguardante la creazione e la modifica di nuovi task e per gli altri eventi che riguardano il tuo account. Queste email verranno mandate per tenerti informato sui progressi del tuo progetto.";

//BEGIN email project users mod
$strings["email_users"] = "Email Utenti";
$strings["email_sent"] = "La tua email è stata inviata con successo";
//END email project users mod

$strings["clients_connected"] = "(Clienti connessi nel project site)";

//2.5b4
$strings["Total_Hours_Worked"] = "Ore totali di lavoro";


$strings["noti_filepost1"] = "Un nuovo file è stato caricato nel progetto";
$strings["noti_filepost2"] = "Un nuovo file è stato caricato per il progetto :";
$strings["noti_newfile1"] = "Un nuovo file è stato caricato per il progetto";
$strings["noti_newfile2"] = "Un nuovo file è stato caricato per il progetto :";

//2.5rc1
$strings["location"] = "Luogo";

//2.5rc2
$strings["edit_noti_clientaddtask"] = "Un nuovo task è stato aggiunto dal cliente.";
$strings["edit_noti_uploadfile"] = "Un nuovo allegato è stato aggiunto.";
