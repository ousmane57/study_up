<?php 


class toolsAlert{

    public static function alert_primary($text) {
        return '<div class="alert alert-primary"><i class="fa fa-check"></i> '.$text.'</div>';
    }
    
    public static function alert_secondary($text) {
        return '<div class="alert alert-secondary alert-dismissible"><i class="fa fa-times"></i> '.$text.'</div>';
    }

    public static function alert_success($text) {
        return '<div class="alert alert-success"><i class="fa fa-check"></i> '.$text.'</div>';
    }
    
    public static function alert_error($text) {
        return '<div class="alert alert-danger"><i class="fa fa-times"></i> '.$text.'</div>';
    }
    
    public static function alert_info($text) {
        return '<div class="alert alert-info"><i class="fa fa-info-circle"></i> '.$text.'</div>';
    }

    public static function alert_warning($text) {
        return '<div class="alert alert-warning"><i class="fa fa-info-circle"></i> '.$text.'</div>';
    }
    
}




