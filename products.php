<?php


  require 'server/fb-php-sdk/facebook.php';

  $app_id = '336953559728376';
  $app_secret = 'e2df834723ce92533fa64c2cff192d65';
  $app_namespace = 'cartooned';
  $app_url = 'http://apps.facebook.com/' . $app_namespace . '/';
  $scope = 'email,publish_actions,user_photos';

  // Init the Facebook SDK
  $facebook = new Facebook(array(
    'appId'  => $app_id,
    'secret' => $app_secret,
    'cookie' => true,
  ));

  // Get the current user
  $user = $facebook->getUser();

  // If the user has not installed the app, redirect them to the Auth Dialog
  if (!$user) {
    $loginUrl = $facebook->getLoginUrl(array(
      'scope' => $scope,
      'redirect_uri' => $app_url,
    ));

    print('<script> top.location.href=\'' . $loginUrl . '\'</script>');
  }

  if(isset($_REQUEST['request_ids'])) {
    $requestIDs = explode(',' , $_REQUEST['request_ids']);
    foreach($requestIDs as $requestID) {
      try {
        $delete_success = $facebook->api('/' . $requestID, 'DELETE');
      } catch(FacebookAPIException $e) {
        error_log($e);
      }
    }
  }
?>