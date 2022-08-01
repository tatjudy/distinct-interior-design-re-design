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
    <section class="banner bkg-img" style="background-image: url('<?php echo $bkg_img['url']; ?>');">
        <div class="banner-text">
            <h1><?php echo $banner_heading_text; ?></h1>
            <p><?php echo $banner_paragraph_text; ?></p>
        </div>
    </section>
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
                <div class="cta-link">
                    <a href="/about/">Book a Consultation
                        <img src="/distinct-interior-design/wp-content/uploads/2021/12/icon-feather-arrow-right-circle.png" alt="arrow icon gold" />
                    </a>
                </div>
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
        <div class="flex-container">
            <ul>
                <?php
                    $the_query = new WP_Query('posts_per_page=3');
                    while ($the_query -> have_posts()) : $the_query -> the_post();
                ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <li>
                    <?php
                        the_excerpt(__('(more...)'));
                    ?>
                </li>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </ul>
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
                    <div class="cta-link">
                        <a href="/about/">View Our Awards
                            <img src="/distinct-interior-design/wp-content/uploads/2021/12/icon-feather-arrow-right-circle.png" alt="arrow icon gold" />
                        </a>
                    </div>
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
