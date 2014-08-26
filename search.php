<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="page-header">
				<div class="page-banner"> 
					<img src="<?php echo home_url(); ?>/wp-content/uploads/2013/07/news-banner-640x150.jpg">
				</div>
				<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'tabula-rasa' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
				

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
								<?php //wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tabula-rasa' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
							</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'tabula-rasa' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

			<?php endwhile; // end of the loop. ?>
<?php tr_content_nav( 'nav-below' ); ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>