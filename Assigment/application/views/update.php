<!DOCTYPE >
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>    
    <title>Login</title>
    <link rel='stylesheet' href="<?php echo base_url('application\views\templates\bootstrap.min.css'); ?>">
</head>

<body>
    <div>
        <h2>User Update</h2>
        <form action="<?php echo base_url();?>Update_controller/update" method="post" name="update">

            <!-- <?php if($this->session->flashdata('message')){
                echo '<div>'.$this->session->flashdata('message').'</div>';
            } ?> -->

            <div class="form-group">
                <label>ID</label>
                <input type='text' name='userid' class="form-control" value="<?php echo $id ?>" readonly/><br />
                <span class="text-danger"><?php echo form_error('username'); ?></span>

                <label>Enter Name</label>
                <input type='text' name='username' class="form-control" value="<?php echo $nm ?>" /><br />
                <span class="text-danger"><?php echo form_error('username'); ?></span>

                <div class="form-group">
                <label>Enter Valid Email</label>
                <input type='text' name='useremail' class="form-control" value="<?php echo $em ?>" /><br />
                <span class="text-danger"><?php echo form_error('useremail'); ?></span>

                <label>Enter Password</label>
                <input type='text' name='userpwd' class="form-control" value="<?php echo $pm ?>" /><br />
                <span class="text-danger"><?php echo form_error('userpwd'); ?></span>                            
            
                <input type='Submit' name="edit" value='update' class="btn btn-info" />            
            </div>
        
    </div>
</body>
</html>