<?php
use Model\Maths as myMath ;
use Freedom\Test as testFreedom;
class Controller_Example extends Fuel\Core\Controller_Hybrid{
    // set layout for controller
    public $template = "layout/template";
    // set format response json
    public $format = 'json';
    /**
    * The basic controller message
    *
    * @access  public	 
    * @author sonhh@luvina.net
    */
    public function action_index() {
        $data = array();
        $data['name'] = "<b>đây là nôi dung được controller Hybrid sinh ra</b>";        
        $this->template->content = Fuel\Core\View::forge("example/index",$data);
    }
     /**
    * example presenter
    *
    * @access  public	
    * @author sonhh@luvina.net 
    */
    public function action_presenter(){
        
        $presenter = Fuel\Core\Presenter::forge('example/index',
                                                'view',
                                                null,
                                                'layout/template');
        // set data for presenter
        $presenter->set('test', 'content');
        return Fuel\Core\Response::forge($presenter);
    }
     public function action_presenter1(){
         $presenter = Fuel\Core\Presenter::forge('example/test', 'view',
                                                  null, 'layout/empty');
         return Fuel\Core\Response::forge($presenter);
    }
  /**
    * example namespace presenter
    *
    * @access  public	
    * @author sonhh@luvina.net 
    */
        public function action_testpresenter(){
         $presenter = Presenter::forge('show','view',null,'layout/template');
        // set data for presenter
        $presenter->set('test', 'content');
        return Fuel\Core\Response::forge($presenter);
    }

    /**
    * The example model
    * @params: param1,param2
    * @access  public	 
    * @author sonhh@luvina.net
    */
    public function action_mymath() {
        $data = array();
        $data['param1'] = isset($_GET['param1'])  ? $_GET['param1'] : 0;
        $data['param2'] = isset($_GET['param2'])  ? $_GET['param2'] : 0;        
        // call method cong
        $data['cong'] = myMath::cong($data['param1'], $data['param2']);
        // call method tru
        $data['tru'] =  myMath::tru($data['param1'], $data['param2']);
        // call method nhan
        $data['nhan'] = myMath::nhan($data['param1'], $data['param2']);
        // call method chia
        $data['chia'] = myMath::chia($data['param1'], $data['param2']);
        // set view for layout
        $this->template->content = Fuel\Core\View::forge("example/math",$data);
    }
    
   /**
    * convert string to upper
    * @params: sr
    * @access  public	 
    * @author sonhh@luvina.net
    */
     public function action_convert_to_upper() {
        $str = isset($_GET['str']) ? $_GET['str'] : "";
        $str = strtoupper($str);
        return $this->response(array('str' => $str));
    }
   /**
    * @desc custom View    
    * @access  public	 
    * @author sonhh@luvina.net
    */
    public function action_extending() {
        
        $data = array();
        $data['name'] = Extend\View::myView();       
        $this->template->content = Extend\View::forge("example/index",$data);
    }
    /**
    * @desc custom View
    * @params: sr
    * @access  public	 
    * @author sonhh@luvina.net
    */
    public function action_lazyrending() {
        $data = array();
        // create layout view
        $view = \Fuel\Core\View::forge("trainingFuel/layout");
        // local view variables lazyrending
        $data['header'] = "<b> day la page title tu controller</b>";
        $view->header = \Fuel\Core\View::forge('trainingFuel/header',$data);
        $data['content'] = "<b>day la page noi dung tu controller</b>";
        $view->content = \Fuel\Core\View::forge('trainingFuel/content',$data);
        $data['footer'] = "<b> day la page footer tu controller</b>";
        $view->footer = \Fuel\Core\View::forge('trainingFuel/footer',$data);
        return $view;
    }
    
    /**
    * @desc convert hirgana to katakana 1 byte by used to package
    * @params: sr
    * @access  public	 
    * @author sonhh@luvina.net
    */
    public function action_package(){
        // load package
        Fuel\Core\Package::load('jalang');
        $strHiragana = "ひらがな";
        $convert = Jalang\ConvertJa::conver1byte($strHiragana);
        echo "conver hiragana thanh katakana bang cach su dung package:";
        echo "<pre>";var_dump($convert);die();
    }
    /**
    * @desc convert hirgana to katakana 1 byte by used to package
    * @params: none
    * @access  public	 
    * @author sonhh@luvina.net
    */
    public function action_freedom(){
        $test = testFreedom::_init();
        var_dump($test);die();
        
    }
   /**
    * @desc the example about constants
    * @params: none
    * @access  public	 
    * @author sonhh@luvina.net
    */
    public function action_constants() {
        $data = array();
        $data['name'] = "doc duong dan host tu define CONSTANTS:".HOST;       
        $this->template->content = Fuel\Core\View::forge("example/index",$data);
    }
    
   /**
    * @desc the example show hmvc
    * @params: none
    * @access  public	 
    * @author sonhh@luvina.net
    */
   public function action_showhmvc() {
        // check hmvc
        if (!\Fuel\Core\Request::is_hmvc()) {
            $view = Fuel\Core\View::forge('example/show_hmvc');
            return $view;
        } else {

            try {
                // phai render data truoc khi return
                $view = Fuel\Core\View::forge('example/show_hmvc')->render();
                return $view;
            } catch (HttpNotFoundException $e) {
                
            }
        }
    }

    /**
    * @desc example hmvc
    * @params: none
    * @access  public	 
    * @author sonhh@luvina.net
    */
   public function action_hmvc() {
       $this->template->content = Fuel\Core\View::forge("example/hmvc");
   }
   /**
    * @desc example phpErrorException 404
    * @params: none
    * @access  public	 
    * @author sonhh@luvina.net
    */
    public function action_error404(){
        throw new HttpNotFoundException;
    }
    /**
    * @desc example phpErrorException 404
    * @params: none
    * @access  public	 
    * @author sonhh@luvina.net
    */
    public function action_error500(){
        throw new HttpServerErrorException;
    }
}

