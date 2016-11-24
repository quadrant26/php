<?php

echo "后盾网";

$uname = addslashes("誠'");
// \ ==> 0x5c
// 0xdc\'  === 0xdc 0x5c 0x5c 0x5c '
// 0xdc 0dc5c => 誠


$arr = array(1, 3, 3, 4);
print_r($arr);

$db = mysqli("localhost:8080", "root", "", "webclass");
$uname = $_GET['uname'];
$password = $_GET['password'];

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