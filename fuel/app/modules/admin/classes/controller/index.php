<?php
namespace Admin;
use Fuel\Core\Controller as Controllers;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Controller_Index extends Controller_Backend{
    
    public function action_index(){
        $data = array();
        $data['name'] = 'sonhh';
        $this->template->content = \Fuel\Core\View::forge('index/index',$data);
    }
}

