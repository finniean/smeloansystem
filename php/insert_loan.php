<?php $title='Workers' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php');require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$workers_uniqid = mysqli_real_escape_string($link, $_REQUEST['workers_uniqid']);
$loan = mysqli_real_escape_string($link, $_REQUEST['loan']);
$paymentplan = mysqli_real_escape_string($link, $_REQUEST[ 'paymentplan']);
$totalloan = ($loan * $paymentplan) + $loan;
$formatloan = (number_format(round($totalloan)));
$weeklydue =  (number_format(round($totalloan / 30)));

$sql="SELECT * FROM worker
WHERE workers_uniqid = '$workers_uniqid'";
$result=mysqli_query($link, $sql);
mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
$first_name = $row['first_name'];
$last_name = $row['last_name'];

$insert_sql = "INSERT INTO loans
(workers_uniqid, first_name, last_name, loan, loan_interest, total_loan) 
VALUES 
('$workers_uniqid', '$first_name', '$last_name', '$loan', '$paymentplan', '$formatloan')";
$insert_result=mysqli_query($link, $insert_sql);
?>

<!-- begin page content -->
<div class="pagebody clearfix">
   <div class="content-container">
      <div class="pageheader">
         <h1>Loan Successful!</h1>
      </div>
      <div class="pagecontent clearfix">
      <?php echo"
      <div class='form-result profile'>
      <div style='text-align: center;'>
      <label>Worker's Unique ID</label>
      <p>". $row['workers_uniqid'] ."</p>
      </div>
      <div style='text-align: center;'>
          <label>First Name</label>
          <p>". $row['first_name'] ."</p>
      </div>
      <div style='text-align: center;'>
          <label>Last Name</label>
          <p>". $row['last_name'] ."</p>
      </div>
      <div style='text-align: center;'>
          <label>Loan Interest</label>
          <p>% ". $paymentplan ."</p>
      </div>
      <div style='text-align: center;'>
          <label>Total Loan</label>
          <p>P ". $formatloan ."</p>
      </div>
      <div style='text-align: center;'>
          <label>Weekly Due</label>
          <p>P ". $weeklydue ."</p>
      </div></div>";
      ?>
         <table>
         </table>
      </div>
   </div>
</div>

<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); mysqli_close($link); ?>