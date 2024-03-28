<?php
namespace controllers;

class UserController extends \core\RestController
{

    public function actionIndex()
    {
        $this->setData('users',['arResult'=>['id'=>1,'title'=>'test'],['id'=>2,'title'=>'test2']]);

        $this->show();
    }


    public function actionFind($request)
    {
        $this->setData('user',['arResult'=>['id'=>2,'title'=>'test']]);

        $this->show('blog');
    }

    function actionCreate($request)
    {
        // TODO: Implement actionCreate() method.
    }

    function actionUpdate($request)
    {
        // TODO: Implement actionUpdate() method.
    }

    function actionDelete($request)
    {
        // TODO: Implement actionDelete() method.
    }
}
