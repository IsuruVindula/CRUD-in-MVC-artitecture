<h2><?php echo $post['title']; ?></h2>
<br>
<small>Posted on : <?php echo $post['created_at']; ?> </small><br>

<div>
    <?php echo $post['body']; ?>
</div>

<hr>
<a href="<?php echo base_url(); ?>/posts/edit/<?php echo $post['slug']; ?>" class="btn btn-default pull-left" >Edit</a>
<?php echo form_open('/posts/delete/'.$post['ID']); ?>
<input type="submit" value="Delete" class="btn btn-danger">