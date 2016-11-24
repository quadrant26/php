<?php 

/* header("Content-type:png, charset=utf-8");
echo 'GD库简介'."<br /><br /><br />"; */

header("content-type:image/png");
// 要对图形进行操作，首先要新建一个画布，通过imagecreatetruecolor函数可以创建一个真彩色的空白图片：
$img = imagecreatetruecolor(100, 100); // 创建画布大小

//GD库中对于画笔所用的颜色，需要通过imagecolorallocate函数进行分配，通过参数设定RGB的颜色值来确定画笔的颜色：
$red = imagecolorallocate($img, 0xFF, 0x00, 0x00);  // 设置图片的颜色


/*
然后使用imagestring函数来进行文字的绘制，这个函数的参数很多：
imagestring ( resource $image , int $font , int $x , int $y , string $s , int $col )，
可以通过$font来设置字体的大小，x,y设置文字显示的位置，$s是要绘制的文字,$col是文字的颜色。
*/
imagestring($img, 5, 0, 0, 'Hello, world',  $red);

// 通过指定路径参数将图像保存到文件中。
$filename = "img.png";

//线条绘制好以后，通过header与imagepng进行图像的输出。

/*使用imagepng可以将图像保存成png格式，如果要保存成其他格式需要使用不同的函数，
使用imagejpeg将图片保存成jpeg格式，
imagegif将图片保存成gif格式，
需要说明的是，imagejpeg会对图片进行压缩，因此还可以设置一个质量参数。

$filename = "img.jpg";
imagejpeg($img, $filename, 90);
*/
imagepng($img, $filename);

//最后可以调用imagedestroy释放该图片占用的内存。
imagedestroy($img);

if( file_exists($filename) ){
    echo "文件保存成功";
}

?>