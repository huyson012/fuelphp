<?php
    class Controller_Test extends Controller
{
	public function action_index()
	{
		//以下サンプル３つ。
		$data['a'] ='<SCRIPT>alert("test xss filter")</SCRIPT>';
		$data['a'] = Security::xss_clean($data['a']);
 
		$data['b'] ='<div>nhap vao text html</div>';
		$data['b'] = Security::xss_clean($data['b']);
 
		$data['c'] ='<A HREF="javascript:document.location=\'http://www.google.com/\'">XSS</A>';
		$data['c'] = Security::xss_clean($data['c']);
 
                //出力フィルタをfalseにしておこう
		return View::forge('example/xss',$data,false);
	}
}