<?php
namespace components;

use engine\core\components\Component;
use engine\core\view\Template;
use engine\core\view\View;

class PostComponent extends Component
{
    public function getFieldValue($field)
    {
        echo 'title';
    }

    public function render()
    {
        echo $this->view->render('blog/posts',[
            'arResult'=>['test'],
            'component'=>$this
        ]);
    }



    public function showGalery($show = false)
    {
        return (new GaleryComponent())->render();
    }



}