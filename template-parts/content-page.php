<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package omakase
 */

?>

<?php
	$bkg_img = get_field('full_size_image');
	$text = get_sub_field('text');
	$address = get_field('address');
	$email = get_field('email');
	$phone = get_field('phone');
	$map = get_field('map');
	//$text = get_field('the_content');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header banner-container">
	<?php
		//display the content
		//the_content(); 
	?>
		<?php if ($bkg_img): ?>
			<div class="banner bkg-img" style="background-image: url('<?php echo $bkg_img['url']; ?>');">
			</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div id="about" class="container-fluid entry-content">
		<?php while( have_rows('the_content') ): the_row(); ?>	
			<?php if( get_row_layout() == 'split_content' ): ?>
				<?php while( have_rows('blocks') ): the_row(); ?>	

					<?php $text = get_sub_field('text'); ?>
					<?php $bkg_img = get_sub_field('image') ?>

					<div class="row split-row">
						<div class="col-sm-12 col-md-6 split-text-container">
							<div class="split-text">
								<p><?php echo $text; ?></p>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 bkg-img split-img" style="background-image: url('<?php echo $bkg_img['url']; ?>') ;">
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<!-- end of split content -->
			<?php if( get_row_layout() =='parallax' ): ?>
				<div class="row parallax bkg-img" style="background-image: url('<?php echo get_sub_field('image')['url']; ?>') ;">
					<div class="grey-bkg">
						<div class="parallax-text">
							<p><?php echo get_sub_field('text'); ?></p>
						</div>
					</div>
				</div>
			<?php endif; ?>
		<?php endwhile; ?>
	</div><!-- .entry-content -->
	
	<?php if (!empty(the_content())) : ?>
		<?php
			//display the content for reservations page
			the_content(); 
		?>
	<?php endif; ?>
	<div class="container-fluid">
		<div id="contact" class="row split-row contact-container">
			<div class="col-sm-12 col-md-6 split-text-container">

				<div class="split-text">
					<h2>Contact</h2>
					<p><?php echo $address; ?></p>
					<a href="<?php echo $email['url']; ?>"><?php echo $email['title']; ?></a>
					<a href="<?php echo $phone['url']; ?>"><?php echo $phone['title']; ?></a>
					<div class="social">
						<?php while (have_rows('social_media')) : the_row(); ?>

							<?php
								$facebook = get_sub_field('facebook');
								$instagram = get_sub_field('instagram');
							?>

							<a href="<?php echo $facebook; ?>"><span class="dashicons dashicons-facebook-alt"></span></a>
							<a href="<?php echo $instagram; ?>"><span class="dashicons dashicons-instagram"></span></a>
							
						<?php endwhile; ?>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 bkg-img split-img">
				<?php echo $map; ?>
			</div>
		</div>
	</div>
	
	<div id="gallery" class="carousel">
		<div class="carousel-container">
			<?php echo get_field('carousel'); ?>
		</div>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'omakase' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
