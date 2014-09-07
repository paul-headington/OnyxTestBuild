<?php
return array(
    "onyx_acl_roles" => array(
        'guest' => array(
            'home',
            'system',
            'system/createmodel', 
            'home/default',
            'about-us'            
            ),
        'admin' => array(
            'admin',
            'delete-user',
            ),        
        ),
    "onyx_acl" => array(
        "error_message" => 'Access denied to that resource',
        "load_from_db" => false,
        "deny_unlisted" => true,
        "login_route" => 'dashboard',
        "logout_route" => 'user',
    )
);
?>