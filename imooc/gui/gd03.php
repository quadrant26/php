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


//线条绘制好以后，通过header与imagepng进行图像的输出。
imagepng($img);

//最后可以调用imagedestroy释放该图片占用的内存。
imagedestroy($img);

?>