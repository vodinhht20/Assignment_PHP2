<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Topic;

class TopicController extends BaseController {
    public function index() {
        $topics = Topic::all();
        $this->render('admin.topic.index',compact('topics'));
    }
    public function updateStatus() {
        $model = Topic::find($_POST['id']);
        $model -> status = $_POST['status'];
        $model -> save();
        return response()->json($model);
    }
    public function create() {
        $author = $_SESSION['auth']['name'];
        $this->render('admin.topic.create',compact('author'));
    }
    public function insert() {
        $model = new Topic;
        $model -> fill($_POST);
        $model -> owner_by = $_SESSION['auth']['id'];
        $model -> save();
        header("location: ".BASE_URL."admin/chu-de");
    }
    
}

?>