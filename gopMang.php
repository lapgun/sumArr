<?php
function ghopMang($arr1, $arr2, $arr3)
{
    for ($i = 0; $i < count($arr1); $i++) {
        array_push($arr3, $arr1[$i]);
    }

    for ($j = 0; $j < count($arr2); $j++) {
        array_push($arr3, $arr2[$j]);
    }
    return $arr3;
}

$arr1 = [1, 3, 4, 5, 7, 8, 9];
$arr2 = [2, 4, 6, 8, 3, 0];
$arr3 = [];
var_dump(ghopMang($arr1, $arr2, $arr3));
?>