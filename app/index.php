<?php

/**
 * 
 */
class Views   
{
    
    private $data = [];
    private static $instance;

    private $templateName;

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


    public function render()
    {
        $arg = func_get_args();
        // print_r($arg);

         foreach ($this->data as $key => $value) {

            $$key = $value;
         }
         // include  $path = $_SERVER['DOCUMENT_ROOT'].'/templates/'.$this->templateName.'/template.php';

        ob_start();

           $path = $_SERVER['DOCUMENT_ROOT'].'/templates/'.$this->templateName.'/template.php';
            if (file_exists($path)) {
                include $path;
            }else{
                echo "404";
            }

             $content = ob_get_contents();

        ob_clean();

        return $content;
    }

    public function setTemplate($tmp)
    {
       $this->templateName = $tmp;
    }

    public function setComponent($c_name)
    {
        $path = $_SERVER['DOCUMENT_ROOT'].'/templates/'.$this->templateName.'/'.$c_name.'/template.php';
        return $path;
    }
}





class Template   
{
    
   

    public function setView($value)
    {
        return $this;
    }

    public function setData($value='')
    {
        return $this;
    }

    public function show($tmp)
    {
        // $view = Views::getInstance();

        // $view->title = 'test title post';
        // $view->setTemplate($tmp);
        // $view->setComponent('users');

        // $view->var = $view->render('user');
        // echo $view->render();
    }
}




class FrontController  
{
    protected $template;


    function __construct()
    {   
        $this->template = new Template();    
    }
}


class PostController extends FrontController
{
    

    public function actionIndex()
    {
        $data = [
            'post'=>[
                'title'=>'test post title'
            ]
        ];
       $this->template->setView('users')->setData('usersList',$data)->show('blog');
    }
}

// (new PostController())->actionIndex();


        $view = Views::getInstance();

        $view->title = 'test title post';
        // $view->setComponent('users');
         
        $view->setComponent('posts');
        $view->setTemplate('blog');

       
        

        echo $view->render();