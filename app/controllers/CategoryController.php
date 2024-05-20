<?php

namespace controllers;

use core\Database;
use core\http\Request;
use core\http\Response;
use core\RestController;

class CategoryController extends RestController {

    function actionIndex()
    {
        $this->setData('user',['arResult'=>['id'=>'4']]);
        $this->setData('users',['arResult'=>['id'=>'25']]);

        $this->show('blog');
    }

    function actionFind(Request $request)
    {
        print_r($request->getParams());
//        $post = new Post();
//        $post->setCategory($request->getParams('category_title'));
//        $post->setPost($request->getParams('post'));

//        echo 'CategoryController find';
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
