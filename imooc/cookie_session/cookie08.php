<?php 
header("Content-type:text/html; charset=utf-8");
echo "session 存储用户的登录信息".'<br />';

/* 
 *使用session来存储用户的登录信息

    session可以用来存储多种类型的数据，因此具有很多的用途，常用来存储用户的登录信息，购物车数据，或者一些临时使用的暂存数据等。
    
        用户在登录成功以后，通常可以将用户的信息存储在session中，一般的会单独的将一些重要的字段单独存储，然后所有的用户信息独立存储。
    
    $_SESSION['uid'] = $userinfo['uid'];
    $_SESSION['userinfo'] = $userinfo;
    
    一般来说，登录信息既可以存储在sessioin中，也可以存储在cookie中，他们之间的差别在于session可以方便的存取多种数据类型，
    而cookie只支持字符串类型，同时对于一些安全性比较高的数据，cookie需要进行格式化与加密存储，而session存储在服务端则安全性较高。

*/


session_start();

//假设用户登录成功获得了以下用户数据
$user_info = array(
    'uid' => 10000,
    'name' => 'spark',
    'email' => 'spark@imooc.com',
    'sex' => 'man',
    'age' => '18'
);

// 将所有用户信息保存在session中
$_SESSION['uid'] = $user_info['uid'];
$_SESSION['name'] = $user_info['name'];
$_SESSION['userinfo'] = $user_info;

echo "Welcome!   ".$_SESSION['name'].'<br />';

// 将用户信息存储到 cookie 中
$secureKey = 'imooc';
$str = serialize($user_info);   // 将用户信息序列化
echo "用户信息加密前：".$str."<br />";

$str = base64_encode( mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $secureKey, $str, MCRYPT_MODE_ECB));
echo "用户信息加密后：".$str."<br />";

echo '<br /><br /><br />';


//将加密后的用户数据存储到cookie中
setcookie('userinfo', $str);
print_r( $_COOKIE);

echo '<br />';

//当需要使用时进行解密
$str = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $secureKey, base64_decode($str), MCRYPT_MODE_ECB);
$uinfo = unserialize($str);
echo "解密后的用户信息：<br>";
var_dump($uinfo);





















?>