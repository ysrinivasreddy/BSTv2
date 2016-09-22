<?php
/*
The Page Loop
=============
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
      <!--  <header>
            <h2><?php //the_title()?></h2>
        </header>-->
        <?php the_content()?>
        <?php wp_link_pages(); ?>
    </article>
<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); ?>
<?php endif; ?>
