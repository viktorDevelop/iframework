<?
namespace engine\core;
use engine\core\router\Router;

class Application    
{
	
	
	public function run()
	{	
		$router = new Router();

//		$router->add('home','/','PostController@index');
//      $router->add('post','/article/{str:id}/','PostController@index');
        $router->add('post','/post/{int:postId}/update/','PostController@formUpdate');
        $router->add('post','/user/{str:name}/{any:profile}/{int:id}/','PostController@index');
//		$router->add('post_cat','/post/{int:cat_id}/{int:post_id}','PostController@add','POST');

		$router->dispatch();
		
	}
}