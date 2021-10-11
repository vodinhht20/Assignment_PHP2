<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Post;

class TrashController extends BaseController {
    public function posts(){
        $posts = Post::where('deleted_at','!=','false') ->get();
        $this->render('admin.trash.post',compact('posts'));
    }
    public function delete($id){
       Post::destroy($id);
       header("location: ".BASE_URL."admin/trash/bai-viet");
    }
    public function deleteAll(){
        Post::where('deleted_at', '=' ,'true')
                        -> delete();
        header("location: ".BASE_URL."admin/trash/bai-viet");
     }
    public function restore($id) {
        $flight  = Post::find($id);
        $flight -> deleted_at = 'false';
        $flight -> save();
        header("location: ".BASE_URL."admin/trash/bai-viet");
    }
    public function restoreAll() {
        Post::where('deleted_at', '=' ,'true')
                -> update(['deleted_at' => 'false']);
        header("location: ".BASE_URL."admin/trash/bai-viet");
    }
    
}

?>