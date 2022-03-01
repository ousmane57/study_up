<?php 

class toolsApp{

/** Path */

    /**
     * @param string $path
     * @return string
     */
    public static function tool_get_full_path($path = "") {
        if (empty($path) != true && is_string($path)) {
            return (APP_FOLDER . "/" . $path);
        }
        else {
            return APP_FOLDER;
        }
    }

/* Text */

    /**
     * @param $var
     * @param $default
     * @return mixed
     */
    public static function tool_get_variable($var,$default){
        
        if(toolsApp::tool_check_variable($var)){
            return $var;
        }else{
            return $default;
        }
        
    }

    public static function tool_check_variable($var = ""){

        if (isset($var) && !empty($var)) {
            return true;
        }else{
            return false;
        }

    }

    public static function tool_check_number($var = ""){

        if (is_numeric($var)) {
            return true;
        }else{
            return false;
        }

    }

    public static function tool_secure_text($var = ""){

        $text_secure = "";

        if (toolsApp::tool_check_variable($var)) {
            $text_secure = htmlspecialchars($var);
        }

        return $text_secure;

    }

    public static function tool_utf8_text($var = ""){

        $text_secure = "";

        if (toolsApp::tool_check_variable($var)) {
            $text_secure = utf8_encode($var);
        }

        return $text_secure;

    }

    public static function tool_replace_char($out, $in, $var = ""){

        $return_text = "";

        if (toolsApp::tool_check_variable($var)) {
            $return_text = str_replace(".$out.", ".$in.", $var);
        }

        return $return_text;

    }

    public static function tool_decode_text($var = ""){

        $text_secure = "";

        if (toolsApp::tool_check_variable($var)) {
            $text_secure = base64_decode($var);
        }

        return $text_secure;

    }

    public static function tool_format_number($var){
        if (toolsApp::tool_check_variable($var) && toolsApp::tool_check_number($var)) {
            return number_format($var, 0, ",", " ");
        }else {
            return $var;
        }
    }

    public static function tool_text_limit($var,$default = "100"){
        return substr($var,0,$default);
    }

    public static function tool_generate_text($minlength = 20, $maxlength = 20, $uselower = true, $useupper = true, $usenumbers = true, $usespecial = false) {
        
        $charset = '';

        if ($uselower) {
            $charset .= "abcdefghijklmnopqrstuvwxyz";
        }
        if ($useupper) {
            $charset .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        }
        if ($usenumbers) {
            $charset .= "1234567890";
        }
        if ($usespecial) {
            $charset .= "~@#$%^*()_+-={}|][";
        }

        if ($minlength > $maxlength) {
            $length = mt_rand($maxlength, $minlength);
        } else {
            $length = mt_rand($minlength, $maxlength);
        }

        $key = '';

        for ($i = 0; $i < $length; $i++) {
            $key .= $charset[(mt_rand(0, mb_strlen($charset) - 1))];
        }
        
        return $key;
    }

    public static function tool_check_selected($var1, $var2){

        if(toolsApp::tool_check_var($var1,$var2)){
            echo "selected";
        }
    }

    public static function tool_check_radio($var1, $var2){
        
        if(toolsApp::tool_check_var($var1,$var2)){
            echo "checked";
        }
    }

    public static function tool_get_montant($montant){
        return toolsApp::tool_format_number($montant)." FCFA";
    }

/* Text */

/* Date */

    public static function tool_date($var){
        return date("j-m-Y",strtotime($var));
    }

    public static function tool_date_format($var,$format){
        if(is_int($var)){
            return date($format,$var);
        }else{
            return date($format,strtotime($var));
        }
    }

    public static function tool_timestamp($var){
        return date("j-m-Y",$var);
    }

    public static function tool_timestamp_format($var,$format){
        return date($format,$var);
    }

/* Date */

/* Get & Post */
    public static function tool_check_post($var){
        if(toolsApp::tool_check_variable($_POST[$var])){
            return true;
        }else {
            return false;
        }
    }
    
    public static function tool_check_get($var){
        if(toolsApp::tool_check_variable($_GET[$var])){
            return true;
        }else {
            return false;
        }
    }

