<?php
/**
 * The template for displaying all project posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package distinctinteriordesign
 */

get_header();

// $images =  get_field('project_gallery');
?>

<article id="primary" class="site-main">
    <h1><?php the_title(); ?></h1>
    <div class="project-content">
        <?php the_content(); ?> 
    </div>
</article><!-- #main -->

<?php
get_sidebar();
get_footer();
