<?php 
header("Content-type:text/html; charset=utf-8");
echo "foreach循环访问索引数组里的值".'<br />';

$fruit=array('苹果','香蕉','菠萝');

foreach($fruit as $k=>$v){
    echo '<br/>第'.$k.'个是:'.$v;
}


?>