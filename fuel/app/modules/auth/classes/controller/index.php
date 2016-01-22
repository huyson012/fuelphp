<?php
namespace Auth;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Controller_Index extends \Fuel\Core\Controller_Template{
    public $template = "layout/auth";
    public function action_index(){
        
        $data = array();        
        $this->template->content = \Fuel\Core\View::forge('index/login',$data);
    }
    public function action_login(){        
        $data = array();        
        $this->template->content = \Fuel\Core\View::forge('index/login',$data);
    }
    public function action_logout(){               
    }
}

