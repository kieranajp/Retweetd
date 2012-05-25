<?php
	if (isset($_GET['since') && $_GET['since'] != 0) {
		$url = "https://api.twitter.com/1/statuses/user_timeline.json?include_entities=true&count=200&screen_name=".$_GET['user']."&since_id=".$_GET['since'];
	} else {
  	$url = "https://api.twitter.com/1/statuses/user_timeline.json?include_entities=true&count=200&screen_name=".$_GET['user'];
  }
  echo file_get_contents($url);