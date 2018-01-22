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
$imageUpload = addslashes(file_get_contents($_FILES['imageUpload']['tmp_name']));
$today = date("Y-md");
$rand = sprintf("%04d", rand(0,9999));
$workers_uniqid = $rand . $today;

    $target_dir = ($_SERVER[ 'DOCUMENT_ROOT']. '/uploads/');
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $image=basename( $_FILES["imageUpload"]["name"],".jpg");

$sql = "INSERT INTO worker 
(workers_uniqid, first_name, last_name, birth_month, birth_day, birth_year, home_address, home_phone, mobile_phone, job_description, income, imageUpload) 
VALUES 
('$workers_uniqid','$first_name', '$last_name', '$birth_month', '$birth_day', '$birth_year', '$home_address', '$home_phone', '$mobile_phone', '$job_description', '$income', '$imageUpload')";

if(mysqli_query($link, $sql)){
    header("Location: /search_worker.php");
} 

else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

?>
