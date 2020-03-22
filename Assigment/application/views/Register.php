<!DOCTYPE >
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>    
    <title>Login</title>
    <link rel='stylesheet' href="<?php echo base_url('application\views\templates\bootstrap.min.css'); ?>">
</head>

<body>
    <div>
        <h2>User Registration</h2>
        <form action="<?php echo base_url();?>Member_registration/validation" method="post" name="process">

            <!-- <?php if($this->session->flashdata('message')){
                echo '<div>'.$this->session->flashdata('message').'</div>';
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

    <div class=" table table-responsive">
        <table class="yable table-boarderd">
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>User email</th>
            </tr>
            <?php
                if($fetch_data ->num_rows() > 0){
                    
                    foreach($fetch_data->result() as $row){
                        ?>
                        <tr class="text-center">
                            <td><?php echo $row->user_id ?></td>
                            <td><?php echo $row->user_name ?></td>
                            <td><?php echo $row->user_email ?></td>
                            <td><a id="<?php echo $row->user_id?>" href="<?php echo site_url('Member_remove/deletepage/'.$row->user_id);?>" class="btn btn-info">Delete</a></td>
                            <td><a id="<?php echo $row->user_id?>" href="<?php echo site_url('Update_controller/updatepage/'.$row->user_id);?>" class="btn btn-info" >Edit</a></td>
                        </tr>
                    <?php
                    }
                }else{
                    ?>
                    <tr>
                        <td>No Data Found</td>
                    </tr>
                    <?php
                }

            ?>

        </table>

    </div>
</body>
</html>