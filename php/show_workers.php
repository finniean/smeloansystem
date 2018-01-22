<?php $title='Workers' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php');require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$first_name=mysqli_real_escape_string($link, $_REQUEST[ 'first_name']);
$last_name=mysqli_real_escape_string($link, $_REQUEST[ 'last_name']);
$workers_uniqid=mysqli_real_escape_string($link, $_REQUEST[ 'workers_uniqid']);

$sql="SELECT * FROM worker
WHERE first_name LIKE '%$first_name%' 
AND last_name LIKE '%$last_name%'
AND workers_uniqid LIKE '%$workers_uniqid%'";
$result=mysqli_query($link, $sql);
?>

<!-- begin page content -->
<div class="pagebody clearfix">
   <div class="content-container">
      <div class="pageheader">
         <h1>Worker's List</h1>
      </div>
      <div class="pagecontent clearfix">
      <div class="form-result">
         <table>
         	<?php if (mysqli_num_rows($result)> 0) { echo "
			<tr>
				   <th>First Name</th>
				   <th>Last Name</th>
				   <th>Birthday</th>
				   <th>Home Address</th>
				</tr>
			";while($row = mysqli_fetch_assoc($result)) { echo "
               <tr class='resultsrow'>
                   <td>" . $row['first_name']. "</td>
                   <td>" . $row["last_name"]. "</td>
                   <td>" . $row["birth_month"]. " " . $row["birth_day"]. " " . $row["birth_year"]. "</td>
				   <td>" . $row["home_address"] . "</td>
				   <td><a href='view_worker.php?uid=". $row['uid'] ."'>View</td>
           <td><a href='edit_worker.php?uid=". $row['uid'] ."'>Edit</td>
           <td><a href='delete.php?uid=". $row['uid'] ."'>Delete</td>
               </tr>"; } } else { echo "<div class='alert alert-success' role='alert'><p>0 results</p></div>"; } ?>
         </table>
         </div>
      </div>
   </div>
</div>

<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); mysqli_close($link); ?>