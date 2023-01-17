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
echo "<br>";
// Remove . and .. directories
$directory = array_diff($result, ['.', '..']);
var_dump($directory);


//Sample 2 and 3
/**
 *  3. Check Directory
 * 4. Copy Files between directories/
 */

 echo "<br>";
$result = scandir($path);

$result = array_diff($result , ['.', '..']);

foreach($result as $dir){
    if(is_file($path . "/" . $dir)){
        echo $dir;
    }
}
echo "<br>";

$result = glob("*.php");
var_dump($result);

echo "<br>";

if(!file_exists("TestFolder3")){
    mkdir("TestFolder3");
}
// Copy Files
copy("TestFolder1/fileDirectories.php", "TestFolder3/fileDirectories3.php");
?>