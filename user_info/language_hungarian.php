<?php
$language['name']['administrator'] 		= 'ProFTPd Adminisztráció';
$language['name']['sys_info_only'] 		= 'Rendszer Információk';

/* General */
$language['general']['username'] 		= 'Felhasználónév';
$language['general']['groups'] 			= 'Csoportok';
$language['general']['primarygroup'] 	= 'Elsõdleges csoport';
$language['general']['homedirectory'] 	= 'Home mappa';
$language['general']['disabled'] 		= 'Kikapcsolva';
$language['general']['expiration'] 		= 'Lejárat';
$language['general']['expiration_never']= 'Soha';
$language['general']['password'] 		= 'Jelszó';
$language['general']['shell'] 			= 'Shell';
$language['general']['description'] 	= 'Leírás';
$language['general']['delete'] 			= 'Törlés';
$language['general']['numlogins'] 		= '# Bejelentkezések';
$language['general']['lastlogin'] 		= 'Utolsó bejelentkezés';
$language['general']['lastlogout'] 		= 'Utolsó kijelentkezés';
$language['general']['userid'] 			= 'Felhasználó ID';
$language['general']['select_subsection']= 'Válasz ki egy almenût';
$language['general']['error_occured'] 	= 'Hiba';
$language['general']['error_type'] 		= 'Típus';
$language['general']['error_details'] 	= 'Részletek';
$language['general']['error_db_errors'] = 'Adatbázis hiba és debug üzenetek';

$language['general']['time_old'] 		= 'Elhagyási érték beállítva';
$language['general']['time_yesterday'] 	= 'Tegnap';
$language['general']['time_24h'] 		= '24 óra';
$language['general']['time_1week'] 		= 'Egy hét';
$language['general']['time_2week'] 		= 'Két hét';
$language['general']['time_1month'] 	= 'Egy hónap';
$language['general']['time_3month'] 	= 'Három hónap';
$language['general']['time_6month'] 	= 'Hat hónap';
$language['general']['time_1year'] 		= 'Egy év';
$language['general']['time_never'] 		= 'Soha';

$language['general']['name'] 			= 'Név';
$language['general']['email'] 			= 'E-mail';
$language['general']['adress'] 			= 'Cím';
$language['general']['notes'] 			= 'Megjegyzések';
$language['general']['quota'] 			= 'Quota limit';
$language['general']['uploadbyteondisk']= 'Diskquota';
$language['general']['downloadbytefromdisk'] = 'Download limit';
$language['general']['byteinoutlimit']	= 'Transfer in/out';
$language['general']['uploadfileondisk']= 'Upload max';
$language['general']['downloadfilefromdisk'] = 'Download max';
$language['general']['fileinoutlimit']	= 'Transfer in/out';
$language['general']['quotalimittype']	= 'Limit type';
$language['general']['quotatype']		= 'Quota type';
$language['general']['quotapersession']	= 'Per session';

$language['general']['yes'] 			= 'Igen';
$language['general']['no'] 				= 'Nem';

/* Menuitems */
$language['menu']['mainpage'] 			= 'Fõoldal';
$language['menu']['users'] 				= 'Felhasználók';
$language['menu']['groups'] 			= 'Csoportok';
$language['menu']['transfers'] 			= 'Átvitelek';
$language['menu']['status'] 			= 'Státusz';
$language['menu']['about'] 				= 'About';
$language['menu']['sysinfo'] 			= 'Rendszer info';
$language['menu']['configure'] 			= 'Konfiguráció';
$language['menu']['reset'] 				= 'Reset';
$language['menu']['submit'] 			= 'Mentés';
$language['menu']['traffic'] 			= 'Forgalom';
$language['menu']['section'] 			= 'Szekciók';
$language['menu']['transfer_log'] 		= 'Átviteli log';
$language['menu']['statistics'] 		= 'Statisztikák';
$language['menu']['toplists'] 			= 'Top lista';
$language['menu']['manual'] 			= 'Manual';

/* Main Page */
$language['mainpage']['ftp'] 			= 'FTP';
$language['mainpage']['terminal'] 		= 'Terminal';
$language['mainpage']['pid'] 			= 'PID';
$language['mainpage']['uptime'] 		= 'Uptime';
$language['mainpage']['idle'] 			= 'Üresjárat / %';
$language['mainpage']['command'] 		= 'Parancs';
$language['mainpage']['command_info']	= 'Információk';
$language['mainpage']['device'] 		= 'Eszköz';
$language['mainpage']['time_login']		= 'Bejelentkezés ideje';

