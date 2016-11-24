<?php 
header("Content-type:text/html; charset=utf-8");
echo "正则表达式 基本语法".'<br />';
/*
 * 正则表达式的基本语法

    PCRE库函数中，正则匹配模式使用分隔符与元字符组成，分隔符可以是非数字、非反斜线、非空格的任意字符。
    经常使用的分隔符是正斜线(/)、hash符号(#) 以及取反符号(~)，例如：
    
    /foo bar/
    #^[^0-9]$#
    ~php~
    
    如果模式中包含分隔符，则分隔符需要使用反斜杠（\）进行转义。
    
    /http:\/\//
    
    如果模式中包含较多的分割字符，建议更换其他的字符作为分隔符，也可以采用preg_quote进行转义。
    
    $p = 'http://';
    $p = '/'.preg_quote($p, '/').'/';
    echo $p;
    
    分隔符后面可以使用模式修饰符，模式修饰符包括：i, m, s, x等，例如使用i修饰符可以忽略大小写匹配：
    
    $str = "Http://www.imooc.com/";
    if (preg_match('/http/i', $str)) {
        echo '匹配成功';
    }

 
 * */


//请修改变量p的正则表达式，使他能够匹配BBC

$p = '/bbc/i';
$str = "BBC是英国的一个电视台";
if (preg_match($p, $str)) {
    echo '匹配成功';
}





















?>