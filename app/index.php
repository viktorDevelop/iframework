<?
//Z2hwX29taWR1aENub3dGOHcyUHA3TFJrbUYybkxBREZzWjJheFpPQg
include_once 'init.php';

use components\Catalog;
use controllers\templates\TemplateBlog;
use core\Router;
$temp = new TemplateBlog('blog');

$temp->view = new Catalog();
$temp->setTitle('catalog');
$temp->show();



//Router::get('/');
//Router::get('/category');
//Router::get('/category/:alias');
//Router::get('/category/:alias/post/:alias');
//Router::get('/');

//$url = '/category/php/php-post1';
$url = $_SERVER['REQUEST_URI'];
echo $url;

$ar = [

    '/(?P<controller>category)/(?P<cat>[a-z]+)/(?P<post>[a-z]+)/?(.*)',
    '/(?P<controller>category)/(?P<cat>[a-z]+)/?(.*)',
    '/(?P<controller>category)/?(.*)',

    '/(?P<controller>post)/(?P<cat>[a-z]+)/(?P<post>[a-z]+)/?(.*)',
    '/(?P<controller>post)/(?P<cat>[a-z]+)/?(.*)',
    '/(?P<controller>post)/?(.*)',
];




foreach ($ar as $k=>$value)
{
    $r = preg_match_all("~".$value."~",$url,$match);
    if ($r){
        break;
    }
}
echo '<pre>';
print_r($match);