<?php get_header();
$fields = get_fields();
?>

<?php while (have_posts()) : the_post(); ?>
    <?php if ($fields):
        foreach ($fields as $key => $value){
            if ( $key == "welcome_header" || $key == "last_news" || $key == "preview_service_bloc"
                || $key == "second_preview_service_bloc" )
            include "template-parts/".$key.'.php';
        }
        ?>
    <?php else: ?>
        <h1>Nothing to show!</h1>
    <?php endif; ?>
    <?php /*the_content() */?><!--
    <a href="<?php /*= get_post_type_archive_link('post') */?>">Voir les dernières actualités</a>-->
<?php endwhile ?>

<?php get_footer() ?>