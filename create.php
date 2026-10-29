<?php
$file = fopen("myfile.txt","w");
if($file){
    fwrite($file,"Hello World!\n");
    fwrite($file,"This file was created using php.");
    fclose($file);
    echo"file created and opened successfully!";
}
else{
    echo"error opening the file.";
}
?>