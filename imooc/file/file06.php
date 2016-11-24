<?php 

header("Content-type:text/html; charset=utf-8");
echo "PHP 删除文件"."<br /></br />";

/*
 *  PHP使用unlink函数进行文件删除。
 * */

$filename = 't.txt';
unlink($filename);

if( is_file($filename) ){
    echo file_get_contents($filename);
}else{
    echo '文件不存在';
}

// 删除文件夹使用rmdir函数，文件夹必须为空，如果不为空或者没有权限则会提示失败
$dir = '文件夹路径';
rmdir($dir);


// 如果文件夹中存在文件，可以先循环删除目录中的所有文件，然后再删除该目录，循环删除可以使用glob函数遍历所有文件。

/* foreach (glob("*") as $filename) {
    unlink($filename);
} */

?>