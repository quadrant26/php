<?php 
header("Content-type:text/html; charset=utf-8");
echo "PHP 格式化格林威治（GMT）标准时间"."<br /></br />";

/*
 * gmdate 函数能格式化一个GMT的日期和时间，返回的是格林威治标准时（GMT）。
 * 
*/

echo date("Y-m-d H:i:s", time() );
echo '<br />';

echo gmdate("Y-m-d H:i:s", time() );
echo '<br />';

//设置默认时区是中国
date_default_timezone_set("Asia/Shanghai");
//返回2014-05-01 12:00:01的格林威治标准时间
$t = strtotime("2014-05-01 12:00:01");
echo $t;
echo '<br />';
echo gmdate('Y-m-d H:i:s', $t);

?>