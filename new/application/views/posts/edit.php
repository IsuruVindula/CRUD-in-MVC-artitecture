<?= $title ?>

<?php echo validation_errors(); ?>
 
<?php
echo form_open('Posts/update'); ?>

<input type="hidden" value="<?php echo $post['id']; ?>" name="id">

<div class = "form_group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']?>">
</div>

<div class = "form_group">
    <label>Body</label>
    <textarea name="body" class="form-control" placeholder="Add body" ><?php echo $post['body']?></textarea>
</div>

<button type="submit" class="btn btn-default">Submit</button>