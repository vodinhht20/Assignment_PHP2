<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\User;
class UserController extends BaseController {
    public function profile() {
        $user = User::find($_SESSION['auth']['id']);
        $this->render('admin.user.profile',compact('user'));
    }
    public function update() {
        $model = User::find($_POST['id']);
        $model -> fill($_POST);
        if ($_FILES['avatar']['size'] > 1) {
            $fileName = PostController::upFile("avatar", "./public/image/");
            $model->avatar = $fileName;
            $_SESSION['auth']['avatar'] = $fileName;
        } else {
            $model->avatar = $model->avatar;
            $_SESSION['auth']['avatar'] = $model->avatar;
        }
        $_SESSION['auth']['name'] = isset($_POST['name']) ? $_POST['name'] : $model->name;
        $_SESSION['auth']['email'] = isset($_POST['email']) ? $_POST['email'] : $model->email;
        $model -> save();
        header("location: ".BASE_URL."admin/profile");
    }
    public function security(){
        $this->render('admin.user.security',[]);
    }
    public function updateSecurity(){
        $user = User::where('id',$_SESSION['auth']['id'])->first();
        if ( password_verify($_POST['passwordOld'],$user->password)) {
            $model= User::find($user->id);
            $model->password = password_hash($_POST['passwordNew'], PASSWORD_DEFAULT);
            $model ->save();
            $msg = '<p class="text-success">Đã thay đổi mật khẩu !</p>';
            $this->render('admin.user.security',compact('msg'));
        } else {
            $msg = '<p class="text-danger">Mật khẩu sai vui lòng nhập lại !</p>';
            $this->render('admin.user.security',compact('msg'));
        }
    }
}

?>