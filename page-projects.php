<?php
/*
Template Name: Projects
Template Post Type: page

Page is obsolete. Use archive-projects.
*/


get_header();

    $projects_heading = get_field('projects_heading');
?>
<main>
    <section class="page-template-banner">
        <div class="page-title-bkg">
            <div class="page-title-wrapper lightgold">
                <h1><?php echo $projects_heading; ?></h1>
            </div>
        </div>
        <div class="img-feat-container grid-container">
            <?php
                // Check rows exists.
                if( have_rows('banner_images') ):
                    
                    // Loop through rows.
                    while( have_rows('banner_images') ) : the_row();

                        // Load sub field value.
                        $image = get_sub_field('image');
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
            <?php
                // Check rows exists.
                if( have_rows('project') ):?>
                    <?php // Loop through rows.
                    while( have_rows('project') ) : the_row();

                        // Load sub field value.
                        $project_name = get_sub_field('project_name');
                        $feature_image = get_sub_field('feature_image');
                        // Do something...?>

                        <div class="feature-image bkg-img" style="background-image: url('<?php echo $feature_image['url']; ?>');">
                            <div class="project-title-bkg">
                                <div class="project-title-wrapper">
                                    <h2><?php echo $project_name; ?></h2>
                                </div>
                            </div>
                        </div>
                    <?php // End loop.
                        endwhile; ?>
                <?php // No value.
                else :
                    // Do something...
                endif;
            ?>
        </div> <!-- end projects wrapper -->
    </section>
    <!-- End Projects Container -->
</main>
<?php
get_footer();