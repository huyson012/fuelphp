<?php
namespace Blog;

class Model_Post extends \Orm\Model{    
    // set table name   
    protected static  $_table_name = "post";
    protected static $_properties = array(
        'id',
        'title' => array(
          'data_type' => "string"  ,
           "label"=> "Tiêu Đề",
            "validation" => array("required",'max_length'=>array(200))
        ),
        'body' => array(
          'data_type' => "string"  ,
           "label"=> "Nội Dung",
            "validation" => array("required"),
            "form" => array('type'=>'textarea')
        ),
        'note' => array(
          'data_type' => "string"  ,
           "label"=> "Ghi Chú",            
            "form" => array('type'=>'textarea')
        ),
    );
    public function deleteBlog($id){
        
        try{
            $result = \Fuel\Core\DB::delete('post')->where("id",'=',$id)->execute();
            
        } catch (Exception $ex) {            
        }
    }
}