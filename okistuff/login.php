<?php
    #1. Installation
       # a. Start session
            session_start();
        # b. Include the auto load file
            require_once __DIR__.'../../vendor/autoload.php';
        # c. Facebook Object with parameters 
        $fb = new Facebook\Facebook([
            'app_id' => '839841886165025',
            'app_secret' => '517e3fdc7744d5b80c352ea17b6b95db',
            'default_graph_version' => 'v2.9',
        ]);

    $helper = $fb->getRedirectLoginHelper();

try {
  // Get the \Facebook\GraphNodes\GraphUser object for the current user.
  // If you provided a 'default_access_token', the '{access-token}' is optional.
  $response = $fb->get('/me', '{access-token}');
} catch(\Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$me = $response->getGraphUser();
echo 'Logged in as ' . $me->getName();
?>