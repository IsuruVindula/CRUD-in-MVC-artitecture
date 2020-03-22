<?= $title ?>

<?php echo validation_errors(); ?>
 
<?php
echo form_open('posts/create'); ?>

<div class = "form_group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
</div>

<div class = "form_group">
    <label>Body</label>
    <textarea name="body" class="form-control" placeholder="Add body"></textarea>
</div>

<button type="submit" class="btn btn-default">submit</button>
</form>