/* Users */
$language['users']['newuser'] 			= 'Felhasználó felvétele';
$language['users']['users'] 			= 'Felhasználók';
$language['users']['cmd_output'] 		= 'Parancs kimenete';
$language['users']['pers_info'] 		= 'Személyes adatok';
$language['users']['no_group'] 			= 'Ismeretlen';
$language['users']['quota_info']		= 'Quota settings';

/* Userview */
$language['userv']['user_error'] 		= 'Felhasználói hiba';
$language['userv']['user_no_such_user'] = <<<EOD
	A user ID was specified, but no user exists with that ID - select the user
	via the userlist instead of accessing this file manually.
EOD;
$language['userv']['user_no_user_specified'] = <<<EOD
	No user ID was specified - select the user via the userlist instead of
	accessing this file manually.
EOD;
$language['userv']['agu_info'] 			= 'Általános felhasználói információ megváltoztatása';
$language['userv']['deleteuser'] 		= 'Felhasználó törlése';
$language['userv']['userdeleted'] 		= 'A felhasználó törölve';
$language['userv']['assoc_ip'] 			= "Társított IP -k";
$language['userv']['geninfo'] 			= 'Általános info.';
$language['userv']['set_password'] 		= 'Jelszó beállítása';
$language['userv']['set_expiration'] 	= 'Lejárat beállítása';
$language['userv']['expirationdate'] 	= 'Lejárat dátumának beállítása';
$language['userv']['generated_traffic'] = 'Generált forgalom';
$language['userv']['down_sections'] 	= 'Szekciónkénti letöltések';
$language['userv']['up_sections'] 		= 'Szekciónkénti feltöltések';

$language['userv']['selectdate'] 		= 'Dûtumválasztás';
$language['userv']['customdate'] 		= 'Szokásos dátum';

$language['userv']['quota'] 			= 'Quota';
$language['userv']['quota_add'] 		= 'Add Quota';
$language['userv']['quota_remove'] 		= 'Remove';
$language['userv']['quota_noquota'] 	= 'No quota has been specified for '
	. 'this user - click "' . $language['userv']['quota_add'] . '" to add a '
	. 'quota. Take note that the quota set will be a blank one - what this '
	. 'means is that previous filetransfers won&acute;t be taken into account.';
$language['userv']['quota_used'] 		= 'Quota usage';

$language['userv']['alter_maingroup'] 	= 'Elsõdleges csoport megváltoztatása';
$language['userv']['alter_addgroup'] 	= 'További csoportok';
$language['userv']['memberof'] 			='Tagja a';
$language['userv']['joingroup'] 		= 'Csatlakozás csoporthoz';
$language['userv']['selectgroup'] 		= 'Csoport kiválasztása';
$language['userv']['memberships'] 		= 'Tagság';

$language['userv']['edit_user'] 		= 'Edit user';

$language['userv']['setpassword'] 		= 'Jelszó beállítása';
$language['userv']['newpassword'] 		= 'Új jelszó';
$language['userv']['newpasswordagain'] 	= 'Új jelszó (mégegyszer)';
$language['userv']['onchoosingpassword']= 'On the choosing of a good password';
$language['userv']['howto_password'] 	= <<<EOD
	As  a  general guideline,  passwords  should consist of 6 to 8 characters
	including one or more from each of following sets:
	<ul>
		<li>Lower case alphabetics
		<li>Upper case alphabetics
		<li>Digits 0 thru 9
		<li>Punctuation marks
	</ul>

	Compromises in  password  security  normally  result  from careless
	password selection or handling.  For this reason, you should not select
	a password which appears in  a  dictionary or  which  must  be  written
	down. The password should also not be a proper  name,  your  license
	number, birth  date,  or street address.  Any of these may be used as
	guesses to violate system security.
	<br><br>
	Your password must easily remembered so that you will  not be  forced  to
	write it on a piece of paper. Other methods of construction involve
	selecting an  easily remembered  phrase from literature and selecting the
	first or last letter from each word. An example of this is: "Ask not for
	whom the bell tolls", which produces "An4wtbt".
	<br><br>
	You may be reasonably sure few crackers will have included this  in  their
	dictionaries.  You should, however, select your own methods for
	constructing passwords and  not  rely exclusively on the methods given
	here.
	<br><br>
	(excerpt from the manual pages for passwd)
