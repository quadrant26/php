<?php 
header("Content-type:text/html; charset=utf-8");
echo "返回值函数"."<br /><br />";

/*使用return关键字可以使函数返回值，可以返回包括数组和对象的任意类型，如果省略了 return，则默认返回值为 NULL。
*/
function add($a) {
    return $a+1;
}
$b = add(1);

// 返回语句会立即中止函数的运行，并且将控制权交回调用该函数的代码行，因此下面函数的返回值跟上面的函数是一样的。

function add2($a) {
    return $a+1;
    $a = 10;
    return $a+20;
}
$b = add2(1);

// 函数不能返回多个值，但可以通过返回一个数组来得到类似的效果。

function numbers() {
    return array(1, 2, 3);
}
list ($one, $two, $three) = numbers();



?>