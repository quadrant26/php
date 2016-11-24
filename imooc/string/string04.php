<?php 
header("Content-type:text/html; charset=utf-8");
echo "字符串方法"."<br /><br />";

echo "去除字符串首尾的空格"."<br /><br />";

/*
 *  trim去除一个字符串两端空格。
    rtrim是去除一个字符串右部空格，其中的r是right的缩写。
    ltrim是去除一个字符串左部空格，其中的l是left的缩写。
 * 
 * */
 
echo trim(" 空格 ")."<br>";
echo rtrim(" 空格 ")."<br>";
echo ltrim(" 空格 ")."<br>";



?>