<?php $title='Loan' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php') ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php'); ?>

<!-- begin page content -->
<div class='pagebody clearfix'>
    <div class='content-container'>
        <div class='pageheader'>
            <h1>Loan</h1>
        </div>
        <div class='pagecontent clearfix'>

            <form class='' action='/php/insert_loan.php' id='insert_loan' method='post'>
            <div class='form-group'>
                        <input type='text' class="form-control" name='workers_uniqid' placeholder="Workers Unique ID">
                    </div>
                    <div class='form-group'>
                        <input type='text' class="form-control"  name='loan' placeholder="Loan Amount">
                    </div>
                    <div class='form-group'>
                      <select id='paymentplan' class='form-control selectWidth' name='paymentplan'>
                     @for ($i = 1; $i
                     <=3 1; $i++)
                     <option value='0.05'>1 month</option>
                     <option value='0.08'>3 months</option>
                     <option value='0.1'>5 months</option>
                     @endfor
                  </select>
                    </div>
                    <div class='form-group' style="text-align:center;">
                <input type='submit' class='btn btn-cstm' value='Loan'>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); ?>..