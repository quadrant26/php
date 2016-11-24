<?php 
header("Content-type:text/html; charset=utf-8");
echo "正则表达式 贪婪模式与懒惰模式".'<br />';
/*
   贪婪模式与懒惰模式

正则表达式中每个元字符匹配一个字符，当使用+之后将会变的贪婪，它将匹配尽可能多的字符，
但使用问号?字符时，它将尽可能少的匹配字符，既是懒惰模式。

 * */
 
//贪婪模式：在可匹配与可不匹配的时候，优先匹配 
//下面的\d表示匹配数字
$p = '/\d+\-\d+/';
$str = "我的电话是010-12345678";
preg_match($p, $str, $match);
echo $match[0]; //结果为：010-12345678



// 懒惰模式：在可匹配与可不匹配的时候，优先不匹配
$p = '/\d?\-\d?/';
$str = "我的电话是010-12345678";
preg_match($p, $str, $match);
echo $match[0];  //结果为：0-1


// 当我们确切的知道所匹配的字符长度的时候，可以使用{}指定匹配字符数
$p = '/\d{3}\-\d{8}/';
$str = "我的电话是010-12345678";
preg_match($p, $str, $match);
echo $match[0]; //结果为：010-12345678


//请修改变量p的正则表达式，使他能够匹配str中的姓名
$p = '/:(\w+\s\w+)/';
$str = "name:steven jobs";
preg_match($p, $str, $match);
echo $match[1]; //结果为：steven jobs


















?>