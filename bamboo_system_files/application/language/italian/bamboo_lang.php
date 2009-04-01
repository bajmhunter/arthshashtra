<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

$lang['accounts_admin_account_create_success'] = 'Admin account successfully created'; // TO BE TRANSLATED
$lang['accounts_admin_account_create_fail'] = 'Problem creating Admin account'; // TO BE TRANSLATED
$lang['accounts_admin_account_delete_success'] = 'Admin account successfully deleted'; // TO BE TRANSLATED
$lang['accounts_admin_account_delete_fail'] = 'Problem deleting Admin account'; // TO BE TRANSLATED

$lang['actions_cancel'] = 'Cancella';
$lang['actions_change'] = 'Modifica';
$lang['actions_create_invoice'] = 'Nuova Fattura';
$lang['actions_delete'] = 'Cancella';
$lang['actions_edit'] = 'Modifica';
$lang['actions_required_fields'] = 'Campo Richiesto';
$lang['actions_select_below'] = 'seleziona';

$lang['bambooinvoice_logo'] = '<span class=\'bamboo_invoice_bam\'>Bamboo</span><span class=\'bamboo_invoice_inv\'>Invoice</span>';
$lang['bambooinvoice_version'] = 'Versione';

$lang['clients_add_contact'] = 'Nuovo Contatto';
$lang['clients_address1'] = 'Indirizzo 1';
$lang['clients_address2'] = 'Indirizzo 2';
$lang['clients_assigned_to_them'] = 'le fatture assegnategli. Stai per <strong class="error">cancellare definitivamente</strong> questo cliente, e <strong class="error">ogni fattura associata al nominativo</strong>. Sei sicuro?';
$lang['clients_cancel_add_contact'] = 'Cancella nuovo Contatto';
$lang['clients_city'] = 'Citt&agrave;';
$lang['clients_client_has'] = 'Questo cliente ha ';
$lang['clients_clients_registered'] = 'clienti registrati';
$lang['clients_contact_add'] = 'Impossibile aggiungere questo contatto. Attenzione sono necessari Nome, Cognome e un email valida.';
$lang['clients_contact_delete_fail'] = 'Impossibile cancellare questo contatto.';
$lang['clients_contacts'] = 'Contatti';
$lang['clients_country'] = 'Nazione';
$lang['clients_create_new_client'] = 'Crea nuovo Cliente';
$lang['clients_created'] = 'Nuovo Cliente aggiunto';
$lang['clients_delete_all_invoices'] = 'Cancella Cliente e tutte le sue fatture';
$lang['clients_delete_client'] = 'Cancella Cliente';
$lang['clients_delete_contact'] = 'Cancella Contatto';
$lang['clients_deleted'] = 'Cliente cancellato';
$lang['clients_deleted_error'] = 'Impossibile cancellare il Cliente'; 
$lang['clients_edit_client'] = 'Modifica Cliente';
$lang['clients_edit_contact'] = 'Modifica Contatto';
$lang['clients_edited'] = 'Cliente modificato';
$lang['clients_edited_contact_info'] = 'Informazioni del Contatto aggiornate';
$lang['clients_email'] = 'Email';
$lang['clients_first_name'] = 'Nome';
$lang['clients_id'] = 'Id Cliente';
$lang['clients_last_name'] = 'Cognome';
$lang['clients_name'] = 'Nome Cliente';
$lang['clients_no_invoice_listed'] = 'Non esistono contatti per';
$lang['clients_new_contact_fail'] = 'Impossibile aggiungere questo contatto. Attenzione sono necessari Nome, Cognome e un email valida.';
$lang['clients_notes'] = 'Note';
$lang['clients_phone'] = 'Telefono';
$lang['clients_postal'] = 'C.A.P.';
$lang['clients_province'] = 'Provincia';
$lang['clients_save_client'] = 'Salva Cliente';
$lang['clients_title'] = 'Title'; // NEEDS TRANSLATION
$lang['clients_to'] = 'a';
$lang['clients_update_client'] = 'Aggiorna Cliente';
$lang['clients_website'] = 'Sito Web';
$lang['clients_you_have'] = 'Hai ';

