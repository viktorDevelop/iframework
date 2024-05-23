<?php
namespace controllers;

use engine\core\controller\FrontController;
use engine\core\request\Request;
use engine\core\view\View;

class PostController extends FrontController
{
    protected static $templateName = 'blog';

    public function index(Request $request)
    {
//        $view = View::getInstance();
//        $view->title = 'index home';
//        $galery =  $view->render('blog/galery',['arResult'=>['title galery'=>'test']]);
//        $view->posts = $view->render('blog/posts',['galery'=>$galery]);
//       echo $view->render('blog');

//        $post = new PostComponent();
        $this->template->title = 'home index';
//
//        $galery = new GaleryComponent();
//        $post->setGalery('blog.galery',$galery);
//        $this->template->setData('blog.post',$post);
        $this->template->show();
//       $this->template->title = Post::getField()->title();
    }

    private function template()
    {

    }


    public function show(Request $request)
    {
        // TODO: Implement show() method.
        echo '<pre>';
        var_dump([
            'params'=>$request->get()
        ]);
    }

    public function create(Request $request)
    {
        // TODO: Implement create() method.
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
    }

    public function edit(Request $request)
    {
        // TODO: Implement edit() method.
    }

    public function update(Request $request)
    {
        // TODO: Implement update() method.
    }

    public function destroy(Request $request)
    {
        // TODO: Implement destroy() method.

        echo '<pre>';
        var_dump([
            'params'=>$request->get()
        ]);
    }
}
