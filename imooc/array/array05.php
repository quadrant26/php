<?php 
header("Content-type:text/html; charset=utf-8");
echo "for循环访问索引数组里的值".'<br />';

$fruit=array('苹果','香蕉','菠萝');

for($i=0; $i<3; $i++){

    echo '<br>数组第'.$i.'值是：'.$fruit[$i];

}


?>