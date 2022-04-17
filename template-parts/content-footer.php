<?php
/**
 * Template part for displaying page content in footer.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package distinctinteriordesign
 */

?>

<?php
    $phone = get_field('phone');
    $email = get_field('email');

    $facebook = get_field('facebook');
    $instagram = get_field('instagram');
    $twitter = get_field('twitter');
?>


<!-- Footer Content -->
<section class="footer-content">
    <div class="grid-container">
        <div class="contact-info">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="/distinct-interior-design/wp-content/uploads/2021/12/black-logo.png" alt="Distinct Interior Design Logo">
                <a href="<?php echo $phone['url']; ?>"><?php echo $phone['title']; ?></a>
                <a href="<?php echo $email['url']; ?>"><?php echo $email['title']; ?></a>
            </a>
        </div>
        <div class="foot-menu">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-2',
                        'menu_id'        => 'footer-menu',
                    )
                );
            ?>
            <div class="social-media">
                <a href="<?php echo $facebook; ?>">
                    <span class="dashicons dashicons-facebook-alt"></span>
                </a>
                <a href="<?php echo $instagram; ?>">
                    <span class="dashicons dashicons-instagram"></span></a>
                <a href="<?php echo $twitter ; ?>">
                    <span class="dashicons dashicons-twitter"></span>    
            </a>
            </div>
        </div>
    </div>
    <p class="copyright">Content copyright <?php echo date("Y"); ?>. Distinct Interior Design by Susan Jomha. All rights reserved.</p>
</section>