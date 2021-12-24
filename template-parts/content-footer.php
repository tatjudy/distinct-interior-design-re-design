<?php
/**
 * Template part for displaying page content in footer.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package distinctinteriordesign
 */

?>
<!-- Footer Content -->
<section>
    <div class="container footer-content">
        <div class="row">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-2',
                        'menu_id'        => 'footer-menu',
                    )
                );
            ?>
        </div>
    </div>
</section>