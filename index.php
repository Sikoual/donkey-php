<?php

$message1 = "0@sn9sirppa@#?ia'jgtvryko1";
$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$message3 = "aopi?sgnirts@#?sedhtg+p9l!";


function msgcode ($message){
    $regex = '/[@#?]+/';
    $key = mb_strlen($message)/2;
    $sub = substr($message,5,$key);
    $result = preg_replace($regex,"",$sub);
    $result = strrev($result);
    echo $result;
};

msgcode($message1);
echo "<br>";
msgcode($message2);
echo "<br>";
msgcode($message3);
