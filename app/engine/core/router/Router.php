<?
namespace Engine\core\Router;
use engine\core\helpers\UrlHelper;


class Router    
{	
	use UrlHelper;
	
	private $patterns = [

		'int'=>"[0-9]+",
		'str'=>"[a-z_-]+",
		'any'=>"[a-zA-Z0-9-_]+"
	];

	private $routes = [];
		
	private function checkMethod($method)
	{
		return ( $_SERVER['REQUEST_METHOD'] == $method ) ? true : false;
	}
	public function add($name,$pattern,$controller,$method = "GET")
	{
		$ar = [
			$name => [
				'controller'=>$controller,
				'pattern'=>$pattern,
				'method'=>$method

			]
		];
        array_push($this->routes,$ar);
	}




	public function dispatch()
	{
        echo "<pre>";

        foreach ($this->routes as $k=>$route)
        {
            foreach ($route as $ket=>$value)
            {
                if ($_SERVER['REQUEST_METHOD'] == $value['method']){
                    preg_match_all('~/(\\{\w+:\w+})~',$value['pattern'],$mat);
                  $value['url_pattern'] =   $this->parsePattern($value['pattern'],$mat);
                    if ($value['url_pattern']){
                        if(preg_match('~^'.$value['url_pattern'].'$~',$_SERVER['REQUEST_URI'],$mat) )
                        {
                            $this->execute($value,$mat);
                        }
                  }else{

                      if (preg_match('~^'.$value['pattern'].'/?$~',$_SERVER['REQUEST_URI']))
                      {

                          $this->execute($value,$mat);
                      }
                  }

                }
            }
        }

    }

    public function execute($mod,$params = [])
    {
        print_r($mod);
        print_r($params);
    }

    /**
     * @param $pat
     * @param $mat
     * @return string
     */
    private function parsePattern($pat, $mat)
    {
        $arUrlParam = ($mat[1]) ? $mat[1] : [];
        $t = preg_match_all('~/\w+/~',$pat,$tt);

        $res = [];
        $a = '';
        $l = '';
        foreach ($arUrlParam as $k=>$v)
            {
                preg_match('~\\{\w+~',$v,$m);
                preg_match('~:\w+~',$v,$var);
                $name_var =  str_replace(':','',$var[0]);
                $p = str_replace('{','',$m[0]);
                $a = "(?P<$name_var>".$this->patterns[$p].')';
                $res[] = $a;
            }
        foreach ($tt[0] as $k=>$v)
        {
            if (count($tt[0]) > 1){
                if (isset($res[$k])){
                    $l .=    $tt[0][$k].$res[$k];
                }else{
                    $l .= $tt[0][$k];
                }
            }else{

                foreach ($res as $k_r=>$v_r)
                {
                  if ($k == $k_r){
                      $l .=  rtrim($v,'/');
                  }
                  $l .= '/'.$v_r;
                }
            }


        }

        return $l;
    }





}