<?php 

header("Content-type:text/html; charset=utf-8");
echo "PHP 判断文件是否存在"."<br /></br />";

/*
 * 判断文件是否存在
 * is_file
 * file_exists
 * 
 * */
 
$filename = 't.txt';
if( is_file($filename) ){
    echo file_get_contents($filename);
}

echo '<br /><br />';

if( file_exists($filename) ){
    echo file_get_contents($filename);
}

/*
 * 更加精确的可以使用is_readable与is_writeable在文件是否存在的基础上，判断文件是否可读与可写。
 * */

// 判断文件是否可写
if( is_writeable($filename) ){
    
    file_put_contents($filename, 'test');
};

if( is_readable($filename) ){
    echo file_get_contents($filename);
}



?>