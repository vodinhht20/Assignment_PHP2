<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Support\Facades\Request;

class PostController extends BaseController {
    public function index() {
        $posts = Post::where('deleted_at','!=','true') ->get();
        $trash = Post::where('deleted_at','=','true') ->get();
        $this->render('admin.post.index',compact('posts','trash'));
    }
    public function create() {
        $topics = Topic::where('status','!=',2)->get();
        $author = $_SESSION['auth']['name'];
        $this->render('admin.post.create',compact('topics','author'));
    }
    public function insert() {
        $flight = new Post;
        $flight -> fill($_POST);
        $flight->thumbnail_img = PostController::upFile("thumbnail_img", "./public/image/");
        $flight -> author_id = $_SESSION['auth']['id'];
        $flight->slug    = create_slug($_POST['title']);
        $flight -> save();
        header("location: ".BASE_URL."admin/bai-viet");
    }
    public function delete($id) {
        $flight  = Post::find($id);
        $flight -> deleted_at = 'true';
        $flight -> save();
        header("location: ".BASE_URL."admin/bai-viet");
    }
    public function edit($id) {
        $post = Post::find($id);
        $topics = Topic::where('status','!=',2)->get();
        $this->render('admin.post.update',compact('post','topics'));
    }
    public function update($id) {
            $flight  = Post::find($id);
            $flight -> fill($_POST);
            if ($_FILES['thumbnail_img']['size'] > 1) {
                $flight->thumbnail_img = PostController::upFile("thumbnail_img", "./public/image/");
            } else {
                $flight->thumbnail_img = $flight->thumbnail_img;
            }
            $flight->slug    = create_slug($_POST['title']);
            $flight->save();
            header("location: ".BASE_URL."admin/bai-viet");
    }
    public function search(Request $request) {
      
        $output = 'hello';
        echo $output;
    }

}

?>