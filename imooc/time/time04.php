<?php 
header("Content-type:text/html; charset=utf-8");
echo "PHP 将格式化的日期字符串转换为Unix时间戳"."<br /></br />";

/*
 * 函数说明：strtotime(要解析的时间字符串, 计算返回值的时间戳【默认是当前的时间，可选】)
    返回值：成功则返回时间戳，否则返回 FALSE
 * */

echo strtotime("now");
echo '<br />';

echo strtotime("+4 seconds");
echo '<br />';

echo strtotime("+1 day");
echo '<br />';

echo strtotime("+1 week");
echo '<br />';

echo strtotime("+1 week 3 days 7 hours 4 seconds");
echo '<br />';

?>