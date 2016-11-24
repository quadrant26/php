<?php 
header("Content-type:text/html; charset=utf-8");
echo "字符串方法"."<br /><br />";

echo "格式化字符串"."<br /><br />";

/*
 *  我们需要用到PHP的格式化字符串函数sprintf()
        函数说明：sprintf(格式, 要转化的字符串)
 * 
 * */
 
$str = '99.9';
$result = sprintf('%01.2f', $str);
echo $result;//结果显示99.90

/*
 * 这个 %01.2f 是什么意思呢？

1、这个 % 符号是开始的意思，写在最前面表示指定格式开始了。 也就是 "起始字符", 直到出现 "转换字符" 为止，就算格式终止。
2、跟在 % 符号后面的是 0， 是 "填空字元" ，表示如果位置空着就用0来填满。
3、在 0 后面的是1，这个 1 是规定整个所有的字符串占位要有1位以上(小数点也算一个占位)。
    如果把 1 改成 6，则 $result的值将为 099.90
    因为，在小数点后面必须是两位，99.90一共5个占位，现在需要6个占位，所以用0来填满。
4、在 %01 后面的 .2 （点2） 就很好理解了，它的意思是，小数点后的数字必须占2位。 如果这时候，$str 的值为9.234,则 $result的值将为9.23.
    为什么4 不见了呢？ 因为在小数点后面，按照上面的规定，必须且仅能占2位。 可是 $str 的值中，小数点后面占了3位，所以，尾数4被去掉了，只剩下 23。
5、最后，以 f "转换字符" 结尾。
 * 
 * */


//格式化字符串
$str = '100.1';
$result = sprintf("%01.3f", $str);
echo $result;


?>