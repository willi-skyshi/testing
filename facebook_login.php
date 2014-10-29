<html>
<?php
FacebookSession::setDefaultApplication('531875843622531', 'dd972580a997857e9528a7ffe77c7d1c');
?>
<head>

</head>
<body>
<?php
$helper = new FacebookRedirectLoginHelper('http://retaillending.com3.local.skyshi.com/');
$loginUrl = $helper->getLoginUrl();
echo '<a href="'.$loginUrl.'">Login WIth FB</a>';
// Use the login url on a link or button to redirect to Facebook for authentication

$helper = new FacebookRedirectLoginHelper();
try {
  $session = $helper->getSessionFromRedirect();
} catch(FacebookRequestException $ex) {
  // When Facebook returns an error
} catch(\Exception $ex) {
  // When validation fails or other local issues
}
if ($session) {
  // Logged in
}
?>
<!--<input type="button" value="Connect with Facebook" onclick="window.open('https://graph.facebook.com/oauth/authorize?client_id=531875843622531&redirect_uri=http://retaillending.com3.local.skyshi.com/&display=popup')"  />-->
</body>
</html>