<?php

namespace components;
use core\Component;

class Catalog extends Component
{
    protected static $variableName = __CLASS__;

    public function show($k = '')
    {
        parent::render('news/news.list');
    }

}