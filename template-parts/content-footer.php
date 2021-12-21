<?php
/**
 * Template part for displaying page content in footer.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package omakase
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

            <div class="credits">
                <p>Food Photography by Jessica Musslewhite of Mushrooms and Thyme Photography</p>
                <p>Copyright &copy; <?php echo date("Y"); ?> AutoCanada. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</section>