<?php
/*
The Single Posts Loop
=====================
*/
?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
            <h2><?php the_title()?></h2>
            <h4>
                <em>
                    <span class="text-muted author"><?php _e('By', 'bstv2'); echo " "; the_author() ?>,</span>
                   <time  class="text-muted" datetime="<?php the_time( get_option('date_format') ); ?>"><?php the_time( get_option('date_format') ); ?></time>
                </em>
            </h4>
            <p class="text-muted" style="margin-bottom: 30px;">
                <i class="glyphicon glyphicon-folder-open"></i>&nbsp; <?php _e('Filed under', 'bstv2'); ?>: <?php the_category(', ') ?><br/>
                <i class="glyphicon glyphicon-comment"></i>&nbsp; <?php _e('Comments', 'bstv2'); ?>: <?php comments_popup_link(__('None', 'bstv2'), '1', '%'); ?>
            </p>
        </header>
        <section>
            <?php the_post_thumbnail( '', array( 'class' => 'img-responsive' ) ); ?>
            <?php the_content()?>
            <?php wp_link_pages(); ?> 
			<?php the_tags( ' ', ' '); ?> 
        </section>
    </article>
<?php comments_template('/includes/loops/comments.php'); ?>
<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); ?>
<?php endif; ?>