$lang['error_date_fill'] = 'Si sono verificati degli errori. La data deve essere nel formato YYYY-MM-DD, e la quanti&agrave; deve essere un numero. Torna indietro e riprova.';
$lang['error_date_format'] = 'La data deve essere nel formato YYYY-MM-DD';
$lang['error_email_recipients'] = 'Please select at least 1 recipient for this invoice';
$lang['error_field_required'] = 'Questo campo &egrave; richiesto';
$lang['error_login_password'] = 'Inserire la password';
$lang['error_login_username'] = 'Inserire nome utente';
$lang['error_problem_editing'] = 'Si &egrave; verificato un erroredurante la modifica della fattura. Segnalare l\'errore error invoice_controller_edit';
$lang['error_problem_inserting'] = 'Problema durante l\'inserimento';
$lang['error_problem_saving'] = 'Si &egrave; verificato un errore nel salvataggio della fattura.';
$lang['error_selection'] = 'La selezione fatta non contiene fatture.';

$lang['install_explain'] = 'La tua email &egrave; usata sia come &quot;nome utente&quot; per accedere, sia per le funzioni relative alle email, come l\'invio di fatture, la modifica di password, ecc.  Il nome del Contatto Principale &egrave; usato come &quot;mittente&quot; per l\'invio delle fatture tramite email.';
$lang['install_install'] = 'Installa';
$lang['install_welcome'] = 'Benvenuto in BambooInvoice.  Per poter eseguire l\'installazione ho bisogno i alcuni tuoi dati.';

