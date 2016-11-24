<?php 
header("Content-type:text/html; charset=utf-8");
echo "正则表达式".'<br />';

$p = '/apple/';
$str = "apple banner";

if( preg_match($p, $str) ){
    echo 'match';
}





















?>