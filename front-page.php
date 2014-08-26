<?php
/**
 * Front Page Template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="home_top">
				<div class="locations">
					<h2>Currently Flying to Los Angeles</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/images/home_map_red.jpg" />
				</div>
				<div class="featured">
					<h2>Prescott Live & Play</h2>
					<!--
					<a href='<?php echo of_get_option('destination_url'); ?>'><img src="<?php echo str_replace( '.jpg', '-300x280.jpg', of_get_option('destination') ); ?>" /></a>
					-->
					<iframe class="home-video" style="float: left; width: 300px; height: 290px; margin-bottom: 0;" width="300" height="280" src="//www.youtube.com/embed/-FdFmF5o5JA" frameborder="0" allowfullscreen=""></iframe>
				</div>
			</div>
			<div class="spotlights">
				<div class="spotlight">
					<h2><a href="<?php echo of_get_option('spotlight_url_1'); ?>"><?php echo of_get_option('spotlight_text_1'); ?></a></h2>
				</div>
				<div class="spotlight">
					<h2><a href="<?php echo of_get_option('spotlight_url_2'); ?>"><?php echo of_get_option('spotlight_text_2'); ?></a></h2>
				</div>
				<div class="spotlight">
					<h2><a href="<?php echo of_get_option('spotlight_url_3'); ?>"><?php echo of_get_option('spotlight_text_3'); ?></a></h2>
				</div>
				<div class="spotlight">
					<h2><a href="<?php echo of_get_option('spotlight_url_4'); ?>"><?php echo of_get_option('spotlight_text_4'); ?></a></h2>
				</div>
			</div>
			<div class="recent_n_story">
				<div class="recent">
					<h2>Recent News</h2>
					<?php 
					query_posts($query_string . '&cat=-198');
					while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
								<div class="entry-thumbnail">
									<?php the_post_thumbnail(); ?>
								</div>
								<?php endif; ?>

								
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php the_excerpt(); ?>
								<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tabula-rasa' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
							</div><!-- .entry-content -->

							<footer class="entry-meta">
								<?php edit_post_link( __( 'Edit', 'tabula-rasa' ), '<span class="edit-link">', '</span>' ); ?>
							</footer><!-- .entry-meta -->
						</article><!-- #post -->

					<?php endwhile; // end of the loop. ?>
				</div>
				<div class="story">
					<h2>Featured Stories</h2>
					<?php
					// The Query
					$query = new WP_Query( 'category_name=featured&showposts=3' );

					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post(); 
						?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<header class="entry-header">
									<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
									<div class="entry-thumbnail">
										<?php the_post_thumbnail( 'featured-home' ); ?>
									</div>
									<?php endif; ?>

									<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>								
								</header><!-- .entry-header -->

								<div class="entry-content">
									<?php the_excerpt(); ?>
									<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tabula-rasa' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
								</div><!-- .entry-content -->

								<footer class="entry-meta">
									<?php edit_post_link( __( 'Edit', 'tabula-rasa' ), '<span class="edit-link">', '</span>' ); ?>
								</footer><!-- .entry-meta -->
							</article><!-- #post -->
						<?php	
						}
					} else {
						// no posts found
					}
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
				</div>
			</div> <!-- .recent_n_story -->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>