$lang['invoice_add_note'] = 'Aggiungi Nota';
$lang['invoice_all_clients'] = 'Tutti i Clienti';
$lang['invoice_all_invoices'] = 'Tutte le Fatture';
$lang['invoice_amount'] = 'Importo;';
$lang['invoice_amount_item'] = 'Importo;';
$lang['invoice_amount_error'] = 'Inserire un importo';
$lang['invoice_amount_numbers_only'] = 'Solo numeri';
$lang['invoice_amount_paid'] = 'Amount Paid'; // NEEDS TRANSLATION
$lang['invoice_amount_outstanding'] = 'Amount Outstanding'; // NEEDS TRANSLATION
$lang['invoice_bill_to'] = 'Pagamanto al';
$lang['invoice_client'] = 'Cliente';
$lang['invoice_client_id'] = 'Id Cliente';
$lang['invoice_closed'] = 'Chiuso';
$lang['invoice_comment'] = 'Nota';
$lang['invoice_comment_success'] = 'Nota aggiunta, puoi vederla qu&igrave; sotto.';
$lang['invoice_contact_add'] = 'Non ci sono contatti disponibili per spedire questa fattura. Per aggiungerne, usa il';
$lang['invoice_date_issued'] = 'Data Emissione';
$lang['invoice_date_issued_full'] = 'Data Emissione (nel formato YYYY-MM-DD)';
$lang['invoice_date_paid_full'] = 'Data Scadenza (nel formato YYYY-MM-DD)';
$lang['invoice_email_demo'] = 'Attenzione per evitare abusi della demo, l\'email <em>non</em> viene spedita. Per vedere una copia del PDF allegato, seleziona &ldquo;crea fattura&rdquo; dal menu.';
$lang['invoice_email_invoice_to'] = 'Invia Fattura a';
$lang['invoice_email_message'] = 'Messaggio email';
$lang['invoice_email_no_recipient'] = 'Attenzione torna indietro, e seleziono a chi inviare questa fattura.';
$lang['invoice_email_success'] = 'Fattura inviata correttamente. Puoi vedere lo storico della fattura qu&igrave; sotto.';
$lang['invoice_export_to'] = 'Esporta i dati della fattura in';
$lang['invoice_generated_by'] = 'Fattura creata con';
$lang['invoice_history_comments'] = 'Storico fattura &amp; Note';
$lang['invoice_invoice'] = 'Fattura';
$lang['invoice_invoice_delete_success'] = 'Fattura eliminata';
$lang['invoice_invoice_edit_success'] = 'Fattura modificata';
$lang['invoice_is_tax_exempt'] = '&egrave un esempio di tassa';
$lang['invoice_last_used'] = 'ultimo numero utilizzato ';
$lang['invoice_new_invoice'] = 'Nuova Fattura';
$lang['invoice_new_invoice_error'] = 'Errore Nuova Fattura';
$lang['invoice_new_invoice_to'] = 'Nuova Fattura a';
$lang['invoice_new_item'] = 'Nuovo Articolo';
$lang['invoice_no_payments_entered'] = 'Non &egrave; stato aggiunto nessun pagamento a questa fattura. Per inserire una scadenza, usa l\'opzione &quot;Inserisci Scadenza&quot; nel menu.';
$lang['invoice_not_sent'] = 'Fattura non inviata al cliente. Per inviare questa fattura, usa l\'opzione &quot;Invia Fattura&quot; nel menu.';
$lang['invoice_not_taxable'] = 'Esente tassa';
$lang['invoice_not_unique'] = 'Numero fattura gi&agrave; presente';
$lang['invoice_note'] = 'Nota della Fattura';
$lang['invoice_note_max_chars'] = '(max 255 caratteri)';
$lang['invoice_no_invoice_match'] = 'Non ci sono fatture che soddisfino i criteri';
$lang['invoice_number'] = 'Numero Fattura';
$lang['invoice_open'] = 'Apri';
$lang['invoice_or'] = 'o';
$lang['invoice_or_new_client'] = 'o inserisci un nuovo cliente';
$lang['invoice_overdue'] = 'Scadute';
$lang['invoice_overdue_invoices'] = 'fatture scadute';
$lang['invoice_payment_enter'] = 'Inserisci scadenza per';
$lang['invoice_payment_history'] = 'Storico scadenze';
$lang['invoice_payment_success'] = 'Scadenza fattura inserita.';
$lang['invoice_payment_term'] = 'Termini di pagamento';
$lang['invoice_premenently_delete'] = 'Stai per <strong class="error">cancellare definitivamente</strong> la fattura';
$lang['invoice_problem_creating'] = 'Si sono verificati problemi nella creazione della fattura.';
$lang['invoice_quantity'] = 'Quantit&agrave;';
$lang['invoice_return_invoice_view'] = 'ritorna alla visualizzazione della fattura';
$lang['invoice_save_edited_invoice'] = 'Salva le modifiche alla fattura';
$lang['invoice_select_client'] = 'Seleziona un cliente';
$lang['invoice_send_to'] = 'Invia questa fattura a';
$lang['invoice_sent_to'] = 'Fattura inviata a';
$lang['invoice_status'] = 'Stato';
$lang['invoice_summary'] = 'Elenco';
$lang['invoice_sure_delete'] = 'Sei sicuro di volerlo fare? ';
$lang['invoice_tax1_description'] = 'Nome della tassa applicata';
$lang['invoice_tax1_rate'] = 'Percentuale';
$lang['invoice_tax2_description'] = 'Nome della seconda tassa';
$lang['invoice_tax2_rate'] = 'Percentuale';
$lang['invoice_tax_exempt'] = 'Nota: Questo cliente &egrave esente da tassazione';
$lang['invoice_tax_status'] = 'Stato tasse';
$lang['invoice_taxable'] = 'Tassabile';
$lang['invoice_there_are_currently'] = 'Attualmente ci sono';
$lang['invoice_total'] = 'Totale';
$lang['invoice_work_description'] = 'Descrizione Lavoro';
$lang['invoice_you_may_now'] = 'Ora puoi';
$lang['invoice_you'] = 'Tu';

