<?php
/**
 * Template part for displaying projects in archive-projects.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package distinctinteriordesign
 */

?>
<a class="feature-link" href="<?php the_permalink(); ?>">
	<div class="feature-image bkg-img" style="background-image: url('<?php echo get_the_post_thumbnail_url($post_id);?>');">
		<div class="project-title-bkg">
			<div class="project-title-wrapper">
				<h2>
					<?php echo get_the_title($post_id); ?>
				</h2>
			</div>
		</div>
	</div>
	<!-- #post-<?php the_ID(); ?> -->
</a>