<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Controller_Restfull extends Fuel\Core\Controller_Rest{
     
   /**
    * convert to upper
    *
    * @params $str	 
    */
    public function action_convert_to_upper() {
     $str = isset($_GET['str'])?$_GET['str']:"";
     $str = strtoupper($str);
     return $this->response(array('str'=>$str));
    }
  /**
    * convert to upper
    *
    * @params $str	 
    */
    public function action_list(){
        $arr = array(
            'foo' => 1,
            'bar' => array(1,50,219)
        );
        return $this->response($arr);
    }
}

