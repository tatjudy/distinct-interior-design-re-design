<?php
/*
Template Name: Our Process
Template Post Type: page
*/


get_header();

//variables
$our_process_heading = get_field('our_process_heading');
$our_process_intro_heading = get_field('our_process_intro_heading');
$our_process_intro_text = get_field ('our_process_intro_text');
$our_process_intro_img = get_field('our_process_intro_image');
$our_process_page_heading = get_field('our_process_page_heading');
$design_process = get_field('design_process');
$design_process_form_heading = get_field('book_consultation_heading');
$design_process_form = get_field('book_consultation_form');

?>

<!-- Template for About Page -->
<main class="our-process-page">
    <section class="page-template-banner content-cont">
        <div class="page-title-bkg">
            <div class="page-title-wrapper lightgold">
                <h1><?php echo $our_process_heading; ?></h1>
            </div>
        </div>
        <div class="img-feat-container grid-container">
            <?php
                // Check rows exists.
                if( have_rows('our_process_banner_images') ):
                    
                    // Loop through rows.
                    while( have_rows('our_process_banner_images') ) : the_row();

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
    <section class="our-process-intro">
        <div class="our-process-intro-text">
            <h2><?php echo $our_process_intro_heading;?></h2>
            <p><?php echo $our_process_intro_text;?></p>
        </div>
        <!-- <div class="our-process-intro-img bkg-img">
            <img src="<?php //echo $our_process_intro_img['url'];?>" alt="Image of Susan inside Excelsior Lofts">
        </div> -->
    </section>
    <section class="process-container">
        <div class="design-process">
            <h2><?php echo $our_process_page_heading; ?></h2>
            <?php
                // Check rows exist
                if( have_rows('design_process') ):
                    
                    //loop through rows
                    while( have_rows('design_process') ) : the_row();
                        
                    // Load sub field value.
                    $heading = get_sub_field('heading');
                    $text = get_sub_field('text');
                    ?>
                    <h3><?php echo $heading; ?></h3>
                    <p><?php echo $text; ?></p>
                    <?php // end loop
                    endwhile;
                else :
                    // Do something...
                endif;
            ?>
        </div>
        <div class="design-process-images">
            <?php 
                // Check if rows exist
                if (have_rows('design_process_images') ) :

                    while( have_rows('design_process_images') ) : the_row();
                        
                    // Load sub fields
                    $image = get_sub_field('image');
                    ?>
                
                    <img src="<?php echo $image['url']; ?>" alt="">
                    <?php
                    // end loop
                    endwhile;

                else :
                    //do something
                endif;
            ?>
        </div>
    </section>
    <section class="form">
        <h2><?php echo $design_process_form_heading; ?></h2>
        <?php echo $design_process_form;?>
    </section>
</main>

<?php
get_footer();