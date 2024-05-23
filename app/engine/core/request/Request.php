<?php
namespace engine\core\request;

class Request
{
    private $arGet = [];
    public function __construct($params = [])
    {
        $this->arGet = $params;
    }

    /**
     * @param $key
     * @return array|string
     */
    public function get($key = ''):array | string
    {
        if (key_exists($key,$this->arGet)){
            return $this->arGet[$key];
        }
        return  $this->arGet;
    }

    public function post()
    {

    }

    public function putch()
    {

    }

    public function delete()
    {

    }
}