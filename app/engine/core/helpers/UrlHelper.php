<?
namespace engine\core\helpers;


trait UrlHelper {

	public function getUri()
	{
		return $_SERVER['REQUEST_URI'];
	}

}

