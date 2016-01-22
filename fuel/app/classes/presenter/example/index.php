<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Presenter_Example_Index extends Fuel\Core\Presenter {
    
    public function view() {
        
        $data = array();
        $test = $this->get('test');        
        $data['name'] = "example về presenter thông qua layout";
        $this->content = Fuel\Core\View::forge('example/index',$data);
        
    }
}
