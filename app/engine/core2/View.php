<?php

namespace core;

class View
{
    private $data = [];
    private static $instance;

    private function __construct() {}

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $cl = __CLASS__;
            self::$instance = new $cl;
        }

        return self::$instance;
    }

    public function __set($k,$v)
    {
        $this->data[$k] = $v;
    }

    public function render($view = '',$viewData = [],$show = false)
    {
         foreach ($this->data as $key => $value) {

         	$$key = $value;
         }

         count($viewData);
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
        if ($show) {
            echo $content;
        }else{
            return $content;
        }

    }

}