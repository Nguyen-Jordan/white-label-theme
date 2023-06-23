<?php $network = get_field('social_network') ?>

</div>
    <footer class="d-flex justify-content-center">
        <div class="row my-5">
            <div class="col-12">
                <img src="./assets/images/logo.webp" alt="logo">
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