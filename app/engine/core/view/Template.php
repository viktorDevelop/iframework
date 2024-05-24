<?php
namespace engine\core\view;

use components\PostComponent;
use engine\core\components\Component;

class Template
{
    public static string $templateName;
    private \engine\core\view\View $view;
    public string $title;
    private Component $content;
    public function __construct($tmpName)
    {
        $this->view = \engine\core\view\View::getInstance($tmpName);
        self::$templateName =  $tmpName;
    }

    public function setView()
    {
       return $this->content;
    }

    public function setContent(Component $obj)
    {
        $this->content = $obj;
    }
    public function show()
    {
        $this->view->content = $this->content;
        $this->view->show();
    }
}