EOD;

$language['userv']['delete_user'] 		= 'Felhasználó törlése';
$language['userv']['delete_user_desc'] 	= <<<EOD
	You have opted to delete this user. By doing this you
	should be aware that deleting the user will remove it
	completely. If you accidentaly deleted the user, the
	only way to recover will be to create a new user and
	assign that user the exact information originally
	entered to create a new identical user.
	<br><br>
	If this user has been assigned any additional groups,
	you will have to remove these memberships before you can
	delete this user - after you have done this a delete-button
	will appear below. Group memberships can be removed in the
	subsection called Groups.
EOD;


/* Groups */
$language['groups']['delete_group'] 	= 'Csoport törlése';
$language['groups']['alter_group'] 		= 'Csoport információk megváltoztatása';
$language['groups']['alter'] 			= 'Megváltoztat';
$language['groups']['delete'] 			= 'Törlés';
$language['groups']['newgroup'] 		= 'Csoport felvétele';
$language['groups']['groups'] 			= 'Csoportok';
$language['groups']['groupname'] 		= 'Csoportnév';
$language['groups']['addgroup'] 		= 'Csoport felvétele';
$language['groups']['groupid'] 			= 'Csoport ID';
$language['groups']['members'] 			= 'Tagok';
$language['groups']['desc_delete'] 		= <<<EOD
	You have opted to delete this group. By doing this you
	should be aware that deleting the group will remove it
	completely. If you accidentaly deleted the group, the
	only way to recover will be to create a new group and
	assign the users that used to belong to the original
	group to the group you just created.
EOD;
$language['groups']['desc_delete_prim']	= <<<EOD
	<br><br>
	Some of your users have this group assigned as
	their primary group - it is therefore highly
	recommended that you go through the list below
	and assign them another group as their primary.
	If you do not assign them a new group the results
	may be unpredictable depending on your configuration.
	<br><br>
EOD;

/* About */
$language['about']['about'] 			= 'About';
$language['about']['revisions'] 		= 'Áttekintések';
$language['about']['version'] 			= 'Verzió';

$language['about']['newfeature'] 		= 'Hozzáadott funkciók';
$language['about']['bugfix'] 			= 'Bugfix';
$language['about']['restructuring']		= 'Újrastruktúrálás';
$language['about']['documentation']		= 'Dokumentáció';

$language['about']['introduction'] 		= <<<EOD
	A while back ago working to set up an easily administered
	ftp I found the	shareware ftp-server Serv-U for Microsoft
	Windows(TM). All was great until the trial timed out
	effectively ending all the rejoycing (is this word spelled
	out	correctly anyway?) - the time had come to either pay
	up or get creative. There's no question what became of that
	question since my Slackware-server was up and ready to go.
	<br><br>
	After considering the alternatives for GNU/Linux when it
	comes to more professional ftp-servers I ended up choosing
	proFTPd. Unfortunately as I was quick to discover was that
	this server was a nightmare to compile (atleast if you needed
	additional modules compiled in), configure and administer.
	The two first can be solved with a proper-quality tutorial,
	and the implementation for the last part is what you're
	looking at right now.
EOD;

/* Manual */
$language['manual']['manual'] 			= 'Manual';
$language['manual']['introduction'] 	= <<<EOD
	In this section you will be able to access the manual and
	the various documents that are available to you at this
	moment. Take note that the documents available here is also
	available as standalone files that can be found in the
	location where you installed proFTPd Administrator. The content
	in these files are at the moment not applicable for translation
	due to their temporary nature during development.
EOD;

/* Transfers */
$language['transfers']['transfers'] 	= 'Átvitel';
$language['transfers']['downloaders'] 	= 'letöltõk';
$language['transfers']['uploaders'] 	= 'feltöltõk';
$language['transfers']['down_sections'] = 'Szekciónkénti letöltések';
$language['transfers']['up_sections'] 	= 'Szekciónkénti feltöltések';
$language['transfers']['traffic_stats']	= 'Forgalmi statisztikák';
$language['transfers']['transfer_log'] 		= 'Átviteli log';

