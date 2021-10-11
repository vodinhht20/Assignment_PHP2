<?php
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController {
    public function index() {
        $title = "Sản Phẩm";
        $products = Product::all();
        $this->render('product.index',compact('title','products'));
    }
    public function detail($id) {
        $title = "Sản Phẩm ".$id;
        $this->render('product.detail',compact('title'));
    }

} 
?>