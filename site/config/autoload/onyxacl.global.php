<?php
return array(
    "onyx_acl_roles" => array(
        'guest' => array(
            'home',
            'system',
            'system/createmodel', 
            'home/default',
            'about-us',
            'dashboard',
            'user',
            'register',
            'about-us',
            'sorter',
            'sorter/index',
            'modal'
            
            ),
        'admin' => array(
            'admin',
            'add-user',
            'delete-user',
            'google/default'
            ),        
        ),
    "onyx_acl" => array(
        "error_message" => 'Access denied to that resource',
        "load_from_db" => true,
        "deny_unlisted" => true,
        "login_route" => 'dashboard',
        "logout_route" => 'user',
    )
);
?>