<?php
namespace  core\traits;

trait ArrayHelper {

    private $arr = [];
    public function __construct($arr = [])
    {
        $this->arr = $arr;
    }

    public function merge($ar1,$ar2)
    {

    }

    public function remove($item)
    {
        if (key_exists($item,$this->arr)){
            unset($this->arr[$item]);
        }
        return $this->arr;
    }

    public  function removeValue($value)
    {
        $result = [];
        if (is_array($this->arr)) {
            foreach ($this->arr as $key => $val) {
                if ($val === $value) {
                    $result[$key] = $val;
                    unset($this->arr[$key]);
                }
            }
        }
        return $result;
    }

}