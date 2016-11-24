<?php 
header("Content-type:text/html; charset=utf-8");
echo "内置函数"."<br /><br />";

/*
内置函数指的是PHP默认支持的函数，PHP内置了很多标准的常用的处理函数，
包括字符串处理、数组函数、文件处理、session与cookie处理等。

*/

$str = 'i am jobs.';
$str = str_replace('jobs', 'steven jobs', $str);
echo $str; //结果为“i am steven jobs”;

/*
 * 另外一些函数是通过其他扩展来支持的，比如mysql数据库处理函数，GD图像处理函数，邮件处理函数等，
 * PHP默认加载了一些常用的扩展库，我们可以安装或者加载其他扩展库来增加PHP的处理函数。
 * */


?>