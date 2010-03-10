<?php get_header(); ?>

	<div id="body_wrapper"><div id="body">
    <div id="sidebar_container">
		
		<div id="main"><div class="inner">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="box post">

        <div class="post_header">
				<?php edit_post_link(__('Edit This','fauna'), '<span class="edit">', '</span>'); ?>

				<h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
        </div>

				<?php the_content(__('Continue reading this entry','fauna').' &raquo;'); ?>
				<?php wp_link_pages('before=<strong>'.__('Page:','fauna').' &after=</strong>&next_or_number=number&pagelink=%'); ?>
				
				
				<!--
				<?php trackback_rdf(); ?>
				-->
			
				<hr />
				
			</div>

			<?php comments_template(); ?>

			<?php endwhile; else: ?>

				<?php include (TEMPLATEPATH . '/templates/template-notfound.php'); ?>

			<?php endif; ?>
			
			<hr />
	
		</div></div><!--// #main -->
		
		<?php get_sidebar(); ?>
		
  </div> <!--// #sidebar_container -->
	</div></div><!--// #body -->

<?php get_footer(); ?>
