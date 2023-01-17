<?php

$arr = [];
$arr[0] = 1;
$arr[2] = "String";
$arr[5] = true;
$arr[10] = 14;
var_dump($arr);

echo "<br>";

$arr[] = "New string 1";
$arr[] = "New string 23242";

var_dump($arr);
?>