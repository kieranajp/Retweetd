<?php
  if (isset($_POST['uname'])) {
    $url = "https://api.twitter.com/1/statuses/user_timeline.json?include_entities=true&screen_name=".$_REQUEST['user'];
    echo file_get_contents($url);
  }
  else {
    echo "err";
  }