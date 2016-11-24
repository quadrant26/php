<?php 

/* header("Content-type:png, charset=utf-8");
echo 'GD库简介'."<br /><br /><br />"; */

header("content-type:image/png");
$img = imagecreatetruecolor(100, 100); // 创建画布大小
$red = imagecolorallocate($img, 0xFF, 0x00, 0x00);  // 设置图片的颜色
imagefill($img, 0, 0, $red);                // 填充图片
imagepng($img);
imagedestroy($img);

?>