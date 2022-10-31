<?php
/**
 * Home page of theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package distinctinteriordesign
 */

?>

<?php
    //display the header
    get_header();


    //variables
    $bkg_img = get_field('banner_image');
    $banner_heading_text = get_field('heading');
    $banner_paragraph_text = get_field('lead_paragraph');

    $sec1_gold = get_field('section_1_heading_gold');
    $sec1_heading_txt = get_field('section_1_heading');
    $sec1_paragraph = get_field('section_1_paragraph');
    $sec1_img1 = get_field('section_1_img_1');
    $sec1_img2 = get_field('section_1_img_2');
    $sec1_img3 = get_field('section_1_img_3');

    $sec2_heading = get_field('section_2_heading');
    $sec2_paragraph = get_field('section_2_paragraph');
    $sec2_img = get_field('section_2_img');
    $sec2_feat_img = get_field('section_2_feat_img');

    //service section
    $service_section = get_field('service_section');
    $services_page_heading = get_field('services_page_heading');

    $video = get_field('video');
?>

<!-- Banner Section -->
<section>
    <section>
        <div class="slider">
            <?php
            $i = 1;
            $ii = 1;
            $iii = 1;
                // Check rows exists.
                if( have_rows('slider_images') ):?>
                    <div class="slides">
                        <?php // Loop through rows.
                        $numrows = count( get_field( 'slider_images' ) );
                        while( have_rows('slider_images') ) : the_row();
                        ?>
                            <input type="radio" name="radio-btn" id="radio<?php echo $i++ ?>">
                        <?php
                        endwhile;
                        // End Radio Loop
                        $first_loop = true;
                        while( have_rows('slider_images') ) : the_row();

                            // Load sub field value.
                            $slider_image = get_sub_field('slider_image');
                            $add_heading = get_sub_field('add_heading');
                            ?>
                            <div class="slide <?php if ($first_loop):?>first<?php endif; $first_loop = false; ?>" style="background-image: url('<?php echo $slider_image['url']; ?>');">
                                <?php
                                    if ($add_heading == 'Yes') :
                                    // Check rows exists.
                                        if( have_rows('slider_headings') ):?>
                                            <?php // Loop through rows.
                                            while( have_rows('slider_headings') ) : the_row();

                                                // Load sub field value.
                                                $slider_heading = get_sub_field('slider_heading');
                                                $slider_subheading = get_sub_field('slider_subheading'); ?>
                                                <div class="banner-text">
                                                    <h1><?php echo $slider_heading; ?></h1>
                                                    <p class="lead"><?php echo $slider_subheading;  ?></p>
                                                </div>
                                            <?php // End loop.
                                                endwhile; ?>
                                        <?php // No value.
                                        else :
                                            // Do something...
                                        endif;
                                    ?>
                                    <?php
                                    else :
                                    endif;
                                ?>
                            </div> <!-- End Slide -->
                        <?php 
                        endwhile; // End Slider Images Loop?>
                        <!--automatic navigation start-->
                        <div class="navigation-auto">
                            <?php while( have_rows('slider_images') ) : the_row();?>
                                <div class="auto-btn<?php echo $ii++ ?>"></div>
                            <?php endwhile; ?>
                        </div> <!--automatic navigation end-->
                        <!--manual navigation start-->
                        <div class="navigation-manual">
                            <?php while( have_rows('slider_images') ) : the_row();?>
                                <label for="radio<?php echo $iii++ ?>" class="manual-btn"></label>
                            <?php endwhile; ?>
                        </div> <!--manual navigation end-->
                    </div>  <!-- End Slides -->
                <?php // No value.
                else :
                    // Do something...
                endif;
            ?>
        </div> <!-- End Slider -->
    </section>
    <!-- <section class="carousel">
        <div class="banner-text">
            <h1><?php //echo $banner_heading_text; ?></h1>
            <p><?php //echo $banner_paragraph_text; ?></p>
        </div>
        <div class="slides-wrapper">
            <div class="slide fade-in bkg-img" style="background-image: url('https://judytat.ca/distinct-interior-design/wp-content/uploads/2022/02/windermere-home-feature.jpg');"></div>
            <div class="slide fade-in bkg-img" style="background-image: url('https://judytat.ca/distinct-interior-design/wp-content/uploads/2022/02/main-floor-reno-feature.jpeg');"></div>
            <div class="slide fade-in bkg-img" style="background-image: url('https://judytat.ca/distinct-interior-design/wp-content/uploads/2022/03/castle-brook-feature.jpg');"></div>
        </div>
    </section> -->
    <!-- <section class="banner bkg-img" style="background-image: url('<?php //echo $bkg_img['url']; ?>');">
        <div class="banner-text">
            <h1><?php //echo $banner_heading_text; ?></h1>
            <p><?php //echo $banner_paragraph_text; ?></p>
        </div>
    </section> -->
