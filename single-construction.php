<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				

<?php

?>

	
				<?php
				// Find connected pages
				$connected = new WP_Query( array(
					'connected_type' => 'related_construction_posts',
					'connected_items' => get_queried_object(),
					'nopaging' => true,
				) );

				// Display connected pages
				if ( $connected->have_posts() ) :
				?>
				<h3>Construction Project Updates:</h3>
				<ul>
				<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
				</ul>

				<?php 
				// Prevent weirdness
				wp_reset_postdata();

				endif;
				?>
				
				<?php tr_content_nav( 'nav-single' ); ?>
				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>