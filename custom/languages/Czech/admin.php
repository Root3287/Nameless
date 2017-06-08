<?php 
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-dev
 *
 *  License: MIT
 *
 *  EnglishUS Language - Admin
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Prosím ověřte přihlášení',
	
	// Sidebar
	'admin_cp' => 'AdminCP',
	'administration' => 'Administrace',
	'overview' => 'Přehled',
	'core' => 'Nastavení',
	'minecraft' => 'Minecraft',
	'modules' => 'Doplňky',
	'security' => 'Zabezpečení',
	'styles' => 'Stily',
	'users_and_groups' => 'Uživtelé a skupiny',
	
	// Overview
	'running_nameless_version' => 'NamelessMC běží na verzi <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'PHP verze <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Statistiky',
	
	// Core
	'settings' => 'Nastavení',
	'general_settings' => 'Obecné nastavení',
	'sitename' => 'Název stránky',
	'default_language' => 'Hlavní jazyk',
	'default_language_help' => 'Uživatelé si budou moci vybrat z libovolných nainstalovaných jazyků.',
	'installed_languages' => 'Všechny nové jazyky byly úspěšně nainstalovány.',
	'default_timezone' => 'Základní časové pásmo',
	'registration' => 'Registrace',
	'enable_registration' => 'Povolit registraci?',
	'verify_with_mcassoc' => 'Povolit ověřování pomocí MCAssoc?',
	'email_verification' => 'Povolit ověřování pomocí Emailu?',
	'homepage_type' => 'Typ hlavní stránky',
	'post_formatting_type' => 'Typ formátování',
	'portal' => 'Portál',
	'missing_sitename' => 'Vložte název webu o délce 2 až 64 znaků.',
	'use_friendly_urls' => 'Přátelské URL adresy?',
	'use_friendly_urls_help' => 'IMPORTANT: Váš server musí být nakonfigurován tak, aby umožnil použití souborů mod_rewrite a .htaccess.',
	'config_not_writable' => 'Váš <strong>core/config.php</strong> není přepisovatelný. Zkontrolujte oprávnění pro tento soubour.',
	'social_media' => 'Sociální média',
	'youtube_url' => 'Youtube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Použít pro Twitter tmavý vzhled??',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'successfully_updated' => 'Úspěšně aktualizováno',
    'debugging_and_maintenance' => 'Debugging and Maintenance',
    'enable_debug_mode' => 'Enable debug mode?',
    'force_https' => 'Force https?',
    'force_https_help' => 'If enabled, all requests to your website will be redirected to https. You must have a valid SSL certificate active for this to work correctly.',
	
	// Reactions
	'icon' => 'Ikonka',
	'type' => 'Typ',
	'positive' => 'Pozitivní',
	'neutral' => 'Neutrální',
	'negative' => 'Negativní',
	'editing_reaction' => 'Upravit reakce',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Nová reakce',
	'creating_reaction' => 'Vytvořit reakci',
	
	// Custom profile fields
	'custom_fields' => 'Custom Profile Fields',
	'new_field' => '<i class="fa fa-plus-circle"></i> nové pole',
	'required' => 'Povinný',
	'public' => 'Veřejný',
	'text' => 'Text',
	'textarea' => 'Oblast textu',
	'date' => 'Date',
	'creating_profile_field' => 'Creating Profile Field',
	'editing_profile_field' => 'Editing Profile Field',
	'field_name' => 'Název pole',
	'profile_field_required_help' => 'Required fields must be filled out by the user, and they will appear during registration.',
	'profile_field_public_help' => 'Public fields will be displayed to all users, if this is disabled only moderators can view the values.',
	'profile_field_error' => 'Please input a field name between 2 and 16 characters long.',
	'description' => 'Popis',
	'display_field_on_forum' => 'Display field on forum?',
	'profile_field_forum_help' => 'If enabled, the field will display by the user next to forum posts.',
	
	// Minecraft
	'enable_minecraft_integration' => 'Povolit Minecraft?',
    'mc_service_status' => 'Minecraft Service Status',
    'service_query_error' => 'Unable to retrieve service status.',
    'authme_integration' => 'AuthMe Integration',
    'authme_integration_info' => 'When AuthMe integration is enabled, users can only register ingame.',
    'enable_authme' => 'Enable AuthMe integration?',
    'authme_db_address' => 'AuthMe Database Address',
    'authme_db_port' => 'AuthMe Database Port',
    'authme_db_name' => 'AuthMe Database Name',
    'authme_db_user' => 'AuthMe Database Username',
    'authme_db_password' => 'AuthMe Database Password',
    'authme_hash_algorithm' => 'AuthMe Hashing Algorithm',
    'authme_db_table' => 'AuthMe User Table',
    'enter_authme_db_details' => 'Please enter valid database details.',
    'authme_password_sync' => 'Synchronise AuthMe password?',
    'authme_password_sync_help' => 'If enabled, whenever a user\'s password is updated ingame, the password will also be updated on the website.',
    'minecraft_servers' => 'Minecraft Servers',
    'account_verification' => 'Minecraft Account Verification',
    'server_banners' => 'Server Banners',
    'query_errors' => 'Query Errors',
    'add_server' => '<i class="fa fa-plus-circle"></i> Add Server',
    'no_servers_defined' => 'No servers have been defined yet',
    'query_settings' => 'Query Settings',
    'default_server' => 'Default Server',
    'no_default_server' => 'No default server',
    'external_query' => 'Use external query?',
    'external_query_help' => 'If the default server query does not work, enable this option.',
    'adding_server' => 'Adding Server',
    'server_name' => 'Server Name',
    'server_address' => 'Server Address',
    'server_address_help' => 'This is the IP address or domain used to connect to your server, without the port.',
    'server_port' => 'Server Port',
    'parent_server' => 'Parent Server',
    'parent_server_help' => 'A parent server is typically the Bungee instance the server is connected to, if any.',
    'no_parent_server' => 'No parent server',
    'bungee_instance' => 'BungeeCord Instance?',
    'bungee_instance_help' => 'Select this option if the server is a BungeeCord instance.',
    'server_query_information' => 'In order to display a list of online players on your website, your server <strong>must</strong> have the \'enable-query\' option enabled in your server\'s <strong>server.properties</strong> file',
    'enable_status_query' => 'Enable status query?',
    'status_query_help' => 'If this is enabled, the status page will show this server as being online or offline.',
    'enable_player_list' => 'Enable player list?',
    'pre_1.7' => 'Minecraft version older than 1.7?',
    'player_list_help' => 'If this is enabled, the status page will display a list of online players.',
    'server_query_port' => 'Server Query Port',
    'server_query_port_help' => 'This is the query.port option in your server\'s server.properties file, provided the enable-query option in the same file is set to true.',
    'server_name_required' => 'Please enter the server name',
    'server_name_minimum' => 'Please ensure your server name is a minimum of 1 character',
    'server_name_maximum' => 'Please ensure your server name is a maximum of 20 characters',
    'server_address_required' => 'Please enter the server address',
    'server_address_minimum' => 'Please ensure your server address is a minimum of 1 character',
    'server_address_maximum' => 'Please ensure your server address is a maximum of 64 characters',
    'server_port_required' => 'Please enter the server port',
    'server_port_minimum' => 'Please ensure your server port is a minimum of 2 characters',
    'server_port_maximum' => 'Please ensure your server port is a maximum of 5 characters',
    'server_parent_required' => 'Please select a parent server',
    'query_port_maximum' => 'Please ensure your query port is a maximum of 5 characters',
    'server_created' => 'Server created successfully.',
    'confirm_delete_server' => 'Are you sure you want to delete this server?',
    'server_updated' => 'Server updated successfully.',
    'editing_server' => 'Editing Server',
    'server_deleted' => 'Server deleted successfully',
    'unable_to_delete_server' => 'Unable to delete server.',
	
	// Modules
	'modules_installed_successfully' => 'Všechny nové moduly se nainstalovali.',
	'enabled' => 'Povolit',
	'disabled' => 'Zakázat',
	'module_enabled' => 'Modul povolen.',
	'module_disabled' => 'Modul zakázán.',
	
	// Styles
	'templates' => 'Šablony',
	'template_outdated' => 'Zjistili jsme, že šablona je určena pro verze {x} , ale používáte verzi {y}', // Don't replace "{x}" or "{y}"
	'active' => 'Aktivní',
	'deactivate' => 'Deaktivovaz',
	'activate' => 'Aktiovat',
	'warning_editing_default_template' => 'Varování! Doporučuje se, abyste neupravovali výchozí šablonu.',
	'images' => 'Obrázek',
	'upload_new_image' => 'Nahrát nový orbrázek',
	'reset_background' => 'Resetovat pozadí',
	'install' => '<i class="fa fa-plus-circle"></i> nainstalován',
	'template_updated' => 'Šablona úspěšně aktualizována',
	'default' => 'Defaultní',
	'make_default' => 'Nastavit jako defaultní',
	'default_template_set' => 'Výchozí šablona {x} byla úspěšně nastavena.', // Don't replace {x}
	'template_deactivated' => 'Šablona zakázáná.',
	'template_activated' => 'Šablona aktivována.',
	
	// Users & groups
	'users' => 'Uživatel',
	'groups' => 'Skupiny',
	'group' => 'Skupina',
	'new_user' => '<i class="fa fa-plus-circle"></i> nový uživatel',
	'creating_new_user' => 'Vytvořit nového uživatele',
	'registered' => 'Registrovaný',
	'user_created' => 'Uživatel úspěšně vytvořen',
	'cant_delete_root_user' => 'Nemůžeš smazat hlavního uživatele!',
	'cant_modify_root_user' => 'Nemůžeš změnit skupinu pro hlavního uživatele!',
	'user_deleted' => 'Uživatel úspěšně smazán',
	'confirm_user_deletion' => 'Opravdu chceš smazat tohoto uživatele <strong>{x}</strong>?', // Don't replace {x}
	'validate_user' => 'Ověřit uživatele',
	'update_uuid' => 'Update UUID',
	'update_mc_name' => 'Aktualizovat Minecraft jméno',
	'reset_password' => 'Obnovit heslo',
	'punish_user' => 'Potrestat uživatele',
	'delete_user' => 'Smazat uživatele',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Další akce',
	'disable_avatar' => 'Zakázat avatar',
	'select_user_group' => 'Musíš vybrat skupinu uživatele!',
	'uuid_max_32' => 'UUID musí být amximálně 32 znaků dlouhé.',
	'title_max_64' => 'Uživatelské jméno musí mít maximálně 64 znaků.',
	'minecraft_uuid' => 'Minecraft UUID',
	'group_id' => 'Skupina ID',
	'name' => 'Jméno',
	'title' => 'Název uživatele',
	'new_group' => '<i class="fa fa-plus-circle"></i> nová skupina',
	'group_name_required' => 'Prosím zadejte název skupiny.',
	'group_name_minimum' => 'Please ensure your group name is a minimum of 2 characters long.',
	'group_name_maximum' => 'Please ensure your group name is a maximum of 20 characters long.',
	'creating_group' => 'Vytvořit novou skupinu',
	'group_html_maximum' => 'Please ensure your group HTML is no longer than 1024 characters long.',
	'group_html' => 'Group HTML',
	'group_html_lg' => 'Group HTML Large',
	'group_username_colour' => 'Barva názvu skupiny',
	'group_staff' => 'Bude tato skupina pracovní?',
	'group_modcp' => 'Uvidí ModCP?',
	'group_admincp' => 'Uvidí AdminCP?',
	'delete_group' => 'Smazat skupinu',
	'confirm_group_deletion' => 'Opravdu chceš smazat tuto skupinu: {x}?', // Don't replace {x}
	'group_not_exist' => 'TTato skupina neexistuje.',
	
	// General Admin language
	'task_successful' => 'Task successful.',
	'invalid_action' => 'Neplatná akce.',
	'enable_night_mode' => 'Zapnout noční režim.',
	'disable_night_mode' => 'Vymnout noční režim.',
	'view_site' => 'Přejít na web',
	'signed_in_as_x' => 'Přihlášen jako {x}', // Don't replace {x}
	
	// Security
	'acp_logins' => 'Přihlášení správce',
	'please_select_logs' => 'Vyberte protokoly, které chcete zobrazit',
	'ip_address' => 'IP Adresa',
	'template_changes' => 'Změna šablony',
	'file_changed' => 'Soubor byl změněn',
	
	// Updates
	'update' => 'Aktualizace',
	'current_version_x' => 'Současná verze: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => 'Nová verze: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'K dispozici je nová aktualizace',
	'up_to_date' => 'Používáš nejnovější verzi!',
	'urgent' => 'Tato aktualizace je důležitá!',
	'changelog' => 'Changelog',
	'update_check_error' => 'Při kontrole aktualizace došlo k chybě:',
	'instructions' => 'Instrukce',
	'download' => 'Stáhnout',
	'install' => 'Instalovat',
	'install_confirm' => 'Ujistěte se prosím, že jste stáhli balíček a nejprve jste nahrali obsažené soubory!',
	
	// File uploads
	'drag_files_here' => 'Soubory přetáhněte sem pro nahrání.',
	'invalid_file_type' => 'Špatný formát souboru!',
	'file_too_big' => 'Soubor je velmi velký! Tvůj soubor má {{filesize}} a limit je {{maxFilesize}}' // Don't replace {{filesize}} or {{maxFilesize}}
);
