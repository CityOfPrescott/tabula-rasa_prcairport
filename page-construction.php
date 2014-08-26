<?php
/*
Template Name: Construction Archive
*/

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php echo 'page'; ?>
		<?php query_posts('post_type=construction'); ?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php tr_content_nav( 'nav-below' ); ?>

		<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>
		
		<?php endif; // end have_posts() check ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>