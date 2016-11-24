<?php 
header("Content-type:text/html; charset=utf-8");
echo "有效路径cookie".'<br />';

/* 
 * cookie 的有效路径
 * 
 * cookie中的路径用来控制设置的cookie在哪个路径下有效，默认为'/'，
 * 在所有路径下都有，当设定了其他路径之后，则只在设定的路径以及子路径下有效
 *  */

setcookie('test', '1', 0, '/path');
var_dump( $_COOKIE );


?>