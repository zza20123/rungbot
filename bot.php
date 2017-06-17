<?php
$access_token = 'd1lRmTQoY59pWv8Bs6BOlb63Nk3Sf7h/bZ6Dj/DzjotVFu6Yx8+jOSERqnIOXaYsCi1Tpw0tPcGwjmSwE7WX4BTXfQvwlBr+uI9V+6Dm/yEoAbIiA1LqWvP7HGtHIhlFzzcaTD/osk6Y3h04+ZAKEQdB04t89/1O/w1cDnyilFU=';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<channel access token>');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<channel secret>']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->replyMessage('<replyToken>', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
