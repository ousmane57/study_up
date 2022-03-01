<?php 

class toolsLang{

    public static function tool_get_text($text) {
        global $lang;

        if (toolsApp::tool_check_variable($lang[$text])) {
            return $lang[$text];
        }else{
            return $text;
        }

    }

    public static function tool_langue_text($langue,$text,$default) {
        
        $pathLangue = APP_LANGUE_ROOT."/$langue.php";

        if (toolsLang::tool_check_langue($langue)) {
            
            include $pathLangue;

            if (toolsApp::tool_check_variable($lang[$text])) {
                return $lang[$text];
            }else{
                return $default;
            }
        }else{
            return $default ;
        }

    }

    public static function tool_get_langue_text($tolangue,$langue,$text) {
        
        $pathLangue = APP_LANGUE_ROOT."/$langue.php";

        $langue_text = $text;

        if (toolsLang::tool_check_langue($langue) && toolsLang::tool_check_langue($tolangue)) {
            
            include $pathLangue;

            foreach($lang as $cle => $valeur){

                if(toolsApp::tool_check_var($valeur,$text)){
                    $langue_text = toolsLang::tool_langue_text($tolangue,$cle,$text);
                }
            }

        }else{
            $langue_text;
        }

        return $langue_text;

    }

    public static function tool_get_langues(){

        $langues = array();

        $language = glob(APP_LANGUE_ROOT . '/*.php', GLOB_BRACE);

        foreach ($language as $info_langue) {
            $data_langue = pathinfo($info_langue);
            array_push($langues,$data_langue["filename"]);
        }

        return $langues;

    }

    public static function tool_check_langue($langue){

        $langues = toolsLang::tool_get_langues();

        if(in_array($langue,$langues)){
            return true;
        }else{
            return false;
        }

    }

    public static function tool_add_langue($langue){

        global $lang;

        $pathLangue = APP_LANGUE_ROOT."/$langue.php";

        if(!toolsApp::tool_check_file($pathLangue)){

            $newLangue = '<?php'.PHP_EOL.'// '.$langue.' Language for '.APP_NAME.''.PHP_EOL.'// Last update: '.date("d-m-Y H:i").''.PHP_EOL.'$lang = array();'.PHP_EOL;

            foreach($lang as $key => $value) {
                $newLangue .= '$lang["'.$key.'"] = "'.$value.'";'.PHP_EOL;
            }

            $newLangue .= '?>';

            $newLangueStatus = file_put_contents($pathLangue,$newLangue);

            if($newLangueStatus) {
                return true;
            } else {
                return false;
            }

        }else{
            return false;
        }

    }

    public static function tool_update_langue($langue,$keyLangue = array()){

        $pathLangue = APP_LANGUE_ROOT."/$langue.php";

        $updateLangue = '<?php
                        // '.$langue.' Language for '.APP_NAME.'
                        // Last update: '.date("d-m-Y H:i").'
                        $lang = array();
                        ';

        foreach($keyLangue as $key => $value) {
            $updateLangue .= '$lang["'.$key.'"] = "'.$value.'";';
        }

        $updateLangue .= '?>';

        if(toolsApp::tool_check_file($pathLangue)){
            $updateLangueStatus = file_put_contents($pathLangue,$updateLangue);

            if($updateLangueStatus) {
                return true;
            } else {
                return false;
            }
        }else{
            return false;
        }

    }

    public static function tool_delete_lang($langue){
        $pathLangue = APP_LANGUE_ROOT."/$langue.php";

        if(toolsApp::tool_check_file($pathLangue)){
            @unlink($pathLangue);
        }else{
            return false;
        }

    }
   
}




