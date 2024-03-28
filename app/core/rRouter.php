<?php

namespace core;

class rRouter{

    public static function init()
    {
        self::get();
        self::post();
    }

    public static function get()
    {
        $ar = include 'config/routes.php';
        if ($_SERVER['REQUEST_METHOD'] =='GET'){

            $pr =    '/?(?P<id>[a-z0-9]+)/?';
            $res = [];
            foreach ($ar as $key=>$item){

                $preg_url = preg_match_all('~^'.$item['path'].$pr.'$~',$_SERVER['REQUEST_URI'],$matches);
                if ($preg_url){
                    $res['routes'] = $item;
                    $res['params'] = $matches;
                }
                if (trim($_SERVER['REQUEST_URI'],'/')  == trim($item['path'],'/')){
                    $res['routes'] = $item;
                    $res['params'] = $matches;

                }

            }
            $url_slug = [];
            if($res['params']){
                unset($res['params'][0]);
                foreach ($res['params'] as $key => $value) {
                    if (!intval($key)) {
                        foreach($value as $item){
                            if (!empty($item)){
                                $url_slug[$key] = $item;
                            }
                        }
                    }
                }
            }
            $controller = '\\controllers\\'.ucfirst($res['routes']['controller']);
            $controller_obj = new $controller();
            $request = new \core\http\Request($url_slug);

            if(empty($url_slug)){
                $controller_obj->actionIndex($request);
            }else{
                $controller_obj->actionFind($request);
            }
        }




        return false;


    }

    public static function post($ar = []){
        if ($_SERVER['REQUEST_METHOD'] !='POST'){
            exit();
        }

        $res = [];
        foreach ($ar as $key=>$item){
            if (trim($_SERVER['REQUEST_URI'],'/')  == trim($item['path'],'/').'/create' ){
                $res['routes'] = $item;
            }
        }

        $controller = '\\controllers\\'.ucfirst($res['routes']['controller']);
        $controller_obj = new $controller();
        $request = new \core\http\Request($_POST);
        $controller_obj->actionCreate($request);


        return false;
    }
    public function put(){}
    public function putch(){}
    public function delete(){}


}

