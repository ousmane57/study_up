<?php
session_start();

/** 
 * ENVIRONNEMENT 
 */

if(isset($_GET["dev"])){

    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);
}

/** 
 * CONFIG 
 */

define("APP_NAME","Study Up");
define("APP_IBAN_CODE","XXXXXXXXXXXXXXXXXXXXXXXX");


/** 
 * TOOLS 
 */

require_once dirname(__DIR__)."/class/tools/toolsApp.php";
require_once dirname(__DIR__)."/class/tools/toolsAlert.php";
require_once dirname(__DIR__)."/class/tools/toolsBadge.php";
require_once dirname(__DIR__)."/class/tools/toolsLang.php";
require_once dirname(__DIR__)."/class/tools/toolsUpload.php";


/** APP URL & FOLDER */

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {                                       
    define("APP_URL", "https://".$_SERVER["HTTP_HOST"]."/study_up");
}else {
    define("APP_URL", "http://".$_SERVER["HTTP_HOST"]."/study_up");
}

define("APP_FOLDER", dirname(__DIR__));

/** APP CLASSE URL & FOLDER */
define("APP_CLASSE_FOLDER", APP_FOLDER."/class");

/** APP CONFIG URL & FOLDER */
define("APP_CONFIG_FOLDER", APP_FOLDER."/config");

/** APP REQUEST URL & FOLDER */
define("APP_REQUEST_URL", APP_URL."/request");
define("APP_REQUEST_FOLDER", APP_FOLDER."/request");


/** APP WEB URL & FOLDER */
define("APP_WEB_URL", APP_URL."/web");
define("APP_WEB_FOLDER", APP_FOLDER."/web");

/** APP LANG URL & FOLDER */
define("APP_LANGUE_URL", APP_WEB_URL."/lang");
define("APP_LANGUE_FOLDER", APP_WEB_FOLDER."/lang");

/** APP UPLOAD URL & FOLDER */
define("APP_UPLOAD_URL", APP_WEB_URL."/upload");
define("APP_UPLOAD_FOLDER", APP_WEB_FOLDER."/upload");


/**
 * APP VARIABLE
 */

define("APP_REQUEST_URI",$_SERVER['REQUEST_URI']);


/**
 * APP DATABASE
 */

require_once "init_db.php";

/**
 * APP LANGS
 */

require_once "init_lang.php";

/**
 * APP MODULE
 */

//require_once APP_CLASSE_FOLDER."/module/moduleVoyage/index.php";


?>
