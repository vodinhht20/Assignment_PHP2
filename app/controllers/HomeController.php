<?php
namespace App\Controllers;
use App\Models\Product;
// use BaseModel;
class HomeController extends BaseController{
    public function index() {
        $product_hosts = Product::orderBy('created_at','desc')
                                ->limit(10)
                                ->get();
        $product_meats = Product::where('category_id',1)
                                ->limit(10)
                                ->get();
        $product_vegetables = Product::where('category_id',2)
                                ->limit(10)
                                ->get();
        $product_eggs = Product::where('category_id',3)
                                ->limit(10)
                                ->get();
        $title = "Sản Phẩm";
        $this->render('home.index',compact('title','product_hosts','product_meats','product_vegetables','product_eggs'));
    }
}
?>