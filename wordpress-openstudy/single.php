<?php get_header(); ?>

	<div id="body_wrapper"><div id="body">
    <div id="sidebar_container">
	
		<div id="main"><div class="inner">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<?php $numposts = $wpdb->get_var("SELECT COUNT(1) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type != 'page'"); ?>
			
			<?php include (TEMPLATEPATH . '/templates/template-postloop.php'); ?>

			<?php comments_template(); ?>

			<?php endwhile; else: ?>
			
				<?php include (TEMPLATEPATH . '/templates/template-notfound.php'); ?>
			
			<?php endif; ?>

		</div></div><!--// #main -->

		<?php get_sidebar(); ?>

    </div>
	</div></div><!--// #body -->

<?php get_footer(); ?>
