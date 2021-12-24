<?php
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('UTC');
$host = "localhost"; //database location
$user = "db_user"; //database username
$pass = "db_password"; //database password

if(isset($_SERVER['SERVER_NAME'])){
	switch($_SERVER['SERVER_NAME']){
		case 'siteurl.com':
			$site_title = 'Open Parser for Starfleet Commander and Stardrift Empires';
			$is_uni = 'null';
			$bootstrap = 'blue_bootstrap';
		break;
		case 'www.siteurl.com':
			$site_title = 'Open Parser for Starfleet Commander and Stardrift Empires';
			$is_uni = 'null';
			$bootstrap = 'blue_bootstrap';
		break;
		case 'sfo.siteurl.com':
			$database = 'db_name_sfo_parser'; //SFO Parser Database
			$site_title = 'Open Parser for Starfleet Commander Original Universe';
			$game_url = 'http://playstarfleet.com';
			$galaxy_count = 35;
			$is_uni = 'sfo';
			$bootstrap = 'blue_bootstrap';
		break;		
		case 'uni2.siteurl.com':
			$database = 'db_name_uni2_parser'; //Uni2 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Universe 2';
			$game_url = 'http://uni2.playstarfleet.com';
			$galaxy_count = 10;
			$is_uni = 'uni2';
			$bootstrap = 'blue_bootstrap';
		break;					
		case 'x1.siteurl.com':
			$database = 'db_name_x1_parser'; //X1 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Extreme 1';
			$game_url = 'http://playstarfleetextreme.com';
			$galaxy_count = 9;
			$is_uni = 'x1';
			$bootstrap = 'red_bootstrap';
		break;
		case 'x2.siteurl.com':
			$database = 'db_name_x2_parser'; //X2 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Extreme 2';
			$game_url = 'http://uni2.playstarfleetextreme.com';
			$galaxy_count = 9;
			$is_uni = 'x2';
			$bootstrap = 'red_bootstrap';
		break;
		case 'nova.siteurl.com':
			$database = 'db_name_nova_parser'; //Nova Parser Database
			$site_title = 'Open Parser for Starfleet Commander Nova';
			$game_url = 'http://nova.playstarfleet.com';
			$galaxy_count = 10;
			$is_uni = 'nova';
			$bootstrap = 'orange_bootstrap';
		break;
		case 'tournament.siteurl.com':
			$database = 'db_name_tourny_parser'; //Tournament Parser Database
			$site_title = 'Open Parser for Starfleet Commander Tournamnet';
			$game_url = 'http://tournament.playstarfleet.com';
			$galaxy_count = 4;
			$is_uni = 'tourny';
			$bootstrap = 'blue_bootstrap';
		break;
		case 'sde.siteurl.com':
			$database = 'db_name_sde_parser'; //SDE Parser Database
			$site_title = 'Open Parser for Stardrift Empires';
			$game_url = 'http://stardriftempires.com';
			$galaxy_count = 25;
			$is_uni = 'sde';
			$bootstrap = 'yellow_bootstrap';
		break;
		case 'sdenova.siteurl.com':
			$database = 'db_name_sden_parser'; //SDE Nova Parser Database
			$site_title = 'Open Parser for Stardrift Empires Nova';
			$game_url = 'http://nova.stardriftempires.com';
			$galaxy_count = 10;
			$is_uni = 'sden';
			$bootstrap = 'yellow_bootstrap';
		break;
		case 'conquest.siteurl.com':
			$database = 'db_name_conq_parser'; //SFC Conquest Parser Database
			$site_title = 'Open Parser for Starfleet Commander Conquest';
			$game_url = 'http://conquest.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'conq';
			$bootstrap = 'blue_bootstrap';
		break;
		case 'guns.siteurl.com':
			$database = 'db_name_guns_parser'; //SFC Hired Guns Parser Database
			$site_title = 'Open Parser for Starfleet Commander Hired Guns';
			$game_url = 'http://guns.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'guns';
			$bootstrap = 'red_bootstrap';
		break;
		case 'uni3.siteurl.com':
			$database = 'db_name_uni3_parser'; //SFC Uni 3 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Universe 3';
			$game_url = 'http://uni3.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'uni3';
			$bootstrap = 'blue_bootstrap';
		break;
		case 'eradeon.siteurl.com':
			$database = 'db_name_erad_parser'; //SFC Erad Parser Database
			$site_title = 'Open Parser for Starfleet Commander Eradeon';
			$game_url = 'http://eradeon.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'erad';
			$bootstrap = 'blue_bootstrap';
		break;
		case 'eradeon2.siteurl.com':
			$database = 'db_name_erad2_parser'; //SFC Erad Extreme Parser Database
			$site_title = 'Open Parser for Starfleet Commander Eradeon Extreme';
			$game_url = 'http://eradeon2.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'erad2';
			$bootstrap = 'blue_bootstrap';
		break;
		case 'eradeon3.siteurl.com':
			$database = 'db_name_erad3_parser'; //SFC Erad 3 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Eradeon Universe 3';
			$game_url = 'http://eradeon3.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'erad3';
			$bootstrap = 'blue_bootstrap';
		break;
		case 'conquest2.siteurl.com':
			$database = 'db_name_conq2_parser'; //SFC Conquest 2 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Conquest Universe 2';
			$game_url = 'http://conquest2.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'conq2';
			$bootstrap = 'blue_bootstrap';
		break;
		case 'uni4.siteurl.com':
			$database = 'db_uni4_parser'; //SFC Uni 4 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Universe 4';
			$game_url = 'https://uni4.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'uni4';
			$bootstrap = 'blue_bootstrap';
		break;
		case 'nova2.siteurl.com':
			$database = 'db_nova2_parser'; //SFC Nova 2 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Nova Universe 2';
			$game_url = 'https://nova2.playstarfleet.com';
			$galaxy_count = 10;
			$is_uni = 'nova2';
			$bootstrap = 'orange_bootstrap';
		break;
		case 'x3.siteurl.com':
			$database = 'db_x3_parser'; //X3 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Extreme 3';
			$game_url = 'https://x3.playstarfleet.com';
			$galaxy_count = 9;
			$is_uni = 'x3';
			$bootstrap = 'red_bootstrap';
		break;
		case 'conquest3.siteurl.com':
			$database = 'db_conq3_parser'; //SFC Conquest 3 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Conquest Universe 3';
			$game_url = 'https://conquest3.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'conq3';
			$bootstrap = 'blue_bootstrap';
		break;
		case 'nova3.siteurl.com':
			$database = 'db_nova3_parser'; //SFC Nova 3 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Nova Universe 3';
			$game_url = 'https://nova3.playstarfleet.com';
			$galaxy_count = 10;
			$is_uni = 'nova3';
			$bootstrap = 'orange_bootstrap';
		break;
		case 'x4.siteurl.com':
			$database = 'db_x4_parser'; //X4 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Extreme 4';
			$game_url = 'https://x4.playstarfleet.com';
			$galaxy_count = 9;
			$is_uni = 'x4';
			$bootstrap = 'red_bootstrap';
		break;
		case 'uni5.siteurl.com':
			$database = 'db_uni5_parser'; //SFC Uni 5 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Universe 5';
			$game_url = 'https://uni5.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'uni5';
			$bootstrap = 'blue_bootstrap';
		break;
		case 'nova4.siteurl.com':
			$database = 'db_nova4_parser'; //SFC Nova 4 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Nova Universe 4';
			$game_url = 'https://nova4.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'nova4';
			$bootstrap = 'orange_bootstrap';
		break;
		case 'x5.siteurl.com':
			$database = 'db_x5_parser'; //X5 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Extreme 5';
			$game_url = 'https://x5.playstarfleet.com';
			$galaxy_count = 9;
			$is_uni = 'x5';
			$bootstrap = 'red_bootstrap';
		break;
		case 'uni6.siteurl.com':
			$database = 'db_uni6_parser'; //SFC Uni 6 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Universe 6';
			$game_url = 'https://uni6.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'uni6';
			$bootstrap = 'blue_bootstrap';
		break;
		case 'nova5.siteurl.com':
			$database = 'db_nova5_parser'; //SFC Nova 5 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Nova Universe 5';
			$game_url = 'https://nova5.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'nova5';
			$bootstrap = 'orange_bootstrap';
		break;
		case 'nova6.siteurl.com':
			$database = 'db_nova6_parser'; //SFC Nova 6 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Nova Universe 5';
			$game_url = 'https://nova6.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'nova6';
			$bootstrap = 'orange_bootstrap';
		break;
		case 'nova7.siteurl.com':
			$database = 'db_nova7_parser'; //SFC Nova 7 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Nova Universe 5';
			$game_url = 'https://nova7.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'nova7';
			$bootstrap = 'orange_bootstrap';
		break;
		case 'x6.siteurl.com':
			$database = 'db_x6_parser'; //X6 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Extreme 6';
			$game_url = 'https://x6.playstarfleet.com';
			$is_uni = 'x6';
			$galaxy_count = 9;
			$bootstrap = 'red_bootstrap';
		break;
		case 'uni7.siteurl.com':
			$database = 'db_uni7_parser'; //SFC Uni 7 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Universe 6';
			$game_url = 'https://uni7.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'uni7';
			$bootstrap = 'blue_bootstrap';
		break;
		case 'x7.siteurl.com':
			$database = 'db_x7_parser'; //X7 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Extreme 7';
			$game_url = 'https://x7.playstarfleet.com';
			$is_uni = 'x7';
			$galaxy_count = 9;
			$bootstrap = 'red_bootstrap';
		break;
		case 'x8.siteurl.com':
			$database = 'db_x8_parser'; //X8 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Extreme 8';
			$game_url = 'https://x8.playstarfleet.com';
			$is_uni = 'x8';
			$galaxy_count = 9;
			$bootstrap = 'red_bootstrap';
		break;
		case 'uni8.siteurl.com':
			$database = 'db_uni8_parser'; //SFC Uni 8 Parser Database
			$site_title = 'Open Parser for Starfleet Commander Universe 8';
			$game_url = 'https://uni8.playstarfleet.com';
			$galaxy_count = 5;
			$is_uni = 'uni8';
			$bootstrap = 'blue_bootstrap';
		break;
			}
		}

$con = mysql_connect($host,$user,$pass);
mysql_select_db($database, $con);
?>