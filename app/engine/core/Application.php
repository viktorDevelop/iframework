<?
namespace engine\core;
use engine\core\router\Router;

class Application    
{

	public function run()
	{	
    $router = new Router();

        $router->add('home','/',\controllers\PostController::class,'index');
        $router->add(
            'post',
            '/post/{int:id}/',
            \controllers\PostController::class,
            'show'
        );
//        $router->add(
//            'post',
//            '/post/{str:postTitle}/',
//            \controllers\PostController::class,
//            'show');
//        $router->add(
//            'post',
//            '/post/create',
//            \controllers\PostController::class,
//            'create'
//        );
//
//        $router->add(
//            'post',
//            '/post/store',
//            \controllers\PostController::class,
//            'store',
//            'POST'
//        );
//
//        $router->add(
//            'post',
//            '/post/edit',
//            \controllers\PostController::class,
//            'edit'
//        );
//
//        $router->add(
//            'post',
//            '/post/{int:id}/update',
//            \controllers\PostController::class,
//            'store',
//            'PATCH'
//        );

        $router->add(
            'post',
            '/post/{int:id}/destroy',
            \controllers\PostController::class,
            'destroy',

        );


		$router->dispatch();
//        $ar = [
//            'GET'=>'index',
//            'GET'=>'show',
//            'GET'=>'create',
//            'GET'=>'edit',
//            'POST'=>'store',
//            'PATCH'=>'update',
//            'DELETE'=>'destroy',
//        ];
	}


}