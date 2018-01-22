<?php $title='Workers' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php');require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$workers_uniqid=mysqli_real_escape_string($link, $_REQUEST[ 'workers_uniqid']);

$sql="SELECT * FROM loans
WHERE workers_uniqid = '$workers_uniqid'";
$result=mysqli_query($link, $sql);

if (mysqli_num_rows($result)> 0) {
while($row = mysqli_fetch_array($result))
        { 
            $total_loan = $row['total_loan'];
            $workers_uniqid = $row["workers_uniqid"];
    echo "
    <form  class='' id='show_customer' action='/php/process_payment.php?uniqid=". $workers_uniqid . "' method='POST'>
        <div>
        <label>Name</label>
        <p>" . $row['first_name']. " " . $row['last_name']. "</p>
        </div>
        <div class='form-group'>
                    <label>Total Loans</label>
                        <input type='text' name='total_loan' value=". $total_loan ." disabled>
                    </div>
        <div class='form-group'>
                    <label>Amount to Pay</label>
                        <input type='text' name='amount_pay'>
                    </div>
                    <div class='btn-login clearfix'>
                <button type='submit' class='btn btn-cstm'>Process</button>
            </div>
        </form>";
        }}
        else{
          echo "<div class='alert alert-success' role='alert'><p>0 results</p></div>";
        }

include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php');?>