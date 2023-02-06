<?php
/*
Template Name: Projects
Template Post Type: page

Page is obsolete. Use archive-projects.
*/


get_header();

$projects_heading = get_field('projects_heading', 'option');
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array (
    'post_type' => 'projects', 'posts_per_page' => 10,
    'posts_per_page' => 13,
    'paged' => $paged
);

$the_query = new WP_Query($args);
?>
<main>
    <section class="page-template-banner">
        <div class="page-title-bkg">
            <div class="page-title-wrapper lightgold">
            <?php
                if(get_field('projects_heading', 'option')) {?>
                <h1><?php echo $projects_heading; ?></h1>
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
            <?php if ( $the_query -> have_posts() ) : 
                /* Start the Loop */
                while ( $the_query -> have_posts() ) :
                    $the_query->the_post();
                    get_template_part( 'template-parts/content', get_post_type() );
                    /*f
                    * Include the Post-Type-specific template for the content.
                    * If you want to override this in a child theme, then include a file
                    * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                    */
                    //get_template_part( 'template-parts/content', get_post_type() );
                    
                endwhile;
                ?>
                <div class="projects-nav-previous">
                    <?php
                        previous_posts_link( 'Previous Page' ); 
                    ?>
                </div>
                <div class="projects-nav-next">
                    <?php
                        next_posts_link('Next Page', $the_query -> max_num_pages);
                    ?>
                    <img src="https://judytat.ca/distinct-interior-design/wp-content/uploads/2021/12/icon-feather-arrow-right-circle.png" alt="arrow icon">
                </div>
                <?php
                else :

                get_template_part( 'template-parts/content', 'none' );
                endif;
            ?>
        </div>
    </section>
    <section class="project-nav">
        <?php
            the_posts_pagination(array (
                'mid_size' => 2,
                'prev_text' => __('Previous Page', 'textdomain'),
                'next_text' => __(('Next Page'), 'textdomain'),
            ));
        ?>
    </section>
</main>
<?php
get_footer();