<?php
    session_start();
    $fb = new Facebook\Facebook([
        'app_id' => '839841886165025',
        'app_secret' => '517e3fdc7744d5b80c352ea17b6b95db',
        'default_graph_version' => 'v2.9',
    ]);

    $helper = $fb->getRedirectLoginHelper();
    try {
    $accessToken = $helper->getAccessToken();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
    }

    if (isset($accessToken)) {
    // Logged in!
    $_SESSION['facebook_access_token'] = (string) $accessToken;

    // User is logged in with a long-lived access token.
    // You can redirect them to a members-only page.
    header('Location: https://okistuff.com');
    }
?>