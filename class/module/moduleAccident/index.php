<?php 

/** APP MODULE NAME */
define("APP_MODULE_ACCIDENT","Accident");

/** APP ACCIDENT CLASSE */
define("APP_ACCIDENT_CLASSE_FOLDER", APP_CLASSE_FOLDER."/module/moduleAccident/Manager/");
spl_autoload_register(function ($class_name) {
	include APP_ACCIDENT_CLASSE_FOLDER . $class_name .'.php';
});

/** APP ACCIDENT URL & FOLDER */
define("APP_ACCIDENT_URL", APP_WEB_URL."/accident");
define("APP_ACCIDENT_FOLDER", APP_WEB_FOLDER."/accident");

/*** APP ACCIDENT TABLE NAME */
define("TABLE_INIT","sl_");

/*** APP ACCIDENT MESSAGE */
define("MESSAGE_".APP_MODULE_ACCIDENT."_INIT","message_".APP_MODULE_ACCIDENT."_init");


/*** APP ACCIDENT MANAGER */

//$manager_accident_init = new SLAccidentInitManager();


/*** APP ACCIDENT Tools */

//require_once "Tools/toolsInit.php";

