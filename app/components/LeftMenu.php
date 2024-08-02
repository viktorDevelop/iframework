<?php
namespace components;
use core\Component;

class LeftMenu extends Component
{
    protected static $variableName = __CLASS__;
    public function show($k = '')
    {
        $data =
            ['arResult'=>
                    [
                        [
                            'title'=>'vue',
                            'url'=>'/'
                        ],
                        [
                            'title'=>'bitrix',
                            'url'=>'/php'
                        ]
                 ]
            ];
        parent::render('menu/aside.menu',$data);
    }
}