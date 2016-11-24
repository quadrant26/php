<?php 
header("Content-type:text/html; charset=utf-8");
echo "session与cookie的异同".'<br />';

/* 
 *session与cookie的异同

  cookie将数据存储在客户端，建立起用户与服务器之间的联系，通常可以解决很多问题，但是cookie仍然具有一些局限：
  cookie相对不是太安全，容易被盗用导致cookie欺骗
  
    单个cookie的值最大只能存储4k
    每次请求都要进行网络传输，占用带宽

  session是将用户的会话数据存储在服务端，没有大小限制，通过一个session_id进行用户识别，
  PHP默认情况下session  id是通过cookie来保存的，因此从某种程度上来说，seesion依赖于cookie。
    但这不是绝对的，session  id也可以通过参数来实现，只要能将session id传递到服务端进行识别的机制都可以使用session。
 *  */

// 开始使用 session
session_start();
// 设置一个 session
$_SESSION['test'] = time();
// 显示当前的session_id 
echo "session_id:".session_id();
echo '<br />';

// 读取session 值
echo $_SESSION['test'];

// 销毁一个session
echo '<br />';
var_dump( $_SESSION );


?>