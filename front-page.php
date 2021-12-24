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
?>

<!-- Banner Section -->
<section>
    <section class="banner" style="background-image: url('<?php echo $bkg_img['url']; ?>');">
        <div class="banner-text">
            <h1><?php echo $banner_heading_text ?></h1>
            <p><?php echo $banner_paragraph_text ?></p>
        </div>
    </section>
</section>
<!-- Main Content -->
<main>


</main>


<?php
get_footer();
