<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

return array(
  'blog' => array(
      'blog/entry/index','name'=>'blog'
  ),         
  'blog/add' => array(
      'blog/entry/add','name'=>'blog_add'
  ),     
 'blog/edit' => array(
      'blog/entry/edit/:id','name'=>'blog_edit'
  ),        
  'blog/edit/:id' => 'blog/entry/edit/$1',
  'blog/delete/:blog_id' => 'blog/entry/delete',
  'blog/list' => 'blog/entry/list',
  'blog/:year/:month/:day' => 'blog/entry/index',         
    
);