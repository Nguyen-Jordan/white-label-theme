<?php $news = get_field('last_news') ?>

<section>
    <div class="row my-5">
        <h2 class="text-center"><?= $news['title'] ?></h2>
        <p class="text-center"><?= $news['text'] ?></p>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    ?>
                    <div class="col-sm-4">
                        <a href="<?php the_permalink() ?>">
                        <div class="card">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']) ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title() ?></h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?php the_category() ?></h6>
                                <p class="card-text">
                                    <?php the_excerpt() ?>
                                </p>
                                <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            } else {
                echo 'Aucun article trouvé.';
            }
            ?>
        </div>
    </div>
</section>