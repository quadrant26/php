<?php 
header("Content-type:text/html; charset=utf-8");
echo "正则表达式 使用正则表达式进行匹配".'<br />';
/*
   preg_match用来执行一个匹配，可以简单的用来判断模式是否匹配成功，或者取得一个匹配结果，
    他的返回值是匹配成功的次数0或者1，在匹配到1次以后就会停止搜索。

 * */
 

$subject = "abcdef";
$pattern = '/def/';
preg_match($pattern, $subject, $matches);
print_r($matches); //结果为：Array ( [0] => def )



// 模式匹配
$subject = "abcdef";
$pattern = '/a(.*?)d/';
preg_match($pattern, $subject, $matches);
print_r($matches); //结果为：Array ( [0] => abcd [1] => bc )


$subject = "my email is spark@imooc.com";
//在这里补充代码，实现正则匹配，并输出邮箱地址
$re = '/(\w+@\w+\.\w{2,3})/';
preg_match($re, $subject, $result);
print_r($result[0]);

















?>