<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
		
	</div><!-- .site-main -->
	</div> <!-- .site-main-wrapper -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="inner-footer">
			<div class="site-info">
				<div class="footer-columns">
					<?php tr_main_nav(); ?>
				</div>
			</div><!-- .site-info -->
		</div>
		<div class="sub-footer">
			<div class="inner-sub-footer">
				<div class="site-info">
					<p><?php echo bloginfo('name') . ' 6546 Crystal Lane, Prescott, AZ  86301 (928) 777-1114 ' . '&copy; Copyright ' . date("Y"); ?>
					</p>
				</div><!-- .site-info -->
			</div>
		</div>
		<div class="tl-footer">
			<a href="http://www.third-law.com/">Prescott Web Design by Third Law</a>
		</div>		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>