<?php

use core\http\Request;

include 'init.php';
//$db = \core\Database::getInstance();
//$pdo = new \PDO('mysql:dbname=myDb;host=db','user','test');
function dump($data = []){
        echo "<pre>";
        print_r($data);
    }

//$view = \core\View::getInstance();

//$view->component = $view->render('blog/users',['arResult'=>['title'=>'test']]);
//$view->render('blog',[],true);


class Template{
    private  $view;
    public function __construct()
    {
        $this->view = \core\View::getInstance();
    }

    public function setData($varibleName,$data = [])
    {
        $this->view->$varibleName =  $this->view->render('blog/'.$varibleName,$data);;
    }

    public function show()
    {
        $this->view->render('blog',[],true);
    }

}








