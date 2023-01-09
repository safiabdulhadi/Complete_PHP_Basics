<?php
/**
 * 1. List all Files in a Directory
 * 2. Check for Specific Files in a Directory
 * 3. Check Directory
 * 4. Copy Files between directories/
 */

// Sample 1: List all files in a Directory
// scandir
$path = "TestFolder1";
$result = scandir($path);
var_dump($result);

foreach($result as $dir){
    if($dir != "." && $dir != ".."){
    echo $dir ;
    }
}
?>