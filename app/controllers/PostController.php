<?php
namespace controllers;

use components\PostComponent;
use engine\core\controller\FrontController;
use engine\core\request\Request;
use engine\core\view\View;

class PostController extends FrontController
{
    protected static $templateName = 'admin';

    public function index(Request $request)
    {
        $post = new PostComponent();

        $this->template->setContent($post);
        $this->template->show();
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
