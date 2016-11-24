<?php 
header("Content-type:text/html; charset=utf-8");
echo "设置cookie".'<br />';

setcookie('test', time());
ob_start();
print_r($_COOKIE);

echo '<br />';

$content = ob_get_contents();
$content = str_replace(" ", "&nbsp", $content);
ob_clean();

echo '当前的cookie为：<br />';
echo nl2br($content);



?>