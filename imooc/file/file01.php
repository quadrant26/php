<?php 

header("Content-type:text/html; charset=utf-8");
echo "PHP 读取文件内容"."<br /></br />";

// 读取文件内容
/*
 * file_get_contents 见一个文件读取到一个字符串中
 * */

$file_url = "t.txt";
$file = file_get_contents($file_url);
echo $file."<br /></br />";

// file_get_contents也可以通过参数控制读取内容的开始点以及长度。

$content = file_get_contents('./si.txt', null, null, 100, 500);
echo $content."<br /></br />";

// 使用fopen，fgets，fread等方法，fgets可以从文件指针中读取一行，freads可以读取指定长度的字符串。
$fp = fopen('si.txt', 'rb');
while( !feof($fp) ){
    echo fgets($fp);
}
fclose($fp);

echo "<br /></br />";

$fp = fopen('si.txt', 'rb');
$contents = '';
while( !feof($fp) ){
    $contents .= fread($fp, 50);
    echo $contents;
}
fclose($fp);


?>