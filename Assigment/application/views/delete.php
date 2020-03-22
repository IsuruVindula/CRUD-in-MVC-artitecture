<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
    <link rel='stylesheet' href="<?php echo base_url('application\views\templates\bootstrap.min.css'); ?>">
</head>

<body>
    <form action="<?php base_url();?>delete" method="post">

    <label>Enter Name</label>
    <input type='text' name='username' class="form-control" value="<?php ('username') ?>" /><br />
    <span class="text-danger"><?php echo form_error('username'); ?></span>

    <label>Enter Password</label>
    <input type='password' name='userpwd' class="form-control" value="<?php ('userpwd') ?>" /><br />
    <span class="text-danger"><?php echo form_error('userpwd'); ?></span> 

    <input type='Submit' name="Delete" value='delete' class="btn btn-info" />
    </form>
    
</body>
</html>