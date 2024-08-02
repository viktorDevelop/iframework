<?php
namespace core;
class Router
{
    public static function get($url,callable $callable)
    {
        if ($_SERVER['REQUEST_METHOD'] != 'GET')
        {
            exit;
        }

    }

}
