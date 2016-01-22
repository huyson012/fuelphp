<?php
namespace Blog;

class Controller_Entry extends \Fuel\Core\Controller_Hybrid{
    public $template = "layout/index";
  
    public function before() {
        parent::before();        
        if(!$this->is_restful()){
            echo \Fuel\Core\Asset::js("../template/blog/js/blog.js");
        }
        
    }
    
  /**
    * @desc add post
    * @params: none
    * @access  public	 
    * @author sonhh@luvina.net
    */
   public function action_index() {
        $config = array(
            'pagination_url' => \Fuel\Core\Router::get('blog'),
            'total_items' => Model_Post::count(),
            'per_page' => 4,
            'uri_segment' => 2,
                // or if you prefer pagination by query string
                'uri_segment'    => 'page',
        );

        $pagination = \Fuel\Core\Pagination::forge('mypagination', $config);

        $data['post'] = Model_Post::query()
                ->rows_offset($pagination->offset)
                ->rows_limit($pagination->per_page)
                ->get();
        // we pass the object, it will be rendered when echo'd in the view
        $data['pagination'] = $pagination;        
        // set view for layout
        $this->template->content = \Fuel\Core\View::forge("entry/list", $data);
    }

    /**
    * @desc add post
    * @params: none
    * @access  public	 
    * @author sonhh@luvina.net
    */
    public function action_add() {
        // init fieldset
        $fieldset = \Fuel\Core\Fieldset::forge()->add_model("Blog\\Model_Post");
        // init form
        $form = $fieldset->form();
        $form->add('submit', '', array('type' => 'submit', 
                   'value' => 'add', 'class' => 'btn'));
        $messages = array();
        $data = array();
        // validate data
        if ($fieldset->validation()->run() == true) {
            $fields = $fieldset->validated();
            $blog = new Model_Post();
            $blog->title = $fields['title'];
            $blog->body = $fields['body'];
            $blog->note = $fields['note'];
            if ($blog->save()) {
                \Response::redirect('blog/edit/' . $blog->id);
            }
        } else {
            $fieldset->repopulate();
            $data['messages'] = $fieldset->validation()->error();
        }

        $data['form'] = $form->build();
        $this->template->content = \Fuel\Core\View::forge("entry/add", $data, false);
    }
    /**
    * @desc edit post
    * @params: none
    * @access  public	 
    * @author sonhh@luvina.net
    */
    public function action_edit($id) {
        
        $post = Model_Post::find($id);
        // init fieldset
        $fieldset = \Fuel\Core\Fieldset::forge()
                ->add_model("Blog\\Model_Post")
                ->populate($post);
        // init form
        $form = $fieldset->form();
        $form->add('submit', '', array('type' => 'submit', 
                   'value' => 'update', 'class' => 'btn'));
        $messages = array();
        $data = array();
        // validate data
        if ($fieldset->validation()->run() == true) {
            $fields = $fieldset->validated();
            $blog = Model_Post::forge(array(),false);            
            $blog->from_array(array(
                        'id' => $post->id,
                        'title' => $fields['title'],
                        'body' => $fields['body'],
                        'note' => $fields['note'],                        
                    ));            
            $blog->_update_original(array(
                        'id' => $post->id,                        
                    ));
            if ($blog->save()) {
                \Response::redirect('blog');
            }
        } else {
            $fieldset->repopulate();
            $data['messages'] = $fieldset->validation()->error();
        }        
         $data['form'] = $form->build();
        $this->template->content = \Fuel\Core\View::forge("entry/add", $data, false);
    }
    /**
    * @desc delete du lieu
    * @params: blog_id
    * @access  public	 
    * @author sonhh@luvina.net
    */
    public function action_delete() {
        $blog_id = $this->param('blog_id');        
        $blog = Model_Post::forge();
        if($blog->deleteBlog($blog_id)){            
        }
        $this->response(array("messages" => 'bạn đã xóa dữ liệu thành công'));
    }
    public function action_showoverlay(){
        $html = \Fuel\Core\View::forge("entry/overlay", array(), false)->render();
        $this->response(array("html" => $html,'title'=>"Messages"));
    }
}