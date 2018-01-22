<?php 

require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$uniqid = $_GET['uniqid'];
$amount_pay=mysqli_real_escape_string($link, $_REQUEST[ 'amount_pay']);

$sql="SELECT * FROM loans
WHERE workers_uniqid = '$uniqid'";
$result=mysqli_query($link, $sql);

if (mysqli_num_rows($result)> 0) {
while($row = mysqli_fetch_array($result))
        { $total_loan = $row['total_loan']; }}
        else{
        }

$loan = str_replace(",", "", $total_loan);
$remaining_balance = $loan - $amount_pay;

echo "<div><p>Your new updated balance is ". $remaining_balance ."</p></div>";

include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); mysqli_close($link); ?>