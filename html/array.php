<?php

$arr = ["onion_1","Capcicum_2","corn_3","chilli-flex_4",
"white-sauce_5","red-sauce_6","tomato_7","lemon_8","sugar_9","chilli_10"];
$size = count($arr);
$arr2 = [];
for($i=0;$i<$size;$i++){
    $one = explode("_",$arr[$i]);
    array_push($arr2,$one[1]);
}
print_r($arr2);
echo"</br>";
// print_r($arr2[1][0]);
