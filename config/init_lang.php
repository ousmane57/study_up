<?php

define("DEFAULT_LANG","fr.php");

if(isset($_GET["lg"])){
    toolsApp::tool_session("lg",toolsApp::tool_get_get("lg"));
}

if(!toolsApp::tool_check_session("lg")){
     $def_lang= DEFAULT_LANG; 
}else{
    $def_lang = toolsApp::tool_get_session("lg").".php";
}


if (toolsApp::tool_check_file(APP_LANGUE_FOLDER."/$def_lang")){
    require_once (APP_LANGUE_FOLDER."/$def_lang");
} else {
    toolsApp::tool_redirect(APP_WEB_URL."/index.php?lg=fr");
}

?>
