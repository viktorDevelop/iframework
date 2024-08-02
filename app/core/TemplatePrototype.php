<?php
namespace core;

class TemplatePrototype
{
    protected $temlate_name;

    public function __construct($temlate_name)
    {
        $this->temlate_name = $temlate_name;
    }

    public function render($show = false)
    {

        foreach ($this->arComponents as $key => $value) {
            $$key = $value;
        }

        ob_start();
        $path = $_SERVER['DOCUMENT_ROOT'].'/templates/'.$this->temlate_name.'/template.php';
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
