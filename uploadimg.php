<?php
require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$connection = new TwitterOAuth('uk70xrKSHNtbFMnReQFkRcRsh', 'XWnE0VV1Z5jhp0BjhURLOshh9yZ2KLXPPSGi02thaZJMUKYn92', ' 996250815936385024-WQiLM8R8Ndxbb3DYCghGVzYHrEqfEIB', '  N8ngHngMwXdlRUxaXh0l5pQmsDiFJTWMJKTltVuRGtWZw');
$content = $connection->get("account/verify_credentials");
$statues = $connection->post("statuses/update", ["status" => "hello world"]);
/*$url = $url = $connection->url("oauth/authorize", ["oauth_token" => "996250815936385024-WQiLM8R8Ndxbb3DYCghGVzYHrEqfEIB"]);
echo""
header('Location: '. $url);*/
echo"hii";
?>