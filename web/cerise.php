<?php 

$filePath = "./bigF";

// Check if the file exists
if (file_exists($filePath)) {
    // Read the file
    $fileContent = file_get_contents($filePath);

    // Check if the file is not empty
    if (!empty($fileContent)) {
        echo 'File loaded!';
    } else {
        echo 'File exists, but it is empty.';
    }
} else {
    echo 'File does not exist.';
}