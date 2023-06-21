<?php get_header();
$fields = get_fields();

var_dump($fields);

?>

<?php while (have_posts()) : the_post(); ?>
    <section id="double-bloc">
        <div class="row">
            <div class="col">
                <h1><?php the_title() ?></h1>
                <p><?php the_excerpt() ?></p>
                <div class="row">
                    <button type="button" class="btn btn-sm col-2 button-purple m-2">Button</button>
                    <button type="button" class="btn btn-sm col-2 button-white m-2">Button</button>
                </div>
            </div>
            <div class="col">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width: 100%; height: auto">
            </div>
        </div>
    </section>

    <?php the_content() ?>
    <a href="<?= get_post_type_archive_link('post') ?>">Voir les dernières actualités</a>
<?php endwhile ?>

<?php get_footer() ?>