</section>
<!-- Main Content -->
<main>
    <!-- Section 1 - Intro Section -->
    <section class="sec1 intro content-cont">
        <div class="grid-container">
            <!-- Text -->
            <div class="sec1-text">
                <h2><span class="gold"><?php echo $sec1_gold; ?></span> <?php echo $sec1_heading_txt; ?></h2>
                <p><?php echo $sec1_paragraph; ?></p>
            </div>
            <!-- Images -->
            <div class="sec1-img">
                <img class="feat-img" src="<?php echo $sec1_img1['url']; ?>" alt="<?php echo $sec1_img1['alt']; ?>">
                <img class="feat-img" src="<?php echo $sec1_img2['url']; ?>" alt="<?php echo $sec1_img2['alt']; ?>">
                <img class="feat-img" src="<?php echo $sec1_img3['url']; ?>" alt="<?php echo $sec1_img3['alt']; ?>">
            </div>
        </div>
    </section>
    <!-- Recent Projects Section -->
    <section class="recent-projects content-cont">
        <h2>Recent Projects</h2>
        <div class="grid-container">
        <?php
            $new_loop = new WP_Query( array(
            'post_type' => 'Projects',
                'posts_per_page' => 3 // put number of posts that you'd like to display
            ) );
        ?>

        <?php if ( $new_loop->have_posts() ) : ?>
            <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>

            <a href="<?php echo get_permalink();?>" class="feature-link">
                <div class="feature-image bkg-img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                    <div class="project-title-bkg">
                        <div class="project-title-wrapper">
                            <h3><?php the_title(); ?></h3>
                        </div>
                    </div>
                </div>
            </a>

            <?php endwhile;?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
        </div>
        <a href="/projects/" class="cta-btn">View All</a>
    </section>
    <!-- Section 2 - About Section -->
    <section class="sec2 about-home">
        <div class="grid-container">
            <div class="sec2-text">
                <div class="sec2-text-cont">
                    <h2 class="gold"><?php echo $sec2_heading; ?></h2>
                    <p><?php echo $sec2_paragraph; ?></p>
                </div>
                <?php
                    if (!empty($sec2_feat_img)):?>
                        <div class="sec2-feat-img">
                            <img src="<?php echo $sec2_feat_img['url']; ?>" alt="Susan Jomha" />
                        </div>
                <?php endif; ?>
                
            </div>
            <div class="sec2-img bkg-img half-width" style="background-image: url('<?php echo $sec2_img['url']; ?>');">
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <?php if (get_field('service_section') == 'Yes') {?>
        <section class="sec3 services-home content-cont">
            <h2><?php echo $services_page_heading; ?></h2>
            <div class="grid-container">
            <?php
            if( have_rows('services') ):
                while( have_rows('services') ) : the_row(); 
                $service_title = get_sub_field('service_title');
                $service_image = get_sub_field('service_image');?>
                    <div class="service">
                        <div class="bkg-img" style="background-image: url('<?php echo $service_image['url']; ?>');">
                            <div class="services-heading-cont">
                                <h3><?php echo $service_title; ?></h3>
                            </div>  
                        </div>
                        <div class="services-heading-mobile">
                            <h3><?php echo $service_title; ?></h3>
                        </div>  
                    </div>
                <?php endwhile;
            else :
                // Do something...
            endif;
            ?>
            </div>
        </section>
    <?php } //end if?>
    <!-- Video Section -->
    <?php
        if (!empty($video)):?>
            <section class="video content-cont">
                <div class="video-container">
                    <?php echo $video; ?>
                </div>
            </section>
        <?php endif; ?>

    <?php the_content(); ?>
</main>


<?php
get_footer();
