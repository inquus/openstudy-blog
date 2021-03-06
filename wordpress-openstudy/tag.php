<?php get_header(); ?>

	<div id="body_wrapper"><div id="body">
    <div id="sidebar_container">
	
		<div id="main"><div class="inner">

			<div class="box">
				<h2><?php _e('Tag Archive','fauna'); ?></h2>
				<p><?php _e('The following is a list of all entries tagged with','fauna'); ?> <strong><?php single_tag_title(); ?>:</strong></p>
			</div>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<?php include (TEMPLATEPATH . '/templates/template-postloop.php'); ?>
			
			<?php endwhile; ?>

				<?php include (TEMPLATEPATH . '/templates/template-nextprev.php'); ?>

			<?php else: ?>

				<?php include (TEMPLATEPATH . '/templates/template-notfound.php'); ?>

		<?php endif; ?>

		</div></div><!--// #main -->

		<?php get_sidebar(); ?>

    </div>
	</div></div><!--// #body -->

<?php get_footer(); ?>
