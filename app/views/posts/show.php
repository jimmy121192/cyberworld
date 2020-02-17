<?php require APPROOT . '/views/inc/header.php' ;?>
<a href="<?php echo URLROOT;?>/posts" class="btn btn-dark"><i class="fa fa-arrow-circle-left"></i> Back</a>
<br>
<h1 class="post-title text-info"><?php echo $data['post']->title ;?></h1>
<div class="bg-secondary text-white p-2 mb-3">
Written by <strong><?php echo $data['user']->name; ?></strong> on <?php echo $data['post']->created_at; ?>
</div>
<p><?php echo $data['post']->body; ?></p>
<?php if($data['post']->user_id == $_SESSION['user_id']) :?>
<hr>
<a href="<?php echo URLROOT;?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
<form class="pull-right" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id;?>" method="post">
<input type="submit" value="Delete" class="btn btn-danger" />
</form>
<?php endif; ?>

<?php require APPROOT . '/views/inc/footer.php' ;?>