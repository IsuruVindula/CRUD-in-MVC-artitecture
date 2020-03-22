<!DOCTYPE >
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>
    <title>Login</title>
    <link rel='stylesheet' href="<?php echo base_url('application\views\templates\bootstrap.min.css'); ?>">
</head>

<body>
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php echo $this->session->flashdata('verify_msg'); ?>
        </div>
    </div>

    <div>
        <h2>User Registration</h2>
        <form action="<?php echo base_url();?>Member_registration/validation" method="post" name="process">

            <!-- <?php if($this->session->userdata('message')){
                echo '<div class="alert alert-success">'.$this->session->flashdata('message').'</div>';
            } ?> -->

            <div class="form-group">
                <label>Enter Name</label>
                <input type='text' name='username' class="form-control" value="<?php echo set_value('username') ?>" /><br />
                <span class="text-danger"><?php echo form_error('username'); ?></span>

                <div class="form-group">
                <label>Enter Valid Email</label>
                <input type='text' name='useremail' class="form-control" value="<?php echo set_value('useremail') ?>" /><br />
                <span class="text-danger"><?php echo form_error('useremail'); ?></span>

                <label>Enter Password</label>
                <input type='password' name='userpwd' class="form-control" value="<?php echo set_value('userpwd') ?>" /><br />
                <span class="text-danger"><?php echo form_error('userpwd'); ?></span>

                <input type='Submit' name="register" value='Register' class="btn btn-info" />
            </div>
        </form>
    </div>
</body>
</html>