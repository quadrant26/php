<?php 
header("Content-type:text/html; charset=utf-8");
echo "判断函数是否存在"."<br /><br />";

/*
经常会先使用function_exists判断一下函数是否存在。
同样的method_exists可以用来检测类的方法是否存在。
*/

function func() {
}
if (function_exists('func')){
    echo 'exists';
}

// 类是否定义可以使用class_exists。

class MyClass{
}
// 使用前检查类是否存在
if (class_exists('MyClass')) {
    $myclass = new MyClass();
}

// 文件是否存在file_exists等。

$filename = 'test.txt';
if (!file_exists($filename)) {
    echo $filename . ' not exists.';
}


?>