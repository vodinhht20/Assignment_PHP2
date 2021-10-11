<?php
namespace App\Controllers;

// use BaseModel;
class HomeController extends BaseController{
    public function index() {
        $title = "Sản Phẩm";
        $this->render('home.index',compact('title'));
    }
} 
?>