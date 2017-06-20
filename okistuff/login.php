
<?php
  require 'head.php';
 ?>
 <body>
   <?php
      require 'header.php';
      require 'nav.php';
      require 'container.php';
   ?>
<section>
    <?php
        require_once __DIR__ . '/vendor/autoload.php';
        $fb = new Facebook\Facebook([
            'app_id' => '839841886165025',
            'app_secret' => '517e3fdc7744d5b80c352ea17b6b95db',
            'default_graph_version' => 'v2.9',
        ]);
    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['email', 'user_friends', 'public_profile'];
    $loginUrl = $helper->getLoginUrl('http://okistuff.com/callback.php', $permissions);
    echo '<a href="'. htmlspecialchars($loginUrl) .'"> Log in with Facebook!</a>'
    ?>   
</section>
