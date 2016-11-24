<?php 

header("Content-type:text/html; charset=utf-8");
echo "PHP 取得文件修改日期"."<br /></br />";

/*
 *  fileowner：获得文件的所有者
    filectime：获取文件的创建时间
    filemtime：获取文件的修改时间
    fileatime：获取文件的访问时间
 * */

$filename = 't.txt';
$mtime = filemtime($filename);
echo '修改时间：'.date('Y-m-d H:i:s', $mtime);


?>