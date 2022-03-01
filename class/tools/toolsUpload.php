<?php 


class toolsUpload{

    protected static $upload_mimes_allowed = array('image/png',
                                            'image/jpeg',
                                            'image/jpg',
                                            'application/pdf');
    
    protected static $upload_extensions_allowed = array('png',
                                                 'jpeg',
                                                 'jpg',
                                                 'pdf');

    protected static $upload_size_allowed = 10000000;
    protected static $upload_message = "upload";
    
    public static function tool_upload_file($file, $file_folder, $file_slug) {
    
        $result         = array();

        if (empty($file)) {

            $result["message"] = "false";

        }else{

            $file_name         = $file['name'];
            $file_tmp_name     = $file['tmp_name'];
            $file_type         = $file['type'];
            $file_size         = $file['size'];
            $file_extension    = pathinfo($file_name, PATHINFO_EXTENSION);
            $file_extension    = strtolower($file_extension);
            
            if (in_array($file_type, toolsUpload::$upload_mimes_allowed) != true) {

                $result["status"] = "false_format";

            }elseif(in_array($file_extension, toolsUpload::$upload_extensions_allowed) != true){
                
                $result["status"] = "false_extensions";

            }elseif($file_size > toolsUpload::$upload_size_allowed){
                
                $result["status"] = "false_size";

            }else{

               $filename = toolsUpload::tool_generate_path($file_folder,$file_extension,$file_type,$file_slug);
        
                if (move_uploaded_file($file_tmp_name, $filename["folder"])) {
                    
                    $result["status"]  = "true";
                    $result["file"]    = $filename["file"];
            
                }else{
                    $result["message"] = "false";
                }

            }

        }

        return $result;
    
    }

    public static function tool_generate_path($file_folder, $file_extension, $file_type, $file_slug) {

        $result = array();

        $folder = sprintf(APP_UPLOAD_FOLDER."/%s/%s/%s/%s/%s",$file_folder , date('Y'), date('m'), date('d'), $file_type);
        $file   = sprintf("/%s/%s/%s/%s/%s",$file_folder , date('Y'), date('m'), date('d'), $file_type);

        if (toolsApp::tool_check_file($folder) != true) {
            @mkdir($folder, 0777, true);
        }

        $result["folder"]  = sprintf("%s/%s_%s.%s", $folder, $file_slug , md5(time()),$file_extension);
        $result["file"]  = sprintf("%s/%s_%s.%s", $file, $file_slug , md5(time()),$file_extension);
    
        return $result;
    }
   
}




