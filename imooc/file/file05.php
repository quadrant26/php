<?php 

header("Content-type:text/html; charset=utf-8");
echo "PHP 取得文件大小"."<br /></br />";

/*
 *  通过filesize函数可以取得文件的大小，文件大小是以字节数表示的。
 * */

$filename = 't.txt';
$msize = filesize($filename);
echo $msize;

echo "<br /></br />";

$filename = 'si.txt';
$msize = filesize($filename);
echo $msize;
echo "<br /></br />";

function getsize($size, $format='kb'){
    $p = 0;
    if( $format == 'kb' ){
        $p = 1;
    }else if( $format == 'mb'){
        $p = 2;
    }else if( $format == 'gb' ){
        $p = 3;
    }
    
    $size /= pow(1024, $p);
    return number_format($size, 3);
}

$filename = 'si.txt';
$msize = filesize($filename);

echo getsize($msize, 'kb').'kb';

?>