<?php 
header("Content-type:text/html; charset=utf-8");
echo "正则表达式 正则表达式的搜索和替换".'<br />';


// 例如我们可以简单的调整字符串的日期格式：

$string = 'April 15, 2014';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = '$3, ${1} $2';
echo preg_replace($pattern, $replacement, $string); //结果为：2014, April 15

// 其中${1}与$1的写法是等效的，表示第一个匹配的字串，$2代表第二个匹配的

//通过复杂的模式，我们可以更加精确的替换目标字符串的内容。
$patterns = array ('/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/',
                   '/^\s*{(\w+)}\s*=/');
$replace = array ('\3/\4/\1\2', '$\1 =');//\3等效于$3,\4等效于$4，依次类推
echo preg_replace($patterns, $replace, '{startDate} = 1999-5-27'); //结果为：$startDate = 5/27/1999
//详细解释下结果：(19|20)表示取19或者20中任意一个数字，(\d{2})表示两个数字，(\d{1,2})表示1个或2个数字，(\d{1,2})表示1个或2个数字。^\s*{(\w+)\s*=}表示以任意空格开头的，并且包含在{}中的字符，并且以任意空格结尾的，最后有个=号的。


// 用正则替换来去掉多余的空格与字符：

$str = 'one     two';
$str = preg_replace('/\s+/', ' ', $str);
echo $str; // 结果改变为'one two'


$str = '主要有以下几个文件：index.php, style.css, common.js';
//将目标字符串$str中的文件名替换后增加em标签
$pattern = '/(\w+\.\w+)+/';
$replacement = '<em>$1</em>';
echo preg_replace($pattern, $replacement, $str);











?>