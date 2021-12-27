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
        <div class="flex-container">
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
                <img src="<?php echo $sec1_img1['url']; ?>" alt="">
                <img src="<?php echo $sec1_img2['url']; ?>" alt="">
                <img src="<?php echo $sec1_img3['url']; ?>" alt="">
            </div>
        </div>
    </section>
    <!-- Recent Projects Section -->
    <section class="recent-projects content-cont">
        <h2>Recent Projects</h2>
        <div class="flex-container">

        </div>
        <a href="/projects/" class="cta-btn">View All</a>
    </section>
    <!-- Section 2 - About Section -->
    <section class="sec2 about-home">
        <div class="flex-container">
            <div class="sec2-text half-width">
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
    <section class="sec3 services-home content-cont">
        <h2>Our Services</h2>
        <div class="grid-container">
            <div class="service" >
                <div class="bkg-img" style="background-image: url('/distinct-interior-design/wp-content/uploads/2021/12/services-colour-consultations.jpg');">
                    <div class="services-heading-cont">
                        <h3>Colour Consultations</h3>
                    </div>  
                </div>
                <div class="services-heading-mobile">
                    <h3>Colour Consultations</h3>
                </div>  
            </div>
            <div class="service">
                <div class="bkg-img" style="background-image: url('/distinct-interior-design/wp-content/uploads/2021/12/services-furnishing-and-decorating.jpg');">
                    <div class="services-heading-cont">
                        <h3>Furnishing & Decorating</h3>
                    </div>  
                </div>
                <div class="services-heading-mobile">
                    <h3>Furnishing & Decorating</h3>
                </div>  
            </div>
            <div class="service">
                <div class="bkg-img" style="background-image: url('/distinct-interior-design/wp-content/uploads/2021/12/services-kitchen-and-bath-renovations.jpg');">
                    <div class="services-heading-cont">
                        <h3>Kitchen & Bath Renovations</h3>
                    </div>    
                 </div>
                 <div class="services-heading-mobile">
                    <h3>Kitchen & Bath Renovations</h3>
                </div>  
            </div>
            <div class="service">
                <div class="bkg-img" style="background-image: url('/distinct-interior-design/wp-content/uploads/2021/12/services-custom-draperies.jpg');">
                    <div class="services-heading-cont">
                        <h3>Custom Draperies</h3>
                    </div>   
                </div>
                <div class="services-heading-mobile">
                    <h3>Custom Draperies</h3>
                </div> 
            </div>
            <div class="service">
                <div class="bkg-img" style="background-image: url('/distinct-interior-design/wp-content/uploads/2021/12/services-space-planning.jpg');">
                    <div class="services-heading-cont">
                        <h3>Space Planning</h3>
                    </div>   
                </div>
                <div class="services-heading-mobile">
                    <h3>Space Planning</h3>
                </div>   
            </div>
            <div class="service">
                <div class="bkg-img" style="background-image: url('/distinct-interior-design/wp-content/uploads/2021/12/services-3d-rendering.jpg');">
                    <div class="services-heading-cont">
                        <h3>3D Renderings</h3>
                    </div> 
                </div>
                <div class="services-heading-mobile">
                    <h3>3D Renderings</h3>
                </div> 
            </div>
            <div class="service">
                <div class="bkg-img" style="background-image: url('/distinct-interior-design/wp-content/uploads/2021/12/services-home-staging.jpg');">
                    <div class="services-heading-cont">
                        <h3>Home Staging</h3>
                    </div>   
                </div>
                <div class="services-heading-mobile">
                    <h3>Home Staging</h3>
                </div>  
            </div>
            <div class="service">
                <div class="bkg-img" style="background-image: url('/distinct-interior-design/wp-content/uploads/2021/12/services-lighting.jpg');">
                    <div class="services-heading-cont">
                        <h3>Lighting</h3>
                    </div>      
                </div>
                <div class="services-heading-mobile">
                    <h3>Lighting</h3>
                </div>   
            </div>
        </div>
    </section>
    <!-- Video Section -->
    <?php
        if (!empty($video)):?>
            <section class="video content-cont">
                <div class="video-container">
                    <?php echo $video; ?>
                </div>
            </section>
        <?php endif; ?>
</main>


<?php
get_footer();
