<?php 
header("Content-type:text/html; charset=utf-8");
echo "字符串方法"."<br /><br />";

echo "字符串的合并与分割"."<br /><br />";

/*
 *  1、php字符串合并函数implode()
            函数说明：implode(分隔符[可选], 数组)
            返回值：把数组元素组合为一个字符串
 * 
 * */
 
$arr = array('Hello', 'World!');
$result = implode('', $arr);
print_r($result);//结果显示Hello World!

/*
 * php字符串分隔函数explode()
        函数说明：explode(分隔符[可选], 字符串)、
        返回值：函数返回由字符串组成的数组
 * 
 * */


$str = 'apple,banana';
$result = explode(',', $str);
print_r($result);//结果显示array('apple','banana')


?>