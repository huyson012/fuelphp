<?php
namespace Presenter\Example;

class Show extends \Presenter{
    public function view(){
        $data = array();
        $test = $this->get('test');        
        $data['name'] = "presenter nay co su dung namespace";
        $this->content = \Fuel\Core\View::forge('example/index',$data);
    }
}
