<?php

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');
session_start();

$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);

$sql="SELECT * FROM patients
WHERE email='$email' and password='$password'";

$result=mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
header("Location:/search_worker.php");
?>