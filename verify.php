<?php
$access_token = 'd1lRmTQoY59pWv8Bs6BOlb63Nk3Sf7h/bZ6Dj/DzjotVFu6Yx8+jOSERqnIOXaYsCi1Tpw0tPcGwjmSwE7WX4BTXfQvwlBr+uI9V+6Dm/yEoAbIiA1LqWvP7HGtHIhlFzzcaTD/osk6Y3h04+ZAKEQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
