<?php
/*
Template Name: Contact Us
Template Post Type: page
*/


get_header();
$contactBanner = get_field('contact_us_banner');
$contactHeading = get_field('contact_us_heading');
$contactCtaHeading = get_field('contact_us_cta_heading');
$contactImage = get_field('contact_image');
$contactFormHeading = get_field('contact_us_form_heading');
$contactForm = get_field('contact_us_form');

//contact info
$name = get_field('name');
$phone = get_field('phone');
$email = get_field('email');
$address = get_field('address');
$googleMapsLink = get_field('google_maps_link');
?>
<!-- Page Template for Contact Us page -->
<main class="contact-us-page">
    <section class="fw-banner bkg-img" style="background-image: url('<?php echo $contactBanner['url']; ?>');">
        <div class="fw-banner-text">
            <h1><?php echo $contactHeading; ?></h1>
        </div>
    </section>
    <section class="content-cont">
        <h2><?php echo $contactCtaHeading; ?></h2>
        <div class="grid-container">
            <div class="contact-left">
                <h3><?php echo $contactFormHeading; ?></h3>
                <div class="contact-form">
                    <?php echo $contactForm; ?>
                </div>
            </div>
            <div class="contact-right ">
                <div class="contact-right-wrapper">
                    <h2>Distinct Interior Design</h2>
                    <h3><?php echo $name; ?></h3>
                    <div class="contact-pg-details">
                        <a href="<?php echo $googleMapsLink['url']; ?>"><?php echo $address;?></a>
                        <a href="<?php echo $phone['url']; ?>"><?php echo $phone['title']; ?></a>
                        <a href="<?php echo $email['url']; ?>"><?php echo $email['title']; ?></a>
                    </div>
                </div>
                <img src="<?php echo $contactImage['url']; ?>" alt="Distinct Interior Design - City Centre Location">
            </div>
        </div>
    </section>
</main>
<?php
get_footer();