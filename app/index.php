<?
//Z2hwX3pid1V4UGoxTWFjeWVramVHaHloRkVOTUdvQnU2ejRRR1pEdQ==
include_once 'init.php';

use components\Catalog;
use controllers\templates\TemplateBlog;

$temp = new TemplateBlog('blog');

$temp->view = new Catalog();
$temp->show();