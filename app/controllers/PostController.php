<?php
namespace controllers;

use engine\core\controller\FrontController;
use engine\core\request\Request;

class PostController extends FrontController
{
    public function index(Request $request)
    {
        // TODO: Implement index() method.
        var_dump([
            'params'=>$request->get()
        ]);
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
