<?php
return array(
        'root_url' => array('', 'name' => 'root_url'),
	'_root_'  => 'top/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
         'admin' => 'admin/index',
         'auth' => 'auth/index',         
         
);
