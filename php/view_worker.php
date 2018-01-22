<?php $title='Workers' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php'); require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$uid = $_GET['uid'];

$sql="SELECT * FROM worker
WHERE uid='$uid'";
$result=mysqli_query($link, $sql);

if (mysqli_num_rows($result)> 0) {
while($row = mysqli_fetch_array($result))
        { 
		echo "<div class='form-result profile'>
						<div>
				<img src='data:image/jpeg;base64," . base64_encode($row['imageUpload']) . "' width='250' height='250' alt='/uploads/photoholder.jpg'>
				</div>
               <div style='text-align: center;'>
				<label>Name</label>
				<p>" . $row['first_name']. " " . $row['last_name']. "</p>
				</div>
				<div style='text-align: center;'>
				<label>Birthday</label>
				<p>" . $row["birth_month"]. " " . $row["birth_day"]. " " . $row["birth_year"]. "</p>
				</div>
				<div style='text-align: center;'>
				<label>Address</label>
				<p>" . $row["home_address"] . "</p>
				</div>
				<div style='text-align: center;'>
				<label>Home Phone</label>
				<p>" . $row["home_phone"] . "</p>
				</div>
				<div style='text-align: center;'>
				<label>Mobile Phone</label>
				<p>" . $row["mobile_phone"] . "</p>
				</div>
				<div style='text-align: center;'>
				<label>Job Description</label>
				<p>" . $row["job_description"] . "</p>
				</div>
				<div style='text-align: center;'>
				<label>Income</label>
				<p>" . $row["income"] . "</p>
				</div>
				</div>";
        }}
        else{}

include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php');?>