<?php 

/* header("Content-type:png, charset=utf-8");
echo 'GD库简介'."<br /><br /><br />"; */

header("content-type:image/png");
// 要对图形进行操作，首先要新建一个画布，通过imagecreatetruecolor函数可以创建一个真彩色的空白图片：
$img = imagecreatetruecolor(100, 100); // 创建画布大小

//GD库中对于画笔所用的颜色，需要通过imagecolorallocate函数进行分配，通过参数设定RGB的颜色值来确定画笔的颜色：
$red = imagecolorallocate($img, 0xFF, 0x00, 0x00);  // 设置图片的颜色


// 然后我们通过调用绘制线段函数imageline进行线条的绘制，通过指定起点跟终点来最终得到线条。
imageline($img, 0, 0, 100, 100, $red);

//线条绘制好以后，通过header与imagepng进行图像的输出。
imagepng($img);

//最后可以调用imagedestroy释放该图片占用的内存。
imagedestroy($img);

?>