<?php include_once('header.php'); ?>

<div class="container"> <br>
    <h3>Delete Art</h3> <hr>
    <?php echo form_open('welcome/delete'); ?>
    
    <fieldset>
    
        <div class="form-group">
        <label for="Art_Id">Art ID</label>
        <div class="col-md-9">
            <?php echo form_input(['name'=>'Art_Id', 'placeholder'=>'Enter Art ID', 'class'=>'form-control']) ?>
        </div>

        <div class="col-md-5">
            <?php echo form_error('Art_Id', '<div class="text-danger">', '</div>'); ?>
        </div>
        </div>

        

        
        <?php  echo anchor('welcome', 'Back', ['class'=> 'btn btn-primary'] ); ?> 
        <?php echo form_submit(['name' => 'submit', 'value' => 'Delete Image', 'class'=>'btn btn-primary']); ?>
    </fieldset>
    <?php echo form_close(''); ?>
    <br>
</div>

<br><hr>
<?php include_once('footer.php'); ?>