/* Util */
$language['util']['top'] 				= 'Top';
$language['util']['downloaded'] 		= 'Letöltött';
$language['util']['numfiles'] 			= '# fájl';
$language['util']['uploaded'] 			= 'Feltöltött';
$language['util']['total_amount'] 		= 'Összérték';
$language['util']['mostactive'] 		= 'Legaktívabb';

$language['util']['time_1hour'] 		= 'Utolsó óra';
$language['util']['time_24hour'] 		= 'Utolsó 24 óra';
$language['util']['time_7days'] 		= 'Utolsó 7 nap';
$language['util']['time_30days'] 		= 'Utolsó 30 nap';
$language['util']['time_total'] 		= 'Összes';

$language['util']['transfer_log'] 		= 'Átviteli log';
$language['util']['user'] 				= 'Felhasználó';
$language['util']['timestamp'] 			= 'Idõformátum';
$language['util']['filename'] 			= 'Fájlnév';
$language['util']['size'] 				= 'Méret';
$language['util']['command'] 			= 'Parancs';
$language['util']['duration'] 			= 'Idõ';

/* Status */
$language['status']['nosupport']		= 'Státusz hiba';
$language['status']['nosupport_desc'] 	= <<<EOD
	You are using an operating system that is not currently supported. This
	part of the package is heavily dependant on os-specific code, but
	hopefully this will get implemented in the future. The rest of the page
	should however be available without any other exceptions
EOD;
$language['status']['status'] 			= 'Státusz';
$language['status']['system'] 			= 'Rendszer';
$language['status']['version'] 			= 'Verzió';
$language['status']['name'] 			= 'Név';
$language['status']['value'] 			= 'Érték';
$language['status']['program'] 			= 'Program';

$language['status']['ip'] 				= 'Figyelt IP';
$language['status']['http'] 			= 'HTTP szerver';
$language['status']['kernel_version'] 	= 'Kernel verzió';
$language['status']['db_server'] 		= 'MySQL szerver';
$language['status']['uptime'] 			= 'Uptime';
$language['status']['php_version'] 		= 'PHP verzió';
$language['status']['idle_time'] 		= 'Üresjárat';
$language['status']['zend_version'] 	= 'Zend PHP Motor';
$language['status']['term_users'] 		= 'Terminal felhasználók';
$language['status']['ftp_users'] 		= 'Ftp felhasználók';
$language['status']['proftpd_version'] 	= 'proFTPd';
$language['status']['load'] 			= 'Terheltség';
$language['status']['web_interface'] 	= 'Web-interface';

$language['status']['menu_processlist'] = 'Folyamatlista';
$language['status']['menu_resources'] 	= 'Források';
$language['status']['menu_hardware'] 	= 'Hardware';
$language['status']['menu_kernel'] 		= 'Kernel';
$language['status']['menu_database'] 	= 'Adatbázis';

$language['status']['server_down'] 		= 'Szerver kikapcsolás';
$language['status']['secured_apache'] 	= 'A biztonságos szerverek csak a nevet közlik, pl.: Apache.';
$language['status']['uptime_linux'] 	= 'Terheltségi átlag az elmúlt 1, 5, és 15 percben.';

$language['status']['ps_processlist'] 	= 'Folyamatlista';
$language['status']['ps_name'] 			= 'Név';
$language['status']['ps_pid'] 			= 'PID';
$language['status']['ps_uid'] 			= 'UID';
$language['status']['ps_defunctprocess']= 'A szülõfolyamat nem létezik, *unix rendszereken ez annyit jelent, hogy bugos a szoftver.';

$language['status']['krnl_kernel'] 		= 'Kernel információk';
$language['status']['krnl_kernelconf'] 	= 'Kernel konfigurációk';
$language['status']['krnl_kernelparams']= 'Kernel paraméterek';
$language['status']['krnl_compiledin']	= 'Beforgatott tulajdonságok';
$language['status']['krnl_modularized']	= 'Modularizált';
$language['status']['krnl_conf_file'] 	= 'Kernel konfigurációs fájl';

$language['status']['hw_hardware'] 		= 'Hardware információk';
$language['status']['hw_processor'] 	= 'Processor';
$language['status']['hw_pci'] 			= 'PCI-eszközök';
$language['status']['hw_pciadress'] 	= 'Cím';
$language['status']['hw_pcivalue'] 		= 'Leírás';
$language['status']['hw_ide'] 			= 'IDE-eszközök';
$language['status']['hw_idedevice'] 	= 'Eszköz';
$language['status']['hw_idefield'] 		= 'Mezõ';
$language['status']['hw_idevalues'] 	= 'Érték';

