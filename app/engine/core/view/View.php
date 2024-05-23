<?php
namespace engine\core\view;

class View
{
    private $data = [];
    private static $instance;
    private static $templateName;

    private function __construct() {}

    public static function getInstance($templateName)
    {
        if (!isset(self::$instance)) {
            $cl = __CLASS__;
            self::$instance = new $cl;
        }
        self::$templateName = $templateName;
        return self::$instance;
    }

    public function __set($k,$v)
    {
        $this->data[$k] = $v;
    }

    public function render($view,$viewData = [])
    {


        foreach ($this->data as $key => $value) {

            $$key = $value;
        }

        if (!empty($viewData)){

            foreach ($viewData as $key_v => $value_v) {

                $$key_v = $value_v;
            }
        }
        ob_start();
        $path = $_SERVER['DOCUMENT_ROOT'].'/templates/'.$view.'/template.php';
        if (file_exists($path)) {
            include $path;
        }else{
            echo "404";
        }

        $content = ob_get_contents();
        ob_clean();
        return $content;
    }

    public function show()
    {

        echo $this->render(self::$templateName);
    }
}