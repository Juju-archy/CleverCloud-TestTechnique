<?php 

$filePath = "./bigF";

// Vérifier si le fichier existe
if (file_exists($filePath)) {
    // Lire le contenu du fichier
    $fileContent = file_get_contents($filePath);

    // Vérifier si le fichier n'est pas vide
    if (!empty($fileContent)) {
        echo 'File loaded!';
    } else {
        echo 'File exists, but it is empty.';
    }
} else {
    echo 'File does not exist.';
}