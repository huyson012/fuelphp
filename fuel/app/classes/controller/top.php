<?php

class Controller_Top extends \Fuel\Core\Controller_Hybrid{
    public $template = "layout/template";
    public function action_index(){
        $data = array();
        $data['name'] = "day la trang top";       
        $this->template->content = Fuel\Core\View::forge("example/top",$data);
    }
}

