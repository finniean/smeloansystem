<?php

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$birth_month = mysqli_real_escape_string($link, $_REQUEST['birth_month']);
$birth_day = mysqli_real_escape_string($link, $_REQUEST['birth_day']);
$birth_year = mysqli_real_escape_string($link, $_REQUEST['birth_year']);
$home_address= mysqli_real_escape_string($link, $_REQUEST['home_address']);
$home_phone= mysqli_real_escape_string($link, $_REQUEST['home_phone']);
$mobile_phone= mysqli_real_escape_string($link, $_REQUEST['mobile_phone']);
$job_description= mysqli_real_escape_string($link, $_REQUEST['job_description']);
$income= mysqli_real_escape_string($link, $_REQUEST['income']);
$uid = $_GET['uid'];

$sql = mysqli_query($link, "UPDATE `worker` SET `first_name` = '$first_name' , `last_name` = '$last_name' , `birth_month` = '$birth_month' , `birth_day` = '$birth_day' , `birth_year` = '$birth_year' , `home_address` = '$home_address' , `home_phone` = '$home_phone' , `mobile_phone` = '$mobile_phone' , `job_description` = '$job_description' WHERE `worker`.`uid` = '$uid' ;");

header("Location: /search_worker.php");

mysqli_close($link);

?>
