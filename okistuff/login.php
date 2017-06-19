$fb = new Facebook\Facebook([
  'app_id' => '{839841886165025}',
  'app_secret' => '{517e3fdc7744d5b80c352ea17b6b95db}',
  'default_graph_version' => 'v2.9',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';