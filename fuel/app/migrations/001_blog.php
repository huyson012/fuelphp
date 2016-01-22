<?php

namespace Fuel\Migrations;

class Blog{
    
    function up(){        
        \Fuel\Core\DBUtil::create_table('post', array(
            'id' => array(
                'type' => 'int',
                'constraint' => 200,
                'auto_increment' => true,
                'primary_key' => true,
            ),
            'title' => array('type' => 'varchar', 'constraint' => 200),
            'body' => array('type' => 'text'),
            'note' => array('type' => 'text'),
        ));
    }
    function down(){
        \Fuel\Core\DBUtil::drop_table('post');
    }
}
