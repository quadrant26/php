<?php 
header("Content-type:text/html; charset=utf-8");
echo "foreach循环访问关联数组里的值".'<br />';



// foreach循环可以将数组里的所有值都访问到，下面我们展示下，用foreach循环访问关联数组里的值。

$fruit=array('apple'=>"苹果",'banana'=>"香蕉",'pineapple'=>"菠萝");
foreach($fruit as $k=>$v){
    echo '<br>水果的英文键名：'.$k.'，对应的值是：'.$v;
}


?>