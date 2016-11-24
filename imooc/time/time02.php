<?php 
header("Content-type:text/html; charset=utf-8");
echo "PHP 取得当前的日期"."<br /></br />";

/*
 * php内置了date()函数，来取得当前的日期。
函数说明：date(时间戳的格式, 规定时间戳【默认是当前的日期和时间，可选】)
返回值：函数日期和时间
 * */
$t = date('Y-m-d');
echo $t.'<br />';

echo date('Y-m-d', '1396193923');   //date函数，第二个参数有值的情况  2014-03-30,1396193923表示2014-03-30的unix时间戳
?>