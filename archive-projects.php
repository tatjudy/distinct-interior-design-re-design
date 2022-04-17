<?php
/**
 * The template for displaying project page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package distinctinteriordesign
 */

get_header();

$heading = get_field('heading', 'option');
?>

<main id="primary" class="site-main">
    <section class="page-template-banner">
        <div class="page-title-bkg">
            <div class="page-title-wrapper lightgold">
            <?php
                if(get_field('heading', 'option')) {?>
                <h1><?php echo $heading; ?></h1>
            <?php } ?>
            </div>
        </div>
        <div class="img-feat-container grid-container">
            <?php
                // Check rows exists.
                if( have_rows('project_banner_images', 'option') ):
                    
                    // Loop through rows.
                    while( have_rows('project_banner_images', 'option') ) : the_row();

                        // Load sub field value.
                        $image = get_sub_field('image', 'option');
                        // Do something...?>
                        <img class="feat-img" src="<?php echo $image['url']; ?>" alt="">
                    <?php // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif;
            ?>
        </div>
    </section>
    <!-- End Projects Banner -->
    <section class="projects-container">
        <div class="projects-wrapper">
            <?php if ( have_posts() ) : 
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /*f
                    * Include the Post-Type-specific template for the content.
                    * If you want to override this in a child theme, then include a file
                    * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                    */
                    get_template_part( 'template-parts/content', get_post_type() );
                    
                endwhile;

                else :

                get_template_part( 'template-parts/content', 'none' );

                endif;
            ?>
        </div>
    </section>
    <section class="project-nav">
        <?php the_posts_navigation(); ?>
    </section>
    <!-- End Projects Container -->
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
