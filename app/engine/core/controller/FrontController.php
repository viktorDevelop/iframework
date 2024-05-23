<?php
namespace engine\core\controller;

use engine\core\request\Request;

abstract class FrontController
{
    abstract public function index(Request $request);
    abstract public function show(Request $request);
    abstract public function create(Request $request);
    abstract public function store(Request $request);
    abstract public function edit(Request $request);
    abstract public function update(Request $request);
    abstract public function destroy(Request $request);

}