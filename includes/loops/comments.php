<?php
 
// Do not delete this section
if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){
  die ('Please do not load this page directly. Thanks!'); }
if ( post_password_required() ) { ?>
  <div class="alert alert-warning">
    <?php _e('This post is password protected. Enter the password to view comments.', 'bstv2'); ?>
  </div>
<?php
  return; 
}
// End do not delete section
 
if (have_comments()) : ?>

<h3><?php _e('Feedback', 'bstv2'); ?></h3>
<p class="text-muted" style="margin-bottom: 20px;">
 <i class="glyphicon glyphicon-comment"></i>&nbsp; <?php _e('Comments', 'bstv2');  ?>: <?php comments_number(__('None', 'bstv2'), '1', '%'); ?>
</p>
  
<ol class="commentlist">
  <?php wp_list_comments('type=comment&callback=bst_comment');?>
</ol>

<ul class="pagination">
  <li class="older"><?php previous_comments_link() ?></li>
  <li class="newer"><?php next_comments_link() ?></li>
</ul>

<?php
  else :
	  if (comments_open()) :
  echo "<p class='alert alert-info'>" . __('Be the first to write a comment.', 'bstv2') . "</p>";
		else :
			echo "<p class='alert alert-warning'>" . __('Comments are closed for this post.', 'bstv2') . "</p>";
		endif;
	endif;
?>

<?php if (comments_open()) : ?>
<section id="respond">  
<?php comment_form(); ?> 
</section>
<?php endif; ?>
