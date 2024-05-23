<?php

namespace core\http;

class Request {
    private $urlParams;
    private $errors = [];
    public function __construct($urlParams = [])
    {
        $this->urlParams = $urlParams;
    }
    public function getParams($field = '',$rule ='')
    {
        if ($field){
            return $this->urlParams[$field];
        }else{
            return  $this->urlParams;
        }
//        if (isset($this->urlParams[$field])){
//        }

    }
    public function get($field = '')
    {
        if (isset($_GET[$field])){
            return $_GET[$field];
        }
        return  $_GET;
    }
    public function post()
    {
        $post = file_get_contents('php://input');
        return  $post;
    }
    public function validate(){
        if (!empty($this->errors)){
            return true;
        }
        return false;
    }
    public function put(){}
    public function putch(){}
    public function delete(){}
}