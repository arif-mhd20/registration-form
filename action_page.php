<?php
    $json = json_encode($_POST);  

    $myfile = fopen("Data.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $json);
    fclose($myfile);
    
?>