<?php
session_start();
require 'vendor/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;
define('CONSUMER_KEY', 'uk70xrKSHNtbFMnReQFkRcRsh'); // add your app consumer key between single quotes
define('CONSUMER_SECRET', 'XWnE0VV1Z5jhp0BjhURLOshh9yZ2KLXPPSGi02thaZJMUKYn92'); // add your app consumer secret key between single quotes
define('OAUTH_CALLBACK', 'https://174b31a2.ngrok.io/twitter/callback.php'); // your app callback URL
if (!isset($_SESSION['access_token'])) {
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
	$request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
	$_SESSION['oauth_token'] = $request_token['oauth_token'];
	$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
	$url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
	//echo $url;
	header('Location: '. $url);
} else {
	$access_token = $_SESSION['access_token'];
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
	$user = $connection->get("account/verify_credentials");
	//echo $user->screen_name;
	//$statues = $connection->post("statuses/update", ["status" => "hello world"]);
	// uploading media (image) and getting media_id
	$tweetWM = $connection->upload('media/upload', ['media' => './download.jpeg']);
	// tweeting with uploaded media (image) using media_id
	$tweet = $connection->post('statuses/update', ['media_ids' => $tweetWM->media_id, 'status' => 'tweeting with image file']);
	//print_r($tweet);
}