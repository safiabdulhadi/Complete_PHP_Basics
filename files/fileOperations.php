<?php

// Check if File existes
$fileName = "MyFolder.txt";

// Check File exists
if(file_exists($fileName)){
    echo "File exists ";
    // Check of it is Direcotry
    if(is_dir($fileName)){
        die("It is a Directory not File");
    }
    // Copy File
copy($fileName, "CopyFile.txt");
copy("CopyFile.txt", "CopyFile1.txt");

// Rename the File
rename("CopyFile1.txt", "RenamedFile.txt");
}else{
    echo "File / Directory does not exist";
    echo "<br>";
    die("No Such Files");
}

?>