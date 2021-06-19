<?php
      

    $myfile = fopen("Data.txt", "r") or die("Unable to open file!");
    $json = fread($myfile, filesize("Data.txt"));
    fclose($myfile);

    $RegInfo = json_decode($json, true);

    if($RegInfo["Username"] == $_POST["Username"]){
        if($RegInfo["pwd"] == $_POST["pwd"]){
           //echo ("logged in successfully");
           header("Location: http://localhost/registration-form/welcome.php");
            exit();

        }  else echo("Wrong password");
    }else echo("Wrong username ");
    
?>