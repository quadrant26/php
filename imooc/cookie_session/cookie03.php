<?php 
header("Content-type:text/html; charset=utf-8");
echo "删除cookie".'<br />';

/* 
 * 删除cookie
 * 
 * 可以看到将cookie的过期时间设置到当前时间之前，则该cookie会自动失效，也就达到了删除cookie的目的。
 *  */

setcookie('test', '', time()-1);

/* 通过 header 方式删除
 * 
 *  */

header("Set-cookie:test=656256366; expires=".gmdate('D, d M Y H:i:s \G\M\T', time()-1));


?>