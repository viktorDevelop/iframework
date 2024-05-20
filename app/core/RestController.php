<?php

namespace core;

use core\http\Request;

abstract class RestController{

    abstract function actionIndex();
    abstract function actionFind(Request $request);
    abstract function actionCreate(Request $request);
    abstract function actionUpdate(Request $request);
    abstract function actionDelete(Request $request);

    private  $view;
    public function __construct()
    {
        $this->view = \core\View::getInstance();

    }

    public function setData($varibleName,$data = [])
    {
        $this->view->$varibleName =  $this->view->render('blog/'.$varibleName,$data);;
    }

    public function show($tmp)
    {
        try {
            if (!isset($tmp)){
                throw new Exception('not inter template sites');
            }
            $this->view->render($tmp,[],true);

        }catch (\Exception $e)
        {
            echo $e->getMessage();
        }
    }
}