<?php
/*
Template Name: About
Template Post Type: page
*/


get_header();
?>

<?php
// variables
    $page_title = get_field('page_title');

    $award_heading_gold = get_field('award_heading_gold');
    $award_heading = get_field('award_heading');

    $headshot = get_field('headshot');
    $about_paragraph1 = get_field('about_paragraph_1');
    $about_paragraph2 = get_field('about_paragraph_2');
    $about_half_img1 = get_field('about_half_width_image_1');
    $about_half_img2 = get_field('about_half_width_image_2');
?>

<!-- Template for About Page -->
<main class="about-page">
    <section class="page-template-banner content-cont">
        <div class="page-title-bkg">
            <div class="page-title-wrapper lightgold">
                <h1><?php echo $page_title; ?></h1>
            </div>
        </div>
        <div class="img-feat-container grid-container">
            <!-- <img class="feat-img" src="<?php //echo $about_img1['url']; ?>" alt="<?php //echo $about_img1['alt']; ?>">
            <img class="feat-img" src="<?php //echo $about_img2['url']; ?>" alt="<?php //echo $about_img2['alt']; ?>">
            <img class="feat-img" src="<?php //echo $about_img3['url']; ?>" alt="<?php //echo $about_img3['alt']; ?>">
            <img class="feat-img" src="<?php //echo $about_img4['url']; ?>" alt="<?php //echo $about_img4['alt']; ?>"> -->

            <?php
                // Check rows exists.
                if( have_rows('about_banner_images') ):
                    
                    // Loop through rows.
                    while( have_rows('about_banner_images') ) : the_row();

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
    <section class="awards-container">
        <div class="award-heading">
            <h2><span class="dk-text-gold"><?php echo $award_heading_gold; ?></span> <?php echo $award_heading; ?></h2>
        </div>
        <div class="awards">
            <?php
                // Check rows exists.
                if( have_rows('awards') ):?>
                        <?php
                            // Loop through rows.
                            while( have_rows('awards') ) : the_row();

                                // Load sub field value.
                                $award_image = get_sub_field('award_image'); 
                                $award_link = get_sub_field('award_link');
                            ?>
                            <a href="<?php echo $award_link['url']; ?>">
                                <img src="<?php echo $award_image['url']; ?>" alt="">
                            </a>
                            <?php 
                            // End loop.
                            endwhile;

                            // No value.
                            else :
                        ?>
                <?php endif; 
            ?>
        </div>
    </section>
    <section class="about-sec flex-container">
        <div class="half-width">
            <img src="<?php echo $headshot['url']?>" alt="">
            <p><?php echo $about_paragraph1; ?></p>
        </div>
        <div class="half-width bkg-img" style="background-image: url('<?php echo $about_half_img1['url']; ?>');">

        </div>
    </section>
    <section class="about-sec flex-container">
        <div class="half-width">
            <p><?php echo $about_paragraph2; ?></p>
        </div>
        <div class="half-width bkg-img" style="background-image: url('<?php echo $about_half_img2['url']; ?>');">

        </div>
    </section>
</main>

<?php
get_footer();