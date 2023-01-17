<?php
// Indexed Arrays are sequence array of element with integer index numbers.
// Mostyly it is in Sequence.
// Index starts with 0.
// New elements get the index ifo highest index + 1 number.
// You can always break the sequence and add new elements to future index.

$arr = [1,2,3,4,5,6,7,8,9,10];
var_dump($arr);

echo "<br/>";
echo "<br/>";
$arr[100] = 100;
var_dump($arr);

$arr[] = 101;
var_dump($arr);


?>