    public static function tool_check_form_file($file){

        switch ($_FILES[$file]['error']) {
            case UPLOAD_ERR_OK:
                return true;
                break;
            case UPLOAD_ERR_NO_FILE:
                return false;
            case UPLOAD_ERR_INI_SIZE:
                return false;
            case UPLOAD_ERR_FORM_SIZE:
                return false;
            default:
                return false;
        }
    }

    public static function tool_get_post($var){
        if(toolsApp::tool_check_variable($_POST[$var])){
            return toolsApp::tool_secure_text($_POST[$var]);
        }else {
            return false;
        }
    }

    public static function tool_get_get($var){
        if(toolsApp::tool_check_variable($_GET[$var])){
            return toolsApp::tool_secure_text($_GET[$var]);
        }else {
            return false;
        }
    }

    public static function tool_get_form_file($file){
        if(toolsApp::tool_check_variable($_FILES[$file])){
            return $_FILES[$file];
        }else {
            return false;
        }
    }
/* Get & Post */

/* Session */

    public static function tool_check_session($var = ""){

        if (isset($_SESSION[$var]) && !empty($_SESSION[$var])) {
            return true;
        }else{
            return false;
        }

    }

    public static function tool_session($session, $value=""){

        if (toolsApp::tool_check_variable($value)) {
            $_SESSION[$session] = $value;
        }else {
            $_SESSION[$session] = "";
        }
    }

    public static function tool_get_session($session){
        if (toolsApp::tool_check_session($session)) {
            return $_SESSION[$session];
        }else {
            return "null";
        }
    }

    public static function tool_get_value_session($session, $var){

        if (toolsApp::tool_check_variable($var)) {
            if (toolsApp::tool_check_session($session)) {
                return $_SESSION[$session][$var];
            } else {
                return "null";
            }
        }
    }

    public static function tool_session_delete($session){

        if (toolsApp::tool_check_session($session)) {
            unset($_SESSION[$session]);
        }
    }

/* Session */

/* Page */

    public static function tool_redirect($link = "/"){
        Header("Location:".$link);
    }

    public static function tool_redirect_back(){

        if (toolsApp::tool_check_variable($_SERVER['HTTP_REFERER'])) {
            Header("Location:".$_SERVER['HTTP_REFERER']);
        }else {
            Header("Location:/");
        }

    }

    public static function tool_get_back_url(){
        if (toolsApp::tool_check_variable($_SERVER['HTTP_REFERER'])) {
            return $_SERVER['HTTP_REFERER'];
        }else {
            return "";
        }
    }

    public static function tool_get_url(){
        if (toolsApp::tool_check_variable($_SERVER['SCRIPT_NAME'])) {
            return $_SERVER['SCRIPT_NAME'];
        }else {
            return "";
        }
    }


    

/* Page */

/* Tableau */
    public static function tool_check_tableau($var = array()){

        if (!empty($var) && is_array($var)) {
            return true;
        }else {
            return false;
        }

    }

    public static function tool_exist_in_tableau($var, $tab){

        if (!empty($var) && in_array($var, $tab)) {
            return true;
        }else {
            return false;
        }

    }

    public static function tool_array_push($tab, $var){

        if (!empty($var)) {
            array_push($tab, $var);
        }else {
            return false;
        }

    }

    public static function tool_check_var($var , $vardefault ){

        if ($var==$vardefault) {
            return true;
        }else {
            return false;
        }

    }
/* Tableau */

/* File */

    public static function tool_check_file($file){

        if (file_exists($file)) {
            return true;
        }else {
            return false;
        }

    }

    public static function tool_get_file($file = "",$data = []) {
    
        $path  = sprintf("%s.php",$file);
        $cont  = "";
    
        if (file_exists($path) != true) {
            die("Ce fichier n'existe pas : $path");
        } 
        
        ob_start();
            require($path);
            $cont = ob_get_contents();
        ob_end_clean();
    
        $cont = preg_replace_callback("/\{\%data\s{1}([a-z0-9_]{1,32})\%\}/", function($var) use ($data){
            return (isset($data[$var[1]]) ? $data[$var[1]] : "");
        }, $cont);
    
        return $cont;
    }
/* File */


}

?>
