<?php
namespace App\Controllers;
use Jenssegers\Blade\Blade;
class BaseController {
    protected function render ($viewPath,$data = []) {
        $blade = new Blade('./app/views','storage');
        echo $blade->make($viewPath,$data)->render();
    }
    
    // để tạm
   public static function upFile($name,$url) {
        if ($_FILES[$name]['size'] > 1) {
            $nameIMG = $_FILES[$name]['name'];
            $tmp_name = $_FILES[$name]['tmp_name'];
            move_uploaded_file($tmp_name, $url. $nameIMG);
            return $nameIMG;
        } else {
            return '';
        }
    }
}
?>