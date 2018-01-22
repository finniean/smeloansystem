<?php $title='Workers' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php'); require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$uid = $_GET['uid'];

$sql="SELECT * FROM worker
WHERE uid='$uid'";
$result=mysqli_query($link, $sql);

if (mysqli_num_rows($result)> 0) {
while($row = mysqli_fetch_array($result))
        { 
		echo "
		<form class='' id='' action='/php/insert_edit.php?uid=". $row['uid'] ."' method='post' accept-charset='UTF-8'>
		<div class='form-group'>
                <label>Worker's Unique ID</label>
                <input type='text' class='form-control' name='workers_uniqid' value=". $row['workers_uniqid'] ." disabled>
            </div>
            <div class='form-group'>
                <label>First Name</label>
                <input type='text' class='form-control' name='first_name' value=". $row['first_name'] .">
            </div>
            <div class='form-group'>
                <label>Last Name</label>
                <input type='text' class='form-control' name='last_name' value=". $row['last_name'] .">
            </div>
            <div class='form-group'>
                <label>Date of Birth</label>
				<input type='text' class='form-control' name='birth_month' value=". $row['birth_month'] .">
                </div>
                <div class='form-group'>
                <input type='text' class='form-control' name='birth_day' value=". $row['birth_day'] .">
                </div>
                <div class='form-group'>
                <input type='text' class='form-control' name='birth_year' value=". $row['birth_year'] .">
                </div>
            </div>
            <div class='form-group'>
                <label>Home Address</label>
                <input type='text' class='form-control' name='home_address' value=". $row['home_address'] .">
            </div>
            <div class='form-group'>
                <label>Home Phone</label>
                <input type='text' class='form-control' name='home_phone' value=". $row['home_phone'] .">
            </div>
            <div class='form-group'>
                <label>Mobile Phone</label>
                <input type='text' class='form-control' name='mobile_phone' value=". $row['mobile_phone'] .">
            </div>
            <div class='form-group'>
                <label>Job Description</label>
                <input type='text' class='form-control' name='job_description' value=". $row['job_description'] .">
            </div>
            <div class='form-group'>
                <label>Weekly Income</label>
                <input type='text' class='form-control' name='income' value=". $row['income'] .">
            </div>
            <div class='btn-login clearfix' style='text-align: center;'>
                <button type='submit' class='btn btn-cstm'>Update</button>
            </div>
        </form>";
        }}
        else{}
?>