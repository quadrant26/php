<?php 
header("Content-type:text/html; charset=utf-8");
echo "设置cookie".'<br />';

/* 1.
 * setcookie();
 * PHP设置Cookie最常用的方法就是使用setcookie函数，setcookie具有7个可选参数，我们常用到的为前5个：

    name（ Cookie名）可以通过$_COOKIE['name'] 进行访问
    value（Cookie的值）
    expire（过期时间）Unix时间戳格式，默认为0，表示浏览器关闭即失效
    path（有效路径）如果路径设置为'/'，则整个网站都有效
    domain（有效域）默认整个域名都有效，如果设置了'www.imooc.com',则只在www子域中有效
 * */

$value = 'test';
setcookie("TestCookie", $value);
setcookie("TestCookie", $value, time()+3600); // 有效期为一个小时
setcookie("TestCookie", $value, time()+3600, "/path/", "imooc.com");    // 设置路径和域
echo '<br />';


/* 2.
 * PHP中还有一个设置Cookie的函数setrawcookie，setrawcookie跟setcookie基本一样，唯一的不同就是value值不会自动的
 * 进行urlencode，因此在需要的时候要手动的进行urlencode。
 * */

setrawcookie('cookie_name', rawurlencode($value), time()*60*60*24);

print_r($_COOKIE);
echo '<br />';


/* 3.
 * 通过 header 的方式进行设置
 * 
 * header("Set-cookie:cookie_name=value");
 * 
 * */
 
header("Set-cookie:cookie_name='$value'");
 
echo '<br />';

//
$s = time();
setcookie('test', $value, $value+3600, '/path/', 'imooc.com');
if( isset( $_COOKIE['test']) ){
    echo 'success';
}



?>