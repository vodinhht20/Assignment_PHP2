<?php
namespace App\Controllers;
use App\Models\Post;
class NewController extends BaseController {
    public function index() {
        $title = "Tin Tức";
        $postNewPrimary = Post::orderBy('created_at','desc')
                        ->first();
        $postListNews = Post::where('id','!=',$postNewPrimary->id)
                        ->orderBy('created_at','desc')
                        ->limit(3)
                        ->get();
        
        $postTopicVegetable = Post::where('topic_id','=',8)
                                    ->orderBy('created_at','desc')
                                    ->limit(4)
                                    ->get();
        $postTopicTips = Post::where('topic_id','=',9)
                        ->orderBy('created_at','desc')
                        ->limit(4)
                        ->get();        
        $this->render('new.index',compact('postNewPrimary','postListNews','postTopicVegetable','postTopicTips'));
        // echo 'helllo';
    }
    public function post($slug) {
        $post = Post::where('slug',$slug)->first();
        $similarNews = Post::where('topic_id','=',$post->topic_id)
                        ->where('id','!=',$post->id)
                        ->orderBy('created_at','desc')
                        ->limit(4)
                        ->get();
        $this->render('new.post',compact('post','similarNews'));
    }
}
?>