<?php
namespace App\Controllers;
use App\Models\User;
class SiginController extends BaseController {
    public function signin() {
        $this->render('auth.sigin',[]);
    }
    public function postSignin() {
        $model = new User();
        $model->email = $_POST['email'];
        $model->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $model->avatar = 'avatar_empty.jfif';
        $model->name = $_POST['fullname'];
        $model->save();
        $msg = '<p class="text-success">Bạn đã đăng ký tài khoản thành công !</p>';
        $this->render('auth.sigin',compact('msg'));
        die;
    }
    public function logout() {
        unset($_SESSION['auth']);
        header('location: '.BASE_URL.'login');
        die;
    }
    

} 
?>