$language['status']['db_database'] 		= 'Adatbázis statisztikák';
$language['status']['db_tablename']		= 'Név';
$language['status']['db_rows'] 			= 'Sor';
$language['status']['db_rowformat'] 	= 'Sorformátum';
$language['status']['db_tablesize'] 	= 'Méret';
$language['status']['db_created'] 		= 'Létrehozás dátuma';
$language['status']['db_updated'] 		= 'Utolsó frissítés';
$language['status']['db_checktime'] 	= 'Idõ ellenõrzése';
$language['status']['db_var_name']		= 'Változó neve';
$language['status']['db_var_value']		= 'Érték';
$language['status']['db_sec_tablestats']= 'Tábla statisztikák';
$language['status']['db_sec_status']	= 'Adatbázis státusz';
$language['status']['db_sec_processes']	= 'Folyamatlista';
$language['status']['db_process_user']	= 'Felhasználó';
$language['status']['db_process_db']	= 'Adatbázis';
$language['status']['db_process_cmd']	= 'Parancs';
$language['status']['db_process_time']	= 'Idõ';
$language['status']['db_process_state']	= 'Állapot';
$language['status']['db_process_info']	= 'Információ';


$language['status']['res_totalt']		= 'Összes kapacitás';
$language['status']['res_resources']	= 'Források';
$language['status']['res_storage']		= 'Ferõhely';
$language['status']['res_mountpoint']	= 'Mountolási pont';
$language['status']['res_perc_capacity']= 'Százalékos kapacitás';
$language['status']['res_free']			= 'Szabad';
$language['status']['res_used']			= 'Használt';
$language['status']['res_size']			= 'Méret';
$language['status']['res_phys_device']	= 'Fizikai eszköz';
$language['status']['res_withfs']		= 'fájlrendszerrel';

$language['status']['res_memory']		= 'Memória';
$language['status']['res_memcategory']	= 'Típus';
$language['status']['res_memphysical']	= 'Fizikai memória';
$language['status']['res_memvirtual']	= 'Virtuális memória';

$language['status']['res_network']		= 'Hálózat';
$language['status']['res_devname']		= 'Eszköznév';
$language['status']['res_netrecv']		= 'Fogadott';
$language['status']['res_netsend']		= 'Küldött';
$language['status']['res_neterror']		= 'Eldobott';

$language['status']['res_netnic']		= 'Hálózati kártya';
$language['status']['res_netlocnic']	= 'localhost (loopback eszköz)';
$language['status']['res_netppp']		= 'P2P protokoll eszköz';
$language['status']['res_netsit']		= 'Egyszerû átviteli eszköz (ipv6 - ipv4)';

/* Configure */
$language['configure']['configure']		= 'Konfiguráció';
$language['configure']['menu_database']	= 'Adatbázis';
$language['configure']['menu_proftpd']	= 'ProFTPd';
$language['configure']['menu_interface']= 'Interface';
$language['configure']['menu_mpoint']	= 'Mountolási pont';
$language['configure']['menu_sections']	= 'Szekciók';
$language['configure']['menu_filepaths']= 'Fájl elérések';
$language['configure']['menu_quota']	= 'Quota';

$language['configure']['db_type']		= 'Adatbázis szerver';
$language['configure']['db_suptype']	= 'Altípus';
$language['configure']['db_st_notused']	= '&lt; Nincs használatban &gt;';
$language['configure']['db_database']	= 'Adatbázis';
$language['configure']['db_hostname']	= 'Kiszolgállónév';
$language['configure']['db_database']	= 'Adatbázis';
$language['configure']['db_connectfail']= <<<EOD
	Connecting to MySQL-database failed using the credentials you've supplied - most likely this is simply due to
	a misspelled username or password. A default MySQL-installation can be accessed using the username "root" and
	an empty password. For more information see the full error message recieved from the database-server below.
EOD;
$language['configure']['db_dbfail']= <<<EOD
	Connecting to MySQL-database was successfull using the credentials you've supplied - however selecting
	the database failed due to a misspelt database name, or the database not existing. The default setup
	described in the installation-instructions specifies a database called "<a href="javascript:void();" onclick="document.config_database.frm_database_database.value = 'proftpd_admin';">proftpd_admin</a>".
	For more information see the full error message recieved from the database-server below.
