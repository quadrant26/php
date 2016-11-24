<?php 
header("Content-type:text/html; charset=utf-8");
echo "字符串方法"."<br /><br />";

echo "单引号和双引号的区别"."<br /><br />";

/*
 * 在PHP中，字符串的定义可以使用英文单引号' '，也可以使用英文双引号" "。

    但是必须使用同一种单或双引号来定义字符串，如：'Hello World"和"Hello World'为非法的字符串定义。
    
    单引号和双引号到底有啥区别呢？
    
    PHP允许我们在双引号串中直接包含字串变量。
    
    而单引号串中的内容总被认为是普通字符。
 * 
 * */
 
$str='hello';
echo "str is $str"; //运行结果: str is hello
echo 'str is $str'; //运行结果: str is $str


//用单引号定义一个字符串，字符串里输入字符hello world，并把字符串都赋值给变量$str
$str = 'hello world';
//用双引号定义一个字符串，字符串里输入字符hello world，并把字符串都赋值给变量$str
$str = "hello world";
?>