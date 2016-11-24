<?php 

/* header("Content-type:png, charset=utf-8");
echo 'GD库简介'."<br /><br /><br />"; */

header("content-type:image/png");

$filename = '01.jpg';
$img = imagecreatefromjpeg($filename);

// 要对图形进行操作，首先要新建一个画布，通过imagecreatetruecolor函数可以创建一个真彩色的空白图片：
//$img = imagecreatetruecolor(100, 40); // 创建画布大小

//GD库中对于画笔所用的颜色，需要通过imagecolorallocate函数进行分配，通过参数设定RGB的颜色值来确定画笔的颜色：
$red = imagecolorallocate($img, 0xFF, 0x00, 0x00);  // 设置图片的颜色
$black = imagecolorallocate($img, 0x00, 0x00, 0x00);
$green = imagecolorallocate($img, 0x00, 0xFF, 0x00);
$white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);

// 填充画布
imagefill($img, 0, 0, $white);

// 生成随机数
$code = '';
for($i = 0; $i < 4; $i++){
    $code.= rand(0, 9);
}

// 写入随机数
imagestring($img, 5, 0, 0, $code, $black);

// 加入噪点干扰
for( $i = 0; $i < 50; $i++ ){
    imagesetpixel($img, rand(0, 100), rand(0, 100), $black);
    imagesetpixel($img, rand(0, 100), rand(0, 100), $green);
    imagesetpixel($img, rand(0, 100), rand(0, 100), $red);
}

imagepng($img);

//最后可以调用imagedestroy释放该图片占用的内存。
imagedestroy($img);

?>