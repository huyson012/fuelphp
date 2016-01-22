<?php
namespace Admin;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Controller_Backend extends \Fuel\Core\Controller_Template{
    // set layout default for module     
    public $template = "layout/admin";    
    public function before() {
        parent::before();
        // 
    }
}
