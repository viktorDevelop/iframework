<?php

namespace core\http;

class Response{

    public function answer($cod,$data)
    {
        header('Content-Type: application/json');
        http_response_code($cod);
        echo json_encode($data,true);
    }
}
