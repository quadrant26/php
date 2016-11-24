<?php 
header("Content-type:text/html; charset=utf-8");
echo "session 删除".'<br />';

/* 
 *session 删除
    1. 删除某个session值可以使用PHP的unset函数，删除后就会从全局变量$_SESSION中去除，无法访问。
    2. 如果要删除所有的session，可以使用session_destroy函数销毁当前session，session_destroy会删除所有数据，但是session_id仍然存在。
*/

session_start();
$_SESSION['name'] = 'jobs';
unset( $_SESSION['name'] );

if( isset( $_SESSION['name'] ) ){
    echo $_SESSION['name'];
}else{
    echo 'NO'.'<br />';
}

/*
 * session_destroy并不会立即的销毁全局变量$_SESSION中的值，只有当下次再访问的时候，$_SESSION才为空，
 * 因此如果需要立即销毁$_SESSION，可以使用unset函数
 * @var unknown*/

$_SESSION['name'] = 'jobs';
$_SESSION['time'] = time();
session_destroy();


unset($_SESSION);
session_destroy();
var_dump( $_SESSION );


























?>