<?php
    #1. Installation
       # a. Start session
            session_start();
        # b. Include the auto load file
            require_once __DIR__ . '/vendor/autoload.php';
        # c. Facebook Object with parameters 
        $fb = new Facebook\Facebook([
            'app_id' => '839841886165025',
            'app_secret' => '517e3fdc7744d5b80c352ea17b6b95db',
            'default_graph_version' => 'v2.9',
        ]);

    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['email', 'user_likes']; // optional
    $loginUrl = $helper->getLoginUrl('http://okistuff.com/login-callback.php', $permissions);
?>