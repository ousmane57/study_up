<?php 


class toolsBadge{

    public static function badge_primary($text) {
        return '<div class="badge badge-pill badge-primary"><i class="fa fa-check"></i> '.$text.'</div>';
    }
    
    public static function badge_secondary($text) {
        return '<div class="badge badge-pill badge-danger"><i class="fa fa-times"></i> '.$text.'</div>';
    }

    public static function badge_success($text) {
        return '<div class="badge badge-pill badge-success"><i class="fa fa-check"></i> '.$text.'</div>';
    }
    
    public static function badge_error($text) {
        return '<div class="badge badge-pill badge-danger"><i class="fa fa-times"></i> '.$text.'</div>';
    }
    
    public static function badge_info($text) {
        return '<div class="badge badge-pill badge-info"><i class="fa fa-info-circle"></i> '.$text.'</div>';
    }

    public static function badge_warning($text) {
        return '<div class="badge badge-pill badge-warning"><i class="fa fa-info-circle"></i> '.$text.'</div>';
    }
   
}




