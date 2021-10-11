<?php
namespace App\Controllers;
use App\Models\User;
class LoginController extends BaseController {
    public function login() {
        $this->render('auth.login',[]);
    }
    public function postLogin() {
        $email = $_POST['email'];
        $password = trim($_POST['password']);
        $user = User::where('email',$email)->first();
        if ($user && password_verify($password,$user->password)) {
            $_SESSION['auth'] = [
                'id' =>  $user->id,
                'email' =>  $user->email,
                'name' =>  $user->name,
                'avatar' =>  $user->avatar
            ];
            header('location: '.BASE_URL);
            die;
        }
        $msg = "<p class='text-danger'>Tài khoản/ mật khẩu không chính xác</p>";
        $this->render('auth.login',compact('msg'));
    }
    
} 
?>