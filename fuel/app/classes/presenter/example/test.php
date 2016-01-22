<?php
use Model\PageInfo as PageInfo;
class Presenter_Example_Test extends Fuel\Core\Presenter{
    public function view(){        
        $data = array();
        $pageModel = new PageInfo();
        $data['name'] = $pageModel->getPageInfo();
        $this->content = Fuel\Core\View::forge('example/index',$data);
    }
}
