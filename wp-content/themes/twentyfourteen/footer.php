<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->
		<div class="flex items-center justify-center parallax-window"
			 data-parallax="scroll"
			 data-image-src="http://storage.googleapis.com/instapage-user-media/3decfab1/1765785-0-background-36.png"
			 style="height: 500px">
			<div class="contact-box flex-column items-center" style="width: 450px; height: 300px">
				<h1 style="margin: 1em;">Get contacted</h1>
				<input
					placeholder="Email"
					class="contact-input"
				>

				</input>
				<button class="contact-button">Get Contacted</button>
			</div>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				© Chip'd 2016
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>