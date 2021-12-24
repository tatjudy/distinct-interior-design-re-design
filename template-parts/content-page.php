<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package distinctinteriordesign
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header banner-container">
		
	</header><!-- .entry-header -->
	
	<?php if (!empty(the_content())) : ?>
		<?php
			//display the content for reservations page
			the_content(); 
		?>
	<?php endif; ?>

		<footer class="entry-footer">

		</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
