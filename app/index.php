<?
//Z2hwX3pid1V4UGoxTWFjeWVramVHaHloRkVOTUdvQnU2ejRRR1pEdQ==
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