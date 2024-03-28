<?php
namespace controllers;

use core\http\Request;
use core\RestController;

class MainController extends RestController {


    function actionIndex()
    {
        $this->setData('content',[ 'arResult'=> ['id'=>'tt']]);
        $this->show('blog');
    }

    function actionFind(Request $request)
    {

    }


    function actionCreate(Request $request)
    {
        // TODO: Implement actionCreate() method.
    }

    function actionUpdate(Request $request)
    {
        // TODO: Implement actionUpdate() method.
    }

    function actionDelete(Request $request)
    {
        // TODO: Implement actionDelete() method.
    }
}