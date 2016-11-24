<?php 
header("Content-type:text/html; charset=utf-8");
echo "session 使用".'<br />';

/* 
 *session的使用

 *  */

//1. 开启session
session_start();
//2. 对session 进行读写
$_SESSION['test'] = time();
var_dump( $_SESSION );

//1. 
// session_start();
$_SESSION['ary'] = array('name' => 'jobs');
$_SESSION['obj'] = new stdClass();
var_dump($_SESSION);


//在这里设置name的session值为jobs
session_start();
$_SESSION['name'] = 'jobs';
echo $_SESSION['name'];

?>