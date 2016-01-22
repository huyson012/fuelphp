<?php
namespace Model;
class Maths extends \Fuel\Core\Model{
    public static function cong($param1,$param2){
        return $param1 + $param2;
    }
    public static  function tru($param1,$param2){
        return $param1 - $param2;
    }
    public static  function nhan($param1,$param2){
        return $param1 * $param2;
    }
    public static  function chia($param1,$param2){
        if((int)$param2 == 0 ){
            return "phep chia không xac định";
        }else{
            return $param1 / $param2;
        }        
    }
}