EOD;

$language['configure']['ftp_ftp']		= 'ProFTPd';
$language['configure']['ftp_ftproot']	= 'FTP root';
$language['configure']['ftp_defhome']	= 'Alapértelmezett könyvtár';
$language['configure']['ftp_createcmd']	= 'Felhasználói parancs létrehozása';
$language['configure']['ftp_defshell']	= 'Alapértelmezett shell';

$language['configure']['quota_activate']	= 'Activate support for quotas';
$language['configure']['quota_whattype']	= 'Default quota type';
$language['configure']['quota_whatlimit']	= 'Default limit type';
$language['configure']['quota_whatsession']	= 'Quota only per session';
$language['configure']['quota_details']		= 'Details for standard quota';
$language['configure']['quota_down_mb']		= 'Downloaded MB';
$language['configure']['quota_up_mb']		= 'Uploaded MB';
$language['configure']['quota_trans_mb']	= 'Transferred MB';
$language['configure']['quota_down_files']	= 'Downloaded files';
$language['configure']['quota_up_files']	= 'Uploaded files';
$language['configure']['quota_trans_files']	= 'Transferred files';

$language['configure']['ui_ui']			= 'Interface';
$language['configure']['ui_numnames']	= 'Nevek a toplistában';
$language['configure']['ui_numlogitems']= 'Logbejegyzések megjelenítése';
$language['configure']['ui_padtoplist']	= 'Toplist padding';
$language['configure']['ui_striplogs']	= 'Logelérés rövidítése';
$language['configure']['ui_sysonly']	= 'Rendszerinfo';
$language['configure']['ui_style']		= 'Kiválasztott stílus';
$language['configure']['ui_language']	= 'Nyelv';

$language['configure']['mp_mp']			= 'Mountolási pontok';
$language['configure']['mp_skipped_mp']	= 'Kihagyott pontok';
$language['configure']['mp_hide_mp']	= 'Itt kell megadni a státusz oldalon kihagyandó pontokat';
$language['configure']['mp_select_mp']	= 'Pont kiválasztása';

$language['configure']['sec_downloads']	= 'Szekciók: Letöltés';
$language['configure']['sec_uploads']	= 'Szekciók: Feltöltés';
$language['configure']['sec_adddownload']= 'Letöltési szekció felvétele az átviteli oldalra';
$language['configure']['sec_addupload']	= 'Feltöltési szekció felvétele az átviteli oldalra';
$language['configure']['sec_relpath']	= 'Relatív szekció elérés';
$language['configure']['sec_down_topic']= '<acronym title="FTP root, to be concatenated with the relative section paths to form complete paths.">Basepath:</acronym><br>Letöltési szekciók:';
$language['configure']['sec_up_topic']	= '<acronym title="FTP root, to be concatenated with the relative section paths to form complete paths.">Basepath:</acronym><br>Feltöltési szekciók:';

$language['configure']['fp_fp']			= 'Fájlelérések';
$language['configure']['fp_generic_cmd']= 'Általános parancsok elérése';
$language['configure']['fp_cmdspecific']= ' - meghatározva';
$language['configure']['fp_conf_file']	= 'Kernel konfigurációs fájl';

