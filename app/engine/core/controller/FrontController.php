<?php
namespace engine\core\controller;

use engine\core\request\Request;
use engine\core\view\View;

abstract class FrontController
{
    protected static $templateName;
    protected $template;

    abstract public function index(Request $request);
    abstract public function show(Request $request);
    abstract public function create(Request $request);
    abstract public function store(Request $request);
    abstract public function edit(Request $request);
    abstract public function update(Request $request);
    abstract public function destroy(Request $request);

    public function __construct()
    {
        $this->template = View::getInstance(static::$templateName);
    }

}