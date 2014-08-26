<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
					<img src="<?php echo home_url(); ?>/wp-content/uploads/2012/05/2012-12-07-Progress-Report-26-11-19-Phase-2-sampling-P-405-640x150.jpg">
					
				</div>
				<h1 class="entry-title"><?php wp_title("", true); ?></h1>
			</div>
			<?php 
			$args = array( 
				'post_type' => 'construction',
				'status' => 'active',
			);
			$the_query = new WP_Query( $args );			
			if ( $the_query->have_posts() ) { ?>
			<h2>ACTIVE PROJECTS</h2>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				

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

				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
			<?php } ?>

			<?php 
			$args = array( 
				'post_type' => 'construction',
				'status' => 'upcoming',
			);
			$the_query = new WP_Query( $args );			
			if ( $the_query->have_posts() ) { ?>
			<h2>UPCOMING PROJECTS</h2>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				

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

				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
			<?php } ?>

			<?php 
			$args = array( 
				'post_type' => 'construction',
				'status' => 'completed',
			);
			$the_query = new WP_Query( $args );			
			if ( $the_query->have_posts() ) { ?>
			<h2>COMPLETED PROJECTS</h2>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				

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

				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
			<?php } ?>
			
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>