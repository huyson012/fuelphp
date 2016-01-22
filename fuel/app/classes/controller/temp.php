<?php

class Controller_Temp extends \Fuel\Core\Controller_Template{
    public $template = "template";
    public function before() {
        parent::before();
        
    }
    public function after($response) {
        $response = parent::after($response);
        return $response;
    }
    public function action_index(){
        $data = array();
        $this->template->title = "Example controller template";
        $this->template->content = \Fuel\Core\View::forge('example/hello', $data);
    }
}
