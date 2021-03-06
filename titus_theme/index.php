<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php //the_date('','<h2>','</h2>'); ?>

<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	 <h1 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	<div class="meta"><?php// _e("Filed under:"); ?> <?php //the_category(',') ?> <?php// the_tags(__('Tags: '), ', ', ' &#8212; '); ?> <?php //the_author() ?> <?php //the_time() ?> <?php //edit_post_link(__('Edit This')); ?></div>

	<div id="text">
		<?php the_content(__('(more...)')); ?>
	</div>

	<div class="feedback">
		<?php //wp_link_pages(); ?>
		<?php //comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
	</div>

</div>

<?php //comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
</div>
<?php get_footer(); ?>
