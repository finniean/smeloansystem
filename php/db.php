<?php

$link = mysqli_connect("localhost", "root", "", "ulendloansystem");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>