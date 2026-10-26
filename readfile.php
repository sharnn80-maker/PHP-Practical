<?php
// Open the file in read mode
$file = fopen("myfile.txt", "r");

if ($file) {
    // Read the entire file
    $content = fread($file,filesize("myfile.txt"));

    // Display the file content
    echo nl2br($content);

    // Close the file
    fclose($file);
} else {
    echo "Unable to Open file.";
}
?>