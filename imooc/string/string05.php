<?php 
header("Content-type:text/html; charset=utf-8");
echo "字符串方法"."<br /><br />";

echo "获取字符串的长度"."<br /><br />";

/*
 *  php中有一个神奇的函数，可以直接获取字符串的长度，这个函数就是strlen()。
 * 
 * */
 
$str = 'hello';
$len = strlen($str);
echo $len;//输出结果是5

// 可以使用mb_strlen()函数获取字符串中中文长度。
$str = "我爱你";
echo mb_strlen($str,"UTF8");//结果：3，此处的UTF8表示中文编码是UTF8格式，中文一般采用UTF8编码

?>