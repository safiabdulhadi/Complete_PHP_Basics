<?php

// $arr[0] = "This is a string";
// $arr[1] = true;
// $arr[2] = 345;

// var_dump($arr);
// echo "<br>";

// $arr1 = ["this is a string", true, 100, 16, 15];
// var_dump($arr1);



/*
foreach
*/

$arr2 = ["M", "T", "W", "T", "F", "S", "S"];
var_dump($arr2);
echo "<br>";
 $counter = 0;
echo "<br>";
foreach($arr2 as $index => $value){
    // echo "[$counter] => $value  ". "<br>";
    echo "[$index] => $value  ". "<br>";
    // echo "$index => $value  ". "<br>";

        $counter++;
}

?>