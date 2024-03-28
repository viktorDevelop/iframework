<?php

namespace controllers;

use core\http\Request;
use core\http\Response;
use core\RestController;

class CategoryController extends RestController {

    function actionIndex()
    {
         echo "SELECT * FROM Category ORDER BY id DESC ";
    }

    function actionFind(Request $request)
    {
         print_r($request->getParams());
        echo 'CategoryController find';
    }

    function actionCreate(Request $request)
    {
        print_r($request->post());
    }

    public function actionUpdate(Request $request)
    {
        // TODO: Implement actionUpdate() method.
    }

    function actionDelete(Request $request)
    {
        // TODO: Implement actionDelete() method.
    }


}