$lang['login_allow_login'] = 'Grant login privileges to these users'; // to be translated
$lang['login_caps_lock'] = 'Assicurati che il tasto <em>Bloc Maiusc</em> non sia premuto';
$lang['login_forgot_password'] = 'Password dimenticata';
$lang['login_login'] = 'Accesso';
$lang['login_logout'] = 'Uscita';
$lang['login_logout_confirm'] = 'Stai per uscire. Sei sicuro di volerlo fare?';
$lang['login_logout_success1'] = "Sei uscito. Se lo desideri puoi";
$lang['login_logout_success2'] = 'riaccedere';
$lang['login_password'] = 'Password';
$lang['login_password_email'] = "posso spedire via email la password all\'indirizzo con cui ti sei registrato. Se l\'hai dimenticato e vuoi ripristinare la password compila il form qu&igrave sotto.";
$lang['login_password_email1'] = 'La tua password &egrave; stata cambiata. La tua nuova password &egrave;';
$lang['login_password_email2'] = 'e pu&ograve; essere utilizzata subito per';
$lang['login_password_fail'] = "Si &egrave; verificato qualche errore. So che non &egrave un messaggio molto utile, servir&agrave un po\' di debug";
$lang['login_password_reset_demo'] = 'Per la demo, questo &egrave disabilitato, ma dovresti aver ricevuto un email con le informazioni del ripristino.';
$lang['login_password_reset_disabled'] = 'Per la versione demo, il ripristino delle password &egrave; disabilitato.';
$lang['login_password_reset_email1'] = 'Qualcuno (probabilmente tu), ha richiesto il ripristino delle password del tuo account per BambooInvoice.';
$lang['login_password_reset_email2'] = 'Per ripristinarla ora, segui il link al nostro sito:';
$lang['login_password_reset_email3'] = "Se non sei tu ad aver eseguito questa richiesta, ignora questa email, siamo spiacenti.";
$lang['login_password_reset_title'] = 'Ripristino Password BambooInvoice';
$lang['login_password_reset_unable'] = 'Impossibile ripristinare la tua password. Riprova.';
$lang['login_password_sent'] = 'La conferma della modifica della tua password &egrave; stata inviata a';
$lang['login_password_submit'] = 'Password inviata';
$lang['login_password_success'] = 'La tua password &egrave; stata modificata, e inviata per email.';
$lang['login_remember_me'] = 'Ricordami';
$lang['login_username'] = 'Email';
$lang['login_wrong_password'] = 'Spiacente, il nome utente e/o la password non sono stati trovati o sono sbagliati. Riprova.';

$lang['menu_accounts'] = 'Accounts'; // to be translated
$lang['menu_bugs'] = 'Errori';
$lang['menu_catchphrase'] = 'Semplice,<br />Bella,<br />Open Source,<br />Fatturazione Online';
$lang['menu_catchphrase_nobreak'] = 'Semplice, Bella, Open Source, Fatturazione Online';
$lang['menu_changelog'] = 'Cambia Log';
$lang['menu_clients'] = 'Clienti';
$lang['menu_credits'] = 'Crediti';
$lang['menu_delete_invoice'] = 'Cancella Fattura';
$lang['menu_duplicate_invoice'] = 'Duplicate Invoice'; // TO BE TRANSLATED
$lang['menu_did_you_know'] = 'Sapevi che?';
$lang['menu_edit_invoice'] = 'Modifica Fattura';
$lang['menu_email_invoice'] = 'Invia Fattura';
$lang['menu_enter_payment'] = 'Inserisci Scadenza';
$lang['menu_faq'] = 'Domande frequenti';
$lang['menu_generate_pdf'] = 'Crea PDF';
$lang['menu_help'] = 'Aiuto';
$lang['menu_invoice_summary'] = 'Elenco Fattura';
$lang['menu_invoice_note'] = 'Note Fattura';
$lang['menu_invoices'] = 'Fatture';
$lang['menu_logout'] = 'Uscita';
$lang['menu_new_invoice'] = 'Nuova Fattura';
$lang['menu_print_invoice'] = 'Stampa Fattura';
$lang['menu_private_note'] = 'Private Note';
$lang['menu_reports'] = 'Grafici';
$lang['menu_roadmap'] = 'Roadmap';
$lang['menu_root_system'] = 'Menu principale';
$lang['menu_see_also'] = 'Vedi anche';
$lang['menu_settings'] = 'Configura';
$lang['menu_utilties'] = 'Utilit&agrave;';

$lang['notice_english_only'] = '';
$lang['notice_generated_by'] = 'Creata con';

