<?php 


class toolsViews{

    public static function tool_get_view($view, $data = []) {

        $view_path  = sprintf(APP_WEB_FOLDER."%s.php",$view);
        $view_path  = toolsApp::tool_get_full_path($view_path);
        $view_data  = "";

        if (file_exists($view_path) != true) {
            die("File does not exists: $view_path");
        } 
        
        ob_start();
            require($view_path);
            $view_data = ob_get_contents();
        ob_end_clean();

        return $view_data;
        
    }
   
}




