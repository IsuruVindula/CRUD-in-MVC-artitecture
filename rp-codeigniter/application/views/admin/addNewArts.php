<?php include_once('includes/header.php'); ?>

<div class="container"> <br>
    <h3>Add New Arts</h3> <hr>
    <?php echo form_open_multipart('welcome/artSave'); ?>
    <fieldset>

    
        <div class="form-group">
        <label for="Art_Name">Art Name</label>
        <div class="col-md-9">
            <?php echo form_input(['name'=>'Art_Name', 'placeholder'=>'Enter Art Name', 'class'=>'form-control']) ?>
        </div>

        <div class="col-md-5">
            <?php echo form_error('Art_Name', '<div class="text-danger">', '</div>'); ?>
        </div>
        </div>


        <div class="form-group">
        <label for="Artist_Name">Artist Name</label>
        <div class="col-md-9">
            <?php echo form_input(['name'=>'Artist_Name', 'placeholder'=>'Enter Artist Name', 'class'=>'form-control']) ?>
        </div>

        <div class="col-md-5">
            <?php echo form_error('Artist_Name', '<div class="text-danger">', '</div>'); ?>
        </div>
        </div>

        
        <div class="form-group">
        <label for="Category">Category</label>
        <div class="col-md-9">
        <?php echo form_input(['name'=>'Category', 'placeholder'=>'Enter the Category', 'class'=>'form-control']) ?>
        </div>

        <div class="col-md-5">
            <?php echo form_error('Category', '<div class="text-danger">', '</div>'); ?>
        </div>
        </div>

        <!--<div id="content">
            <form method="post" action="admin.php" enctype="multipart/form.data">
            <input type="hidden" name="size" value="1000000">
            <div>
                <input type="file" name="image">
            </div>
            <div>
                <textarea name="text" cols="40" rows="4" placeholder="Say something about this image... "></textarea>
            </div>
            
            </form>
        </div> -->  
        <?php echo form_upload(['name'=>'userfile','value'=>'Save']); ?>
        <?php echo form_error('userfile','<div class="text-danger">', '</div>' ); ?>
        <br><hr>
        

        
        </fieldset>
        <?php  echo anchor('welcome/admin', 'Back', ['class'=> 'btn btn-primary'] ); ?> 
        <?php echo form_submit(['name' => 'submit', 'value' => 'Upload Image', 'class'=>'btn btn-primary']); ?>
    </fieldset>
    <?php echo form_close(''); ?>

</div>

<br><hr>
<?php include_once('includes/footer.php'); ?>