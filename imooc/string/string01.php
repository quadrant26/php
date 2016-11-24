<?php 
header("Content-type:text/html; charset=utf-8");
echo "字符串方法"."<br /><br />";

echo "字符串介绍"."<br /><br />";

/*
 * 一个字符串 通过下面的3种方法来定义：

    1、单引号
    2、双引号
    3、heredoc语法结构
 * 
 * */
 
// 单引号定义的字符串：
$hello = 'hello world';

// 双引号定义的字符串：
$hello = "hello world";

// heredoc语法结构定义的字符串：

$hello = <<<TAG
hello world
TAG;
?>