$language['configure']['fp_who_rel']= <<<EOD
	The path you've supplied has either been specified as a relative path, or
	the supplied path is empty. Although this shouldn't be a problem for a
	basic command such as this one it is recommended that you supply the full
	path - if only to remove this warning. The default value
	("<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_who.value = '/usr/bin/who';">/usr/bin/who</a>")
	should suffice for both Linux and *BSD systems.
EOD;
$language['configure']['fp_who_no']= <<<EOD
	The file you've specified do not seem to exist - adjust the value of this
	field and supply the full path to the command. The default value is
	"<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_who.value = '/usr/bin/who';">/usr/bin/who</a>".
EOD;

$language['configure']['fp_df_rel']= <<<EOD
	The path you've supplied has either been specified as a relative path, or
	the supplied path is empty. Although this shouldn't be a problem for a
	basic command such as this one it is recommended that you supply the full
	path - if only to remove this warning. The default value ("
	<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_df.value = '/usr/bin/df';">/usr/bin/df</a>")
	should suffice for both Linux and *BSD systems.
EOD;
$language['configure']['fp_df_no']= <<<EOD
	The file you've specified do not seem to exist - adjust the value of this
	field and supply the full path to the command. The default value is "
	<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_df.value = '/usr/bin/df';">/usr/bin/df</a>".
EOD;

$language['configure']['fp_ps_rel']= <<<EOD
	The path you've supplied has either been specified as a relative path, or
	the supplied path is empty. Although this shouldn't be a problem for a
	basic command such as this one it is recommended that you supply the full
	path - if only to remove this warning. The default value (
	"<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_ps.value = '/bin/ps';">/bin/ps</a>")
	should suffice for both Linux and *BSD systems.
EOD;
$language['configure']['fp_ps_no']= <<<EOD
	The file you've specified do not seem to exist - adjust the value of this
	field and supply the full path to the command. The default value is
	"<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_ps.value = '/bin/ps';">/bin/ps</a>".
EOD;

$language['configure']['fp_sysctl_rel']= <<<EOD
	The path you've supplied has either been specified as a relative path, or
	the supplied path is empty. The default value
	("<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_sysctl.value = '/sbin/sysctl';">/sbin/sysctl</a>")
	should suffice for both Linux and *BSD systems.
EOD;
$language['configure']['fp_sysctl_no']= <<<EOD
	The file you've specified do not seem to exist - adjust the value of this
	field and supply the full path to the command. The default value is
	"<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_sysctl.value = '/sbin/sysctl';">/sbin/sysctl</a>".
EOD;

$language['configure']['fp_ftpwho_rel']= <<<EOD
	The path you've supplied has either been specified as a relative path, or
	the supplied path is empty. The default value
	("<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_ftpwho.value = '/usr/local/bin/ftpwho';">/usr/local/bin/ftpwho</a>")
	should suffice for both Linux and *BSD systems.
EOD;
$language['configure']['fp_ftpwho_no']= <<<EOD
	The file you've specified do not seem to exist - adjust the value of this
	field and supply the full path to the command. The default value
	("<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_ftpwho.value = '/usr/local/bin/ftpwho';">/usr/local/bin/ftpwho</a>")
	should suffice for most Linux and *BSD systems.
EOD;

$language['configure']['fp_proftpd_rel']= <<<EOD
	The path you've supplied has either been specified as a relative path, or
	the supplied path is empty. If you manually compiled this program from
	sourcecode this file would most likely have been placed in
	"<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_proftpd.value = '/usr/local/sbin/proftpd';">/usr/local/sbin/proftpd</a>".
	If you're using FreeBSD and installed proftpd using portage this file would
	have been placed in
	"<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_proftpd.value = '/usr/local/libexec/proftpd';">/usr/local/libexec/proftpd</a>".
EOD;
$language['configure']['fp_proftpd_no']= <<<EOD
	The file you've specified do not seem to exist - adjust the value of this
	field and supply the full path to the command. If you manually compiled
	this program from sourcecode this file would most likely have been placed
	in "<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_proftpd.value = '/usr/local/sbin/proftpd';">/usr/local/sbin/proftpd</a>".
	If you're using FreeBSD and installed proftpd using portage this file
	would have been placed in
	"<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_proftpd.value = '/usr/local/libexec/proftpd';">/usr/local/libexec/proftpd</a>".
EOD;

$language['configure']['fp_nokernel']= <<<EOD
	The file you've specified do not seem to exist - adjust the value of this
	field and supply the full path to the kernel configuration. The various
	Linux-distributions have different locations of placing this file, but you
	should atleast consider trying
	"<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_kernel.value = '/boot/config';">/boot/config</a>"
	or "<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_kernel.value = '/usr/src/linux/.config';">/usr/src/linux/.config</a>".
	The various BSD-variations, if I'm not mistaken, usually place this file in
	"<a href="javascript:void();" onclick="document.config_filepaths.frm_config_path_kernel.value = '/usr/src/sys/i386/conf/GENERIC';">/usr/src/sys/i386/conf/GENERIC</a>".
EOD;

$language['configure']['no_write_config']= <<<EOD
	The configuration file, called "configuration.xml", is NOT writeable and you
	can not alter any of the settings before you have given the web-server
	permission to write to this file - check the manual for more information on
	how to do this. Subsections have been hidden until you rectify this error.
EOD;
?>