<?php $network = get_field('social_network') ?>

</div>
    <footer>
        <div class="row my-5 d-flex justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="footer-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php
                        if ( has_custom_logo() ) {
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo_url       = wp_get_attachment_image_url( $custom_logo_id, 'full' );
                            echo '<img src="' . esc_url( $logo_url ) . '" alt="' . get_bloginfo( 'name' ) . '" alt="logo" height="200" weight="200">';
                        } else {
                            echo '<h1 class="site-title">' . get_bloginfo( 'name' ) . '</h1>';
                        }
                        ?>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-around w-25 mx-auto my-3">
                <a href="<?= $network['linkedin'] ?>" target="_blank">
                    <img width="64" height="64" src="https://img.icons8.com/nolan/64/linkedin.png" alt="linkedin"/>
                </a>
                <a href="<?= $network['twitter'] ?>" target="_blank">
                    <img width="64" height="64" src="https://img.icons8.com/nolan/64/twitter.png" alt="twitter"/>
                </a>
                <a href="<?= $network['facebook'] ?>" target="_blank">
                    <img width="64" height="64" src="https://img.icons8.com/nolan/64/facebook.png" alt="facebook"/>
                </a>
                <a href="<?= $network['instagram'] ?>" target="_blank">
                    <img width="64" height="64" src="https://img.icons8.com/nolan/64/instagram-new.png" alt="instagram-new"/>
                </a>
            </div>
            <?php wp_nav_menu([
                'theme_location' => 'footer',
                 'container' => false,
                 'menu_class' => 'navbar-nav text-center my-3'
                ])
             ?>
            <?php wp_footer() ?>
        </div>
    </footer>
</body>
</html>