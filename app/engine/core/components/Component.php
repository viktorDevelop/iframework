<?php
namespace engine\core\components;

use engine\core\view\Template;
use engine\core\view\View;

abstract class Component
{
    protected $view;

    public function __construct()
    {
        $this->view = View::getInstance(Template::$templateName);
    }

    abstract public function render();
}