<?php
namespace core;

abstract class  Component
{
    protected static $variableName;

    public function render($comp,$data = [])
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }

        ob_start();
        $path = $_SERVER['DOCUMENT_ROOT'].'/templates/blog/components/'.$comp.'/template.php';
        if (file_exists($path)) {
            include $path;
        }else{
            echo "404";
        }

        $content = ob_get_contents();

        ob_clean();
        echo $content;
    }

    public function getVariableTemplate()
    {
        $function = new \ReflectionClass(static::$variableName);
        return $function->getShortName();
    }
}