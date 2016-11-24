<?php 
header("Content-type:text/html; charset=utf-8");
echo "正则表达式 查找所有匹配结果".'<br />';
/*
   preg_match只能匹配一次结果，但很多时候我们需要匹配所有的结果，preg_match_all可以循环获取一个列表的匹配结果数组。

 * */
 

$p = "|<[^>]+>(.*?)</[^>]+>|i";
$str = "<b>example: </b><div align=left>this is a test</div>";
preg_match_all($p, $str, $matches);
print_r($matches);
echo "<br />";


// 可以使用preg_match_all匹配一个表格中的数据：

$p = "/<tr><td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<\/tr>/i";
$str = "<table> <tr><td>Eric</td><td>25</td></tr> <tr><td>John</td><td>26</td></tr> </table>";
preg_match_all($p, $str, $matches);
print_r($matches);


$str = "<ul>
            <li>item 1</li>
            <li>item 2</li>
        </ul>";
//在这里补充代码，实现正则匹配所有li中的数据
$re = '/<li>(.*?)<\/li>/';
preg_match_all($re, $str, $matches);
print_r($matches[1]);














?>