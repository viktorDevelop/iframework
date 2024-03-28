<?php
namespace core;

class Router {

    private $url_params = [];
    public  function init()
    {
        $routes = include 'config/routes.php';
        foreach ($routes as $item){
            if (self::checkUrl($item['pathUrl'])){
                self::get($item['controller']);
                self::post($item['controller']);
            }
        }

    }

    public  function post($controller)
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
            return;
        }
        echo 'post method '.$controller.' action create';
    }
    public  function get($controller)
    {
        if ($_SERVER['REQUEST_METHOD'] !== "GET"){
            return ;
        }
        if (!empty($this->url_params)){

            $controller_obj = new $controller();
            $request = new \core\http\Request($this->url_params);
            $controller_obj->actionFind($request);
        }else{
            $controller_obj = new $controller();
            $controller_obj->actionIndex();
        }
    }

    public  function checkUrl($url)
    {
        $pars_uri = explode('/',$url);
        unset($pars_uri[0]);
        $a = [];
        $sl = '';
        foreach ($pars_uri as $k=>$i){
            if ( str_contains($pars_uri[$k],':') ){
                if ( str_contains($pars_uri[$k-1],':') ){
//                     $pars_uri[$k-1];
                    $sl =   str_replace(':','',$pars_uri[$k]);

                }else{
                    $sl =   $pars_uri[$k-1].'_'.str_replace(':','',$pars_uri[$k]);

                }
            }
            $a[$k] = preg_replace('~:[a-z]+~','?(?P<'.$sl.'>[a-z0-9-]+)',$i);
        }
        $preg_m =  implode('/',$a);
        $preg_m = '/'.$preg_m.'?/';
        $preg_match_validate = preg_match_all('~^'.$preg_m.'$~',$_SERVER['REQUEST_URI'],$matches);
        if (!$preg_match_validate){
            return false;
        }

        if (!empty($matches)){

            foreach ($matches as $key => $value) {
                if (!intval($key)) {
                    foreach($value as $item){
                        $url_slug[$key] = $item;
                    }
                }
            }
        }
        unset($url_slug[0]);
        $this->url_params = $url_slug;
        return  true;
    }
}