<?php 

header("Content-type:text/html; charset=utf-8");
echo "PHP 内容写入"."<br /></br />";

/*
 * file_put_contents。
 * 
 * */
 
$filename = 't.txt';
$data = 'text/html';
file_put_contents($filename, $data);
echo file_get_contents($filename);

echo '<br /></br />';

// $data参数可以是一个一维数组，当$data是数组的时候，会自动的将数组连接起来，相当于$data=implode('', $data);

$fp = fopen($filename, 'w');
fwrite($fp, 'hello');
fwrite($fp, ', world');
fclose($fp);

echo file_get_contents($filename);

?>