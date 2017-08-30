<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$fb = new Facebook\Facebook([
    'app_id' => '1672604006293669',
    'app_secret' => 'd180ded6f695f70b8a0a0910ca78c3a8',
    'default_graph_version' => 'v2.5',
]);

$helper = $fb->getRedirectLoginHelper();
//$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://localhost:81/phpproject/fbapi.php');

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
?>