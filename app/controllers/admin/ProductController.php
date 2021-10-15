<?php
namespace App\Controllers\Admin;
use App\Models\Product;
use App\Models\Category;
use App\Controllers\BaseController;
class ProductController extends BaseController {
    public function create() {
        $title = "Thêm Sản Phẩm";
        $categories = Category::all();
        $this->render('admin.product.create',compact('title','categories'));
    }
    public function insert() {
        $flight             = new Product;
        $flight -> fill($_POST);
        $flight->image     = ProductController::upFile("image", "./public/image/");
        $flight->slug    = create_slug($_POST['name']);
        $flight->save();
        header("location: ".BASE_URL."admin/san-pham");
    }
    public function list() {
        $title = "Quản Trị Sản Phẩm";
        $products = Product::all();
        $this->render('admin.product.index',compact('title','products'));

    }
    public function edit($id) {
        $title = "Sửa Trị Sản Phẩm";
        $product = Product::find($id);
        $categories = Category::all();
        $this->render('admin.product.update',compact('title','product','categories'));

    }
    public function delete($id) {
            Product::destroy($id);
            header("location: ".BASE_URL."admin/san-pham");
    }
    public function update($id) {
        $flight  = Product::find($id);
        $flight -> fill($_POST);
        if ($_FILES['image']['size'] > 1) {
            $flight->image = ProductController::upFile("image", "./public/image/");
        } else {
            $flight->image = $flight ->image;
        }
        $flight->slug = create_slug($_POST['name']);
        $flight->save();
        header("location: ".BASE_URL."admin/san-pham");
    }
} 
?>