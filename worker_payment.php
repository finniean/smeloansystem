<?php $title='Workers' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php'); require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php'); ?>

<!-- begin page content -->
<div class='pagebody clearfix'>
    <div class='content-container'>
        <div class='pageheader'>
            <h1>Worker's Payment</h1>
        </div>
        <div class='pagecontent clearfix'>

            <form class='' id='show_customer' action='/php/show_payment.php' method='post'>
                    <div class='form-group'>
                        <input type='text' class="form-control" name='workers_uniqid' placeholder="Worker's Unique ID">
                    </div>
                    <div class="form-group" style="text-align:center;">
                <input type='submit' class='btn btn-cstm' value='Search Customer'>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- end page content -->

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); ?>..