<?php $title='Register' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php'); include($_SERVER[ 'DOCUMENT_ROOT']. '/required/navigation.php'); ?>

<div class='pagebody clearfix'>
    <div class='content-container'>
        <div class='pageheader'>
            <h1>Registration</h1>
        </div>

        <form action='/php/insert_register.php' method='post' accept-charset='UTF-8' enctype="multipart/form-data">
            <div class='form-group'>
                <input type='text' class='form-control' name='first_name' placeholder="First Name">
            </div>
            <div class='form-group'>
                <input type='text' class='form-control' name='last_name' placeholder="Last Name">
            </div>
            <div class='form-group'>
                <label>Date of Birth</label>
                <select id='selectDate ' class='form-control selectWidth' name='birth_month'>
                <option>Month</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                </select>
                </div>
                <div class='form-group'>
                <input type='number' class='form-control ' placeholder='Day' name='birth_day'>
                </div>
                <div class='form-group'>
                <input type='number' class='form-control ' placeholder='Year' name='birth_year'>
                </div>
            <div class='form-group'>
                <input type='text' class='form-control' name='home_address' placeholder="Home Address">
            </div>
            <div class='form-group'>
                <input type='text' class='form-control' name='home_phone' placeholder="Home Phone">
            </div>
            <div class='form-group'>
                <input type='text' class='form-control' name='mobile_phone' placeholder="Mobile Phone">
            </div>
            <div class='form-group'>
                <input type='text' class='form-control' name='job_description' placeholder="Job Description">
            </div>
            <div class='form-group'>
                <input type='text' class='form-control' name='income' placeholder="Weekly Income">
            </div>
                <div class='form-group'>
                    <label>Photo</label>
                    <input type="file" name="imageUpload" />
                </div>
                <div class='form-group'>
                    <label>Additional Files</label>
                    <input type="file" name="add_files" />
                </div>
            <div class='btn-login clearfix' style="text-align:center;">
                <button type='submit' class='btn btn-cstm'>Register</button>
            </div>
        </form>
</div>
    </div>
</div>

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php'); ?>..