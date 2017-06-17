<?php
$access_token = 'jzd/v+Oi9CsCjnclmFlfQDgF7QCkgjr6AHc7x46LwGY40Y6GMzndcRyG4r4qPuu0Ci1Tpw0tPcGwjmSwE7WX4BTXfQvwlBr+uI9V+6Dm/yGS9K189JsUbKQebKKKxX5H1W9naeKuawGF1ghRr0xGwwdB04t89/1O/w1cDnyilFU=X';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
