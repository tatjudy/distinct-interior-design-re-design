<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package distinctinteriordesign
 */

get_header();
?>

	<main id="error-wrapper" class="site-main">
		<div class="error-404 error-container not-found bkg-img">
			<div class="error-text">
				<h1 class="page-title">404 Page Not Found</h1>
				<p>Oops! The page you are looking for does not exist. It might have been moved or deleted.</p>
				<a href="https://judytat.ca/distinct-interior-design/" class="cta-btn">Home</a>
			</div>
			<div class="img-overlay"></div>
		</div><!-- .error-404 -->
	</main><!-- #main -->

	
<?php
get_footer();