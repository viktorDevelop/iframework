<?php
namespace components;
use core\Component;

class TopMenu extends Component
{
    protected static $variableName = __CLASS__;

    public function show()
    {
        parent::render('menu/menu.top',['arResult'=>[
            [
                'title'=>'home',
                'url'=>'/'
            ],
            [
                'title'=>'php',
                'url'=>'/php'
            ]
        ]]);
    }

}