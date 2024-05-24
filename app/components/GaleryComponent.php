<?php
namespace components;

use engine\core\components\Component;
use engine\core\view\View;

class GaleryComponent extends Component
{
    public function render()
    {
        echo $this->view->render('blog/galery',[
            'arResult'=>['arResult galery'],
        ]);

    }
}