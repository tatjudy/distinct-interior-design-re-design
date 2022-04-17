<?php
/**
 * The template for displaying all project posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package distinctinteriordesign
 */

get_header();

$images =  get_field('project_gallery');
?>

<article id="primary" class="site-main">
    <h1><?php the_title(); ?></h1>
    <div class="project-content">
        <?php the_content(); ?>
        <?php if ($images):?>
            <ul>
                <?php foreach ($images as $image_id): ?>
                    <li>
                        <?php echo wp_get_attachment_image($image_id, $size); ?>
                    </li>
                <?php endforeach; ?>
                </ul>
        <?php endif; ?> 
    </div>
</article><!-- #main -->

<?php
get_sidebar();
get_footer();
