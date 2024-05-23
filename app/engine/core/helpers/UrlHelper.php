<?
namespace engine\core\helpers;


trait UrlHelper {

	public function getUri()
	{
		return $_SERVER['REQUEST_URI'];
	}
    public function getRequestMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

}