$lang['reports_back_to_reports'] = 'ritorna ai reports';
$lang['reports_collected'] = 'collected';
$lang['reports_end_date'] = 'Alla Data (yyyy-mm-dd)';
$lang['reports_first_quarter'] = 'primo trimestre';
$lang['reports_fourth_quarter'] = 'quarto trimestre';
$lang['reports_generate_report'] = 'Crea grafico';
$lang['reports_invoices_issued_year'] = 'fatture emesse quet\'anno';
$lang['reports_legend'] = 'Legenda';
$lang['reports_second_quarter'] = 'secondo trimestre';
$lang['reports_start_date'] = 'Dalla Data (yyyy-mm-dd)';
$lang['reports_third_quarter'] = 'terzo trimestre';
$lang['reports_year_to_date'] = 'Year to Date';
$lang['reports_yearly_income'] = 'Fatturato annuo';

$lang['settings_company_name'] = 'Nome Azienda';
$lang['settings_currency_symbol'] = 'Simbolo Monetario';
$lang['settings_currency_type'] = 'Tipo Divisa';
$lang['settings_days_payment_due'] = 'Giorni alla scadenza della fattura';
$lang['settings_default_note'] = 'Nota standard della Fattura';
$lang['settings_display_branding'] = 'Mostra marchio BambooInvoice';
$lang['settings_logo'] = 'Logo';
$lang['settings_modifys_fail'] = 'Si &egrave; verificato un problema durante la modifica delle configurazioni';
$lang['settings_modifys_success'] = 'Configurazioni modificate';
$lang['settings_note_max_chars'] = '(max 255 caratteri)';
$lang['settings_primary_contact'] = 'Contatto Principale';
$lang['settings_primary_email'] = 'Email Contatto Principale';
$lang['settings_save_settings'] = 'Salva Configurazioni';
$lang['settings_save_invoices'] = 'Salva Fatture';
$lang['settings_save_invoices_warning'] = '<strong>Attenzione:</strong> Disabilitando "Salva Fatture" verranno rimosse tutte le fatture salvate.';
$lang['settings_settings_default'] = 'Queste configurazioni sono lo standard';
$lang['settings_short_language'] = 'it';
$lang['settings_tax_code'] = 'Partita I.V.A.';
$lang['settings_will_use'] = 'verr&agrave; usato per generare le fatture ai clienti.';

$lang['utilities_download_backup'] = 'Download backup';
$lang['utilities_automatic_version_check'] = 'Automatically check for new versions'; // to be translated
$lang['utilities_phpinfo'] = 'PHP info'; // to be translated
$lang['utilities_phpinfo_not_available'] = 'Questa funzione non &egrave disponibile nella demo.';
$lang['utilities_new_version_available'] = "A new version of BambooInvoice version is now available. "; // space after period
$lang['utilities_up_to_date'] = "You are using the most recent version of BambooInvoice."; // to be translated
$lang['utilities_connection_failed'] = "A connection to http://bambooinvoice.org could not be established."; // to be translated
$lang['utilities_version_check'] = "New version check"; // to be translated
$lang['utilities_version_undetermined'] = "Version status could not be determined."; // to be translated

$lang['menu_did_you_know_quotes'] = array(
					"BambooINVOICE ha il forum di aiuto su forums.bambooinvoice.org, per richiedere funzionalit&agrave;, e consigli.",
					"BambooINVOICE &egrave rilasciato sotto licenza GPL.",
					"Le tue configurazioni possono essere modificate in qualsiasi momento tramite il menu &ldquo;configura&rdquo;.",
					"Il file di aiuto viene modificato quotidianamente.  Visita BambooINVOICE.org per scaricare l'ultima versione!",
					"Puoi creare un nuovo cliente tramite il menu &ldquo;clienti&rdquo;, o durante l'emissione della fattura!",
					"Una singola canna di bambo impiega solo un anno a raggiungere la massima altezza!",
					"La lunga vita della pianta del bamboo l\'ha resa in Cina il simbolo di lunga vita, e in India di amicizia."
					);

?>