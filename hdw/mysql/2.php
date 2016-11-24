<?php

$db = mysqli("localhost:8080", "root", "", "webclass");
$uname = $_POST['uname'];
$password = $_POST['password'];

if(!get_magic_quotes_gpc()):
    $uname = addcslashes($uname);
    $password = addcslashes($password);
endif;

// 1 多字节或宽字节有注入的风险
// $db -> query("set names gbk");

// 2 规避 SQL 注入的风险
$charet = "set character_set_connection=gbk; character_set_results=gbk;character_set_client=binary";
$db->query($charet);

$sql = "select id from user where name='$uname' and password = '{$password}'";

$result = $db->query($sql);
/*
echo result;
echo $db->affected_rows;
print_r($result->fetch_assoc());

echo $sql;
*/
if($db->affected_rows > 0){
    echo "{$row['uname']}登录成功";
}else{
    echo "登录失败";
}

?>