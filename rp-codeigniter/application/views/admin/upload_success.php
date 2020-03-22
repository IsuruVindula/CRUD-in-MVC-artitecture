<?php include 'includes/header.php'?>

    <h3>Your file was successfully uploaded and added to DATABASE!</h3>

    <ul>
        <?php foreach ($upload_data as $item => $value):?>
            <li><?php echo $item;?>: <?php echo $value;?></li>
        <?php endforeach; ?>
    </ul>
    <br>
    <img src="<?php echo base_url().'uploads/'.$upload_data["file_name"];?>" width='200px' height='200px'>
    <p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

<?php include 'includes/footer.php'?>