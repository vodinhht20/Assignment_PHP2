<?php 
namespace Utils;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\Admin\ProductController as ProductControllerAmin;
use App\Controllers\Admin\TopicController;
use App\Controllers\Admin\UserController;
use App\Controllers\Admin\PostController;
use App\Controllers\Admin\TrashController;
use App\Controllers\LoginController;
use App\Controllers\SiginController;
use App\Controllers\NewController;
class Routing {
    public static function start ($url){
        $router = new RouteCollector();
        // fillter đăng nhập
        $router->filter('auth', function() {
            if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])) {
                header('location: '.BASE_URL.'login');
                die;
            }
        });
        $router->get('/', [HomeController::class, 'index']);
        $router->get('login', [LoginController::class, 'login']);
        $router->post('login', [LoginController::class, 'postLogin']);
        $router->get('signin', [SiginController::class, 'signin']);
        $router->post('signin', [SiginController::class, 'postSignin']);
        $router->get('logout', [SiginController::class, 'logout']);
        $router->get('san-pham', [ProductController::class, 'index']);
        $router->get('san-pham/{id}', [ProductController::class, 'detail']);
        $router->get('tin-tuc', [NewController::class, 'index']);
        $router->get('tin-tuc/bai-viet/{slug}', [NewController::class, 'post']);

        $router->group(['before'=>'auth'], function($router) {
            $router->get('admin/san-pham/create', [ProductControllerAmin::class, 'create']);
            $router->post('admin/san-pham/create', [ProductControllerAmin::class, 'insert']);
            $router->get('admin/san-pham/', [ProductControllerAmin::class, 'list']);
            $router->get('admin/san-pham/update/{id}', [ProductControllerAmin::class, 'edit']);
            $router->post('admin/san-pham/update/{id}', [ProductControllerAmin::class, 'update']);
            $router->get('admin/san-pham/delete/{id}', [ProductControllerAmin::class, 'delete']);
            $router->get('admin/chu-de/create', [TopicController::class, 'create']);
            $router->post('admin/chu-de/create', [TopicController::class, 'insert']);
            $router->get('admin/chu-de', [TopicController::class, 'index']);
            $router->post('admin/chu-de', [TopicController::class, 'updateStatus']);
            $router->get('admin/profile', [UserController::class, 'profile']);
            $router->post('admin/profile', [UserController::class, 'update']);
            $router->get('admin/security', [UserController::class, 'security']);
            $router->post('admin/security', [UserController::class, 'updateSecurity']);
            $router->get('admin/bai-viet', [PostController::class, 'index']);
            $router->get('admin/bai-viet/create', [PostController::class, 'create']);
            $router->post('admin/bai-viet/create', [PostController::class, 'insert']);
            $router->get('admin/bai-viet/delete/{id}', [PostController::class, 'delete']);
            $router->get('admin/bai-viet/edit/{id}', [PostController::class, 'edit']);
            $router->post('admin/bai-viet/edit/{id}', [PostController::class, 'update']);
            $router->get('admin/bai-viet/search', [PostController::class, 'search']);
            $router->get('admin/trash/bai-viet', [TrashController::class, 'posts']);
            $router->get('admin/trash/bai-viet/delete/{id}', [TrashController::class, 'delete']);
            $router->get('admin/trash/bai-viet/delete-all', [TrashController::class, 'deleteAll']);
            $router->get('admin/trash/bai-viet/restore/{id}', [TrashController::class, 'restore']);
            $router->get('admin/trash/bai-viet/restore-all', [TrashController::class, 'restoreAll']);

        });
        
        

        $dispatcher = new Dispatcher($router->getData());
        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
        echo $response;
    }
}
?>