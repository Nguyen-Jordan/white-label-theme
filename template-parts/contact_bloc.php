<?php $contact = get_field('contact_bloc');
$map_shortcode = $contact['map'];
?>
<section class="my-5">
    <div class="row d-flex justify-content-evenly">
        <div class="col-5 m-auto">
            <h1><?= $contact['title'] ?></h1>
            <p><?= $contact['text'] ?></p>
            <button type="button" class="btn btn-sm col-2 button-purple m-2"
                    onclick="window.location.href='<?= $contact['button']['url_link'] ?>';">
                <?= $contact['button']['button_text'] ?>
            </button>
        </div>
        <div class="col-5 m-auto">
            <?= do_shortcode($map_shortcode); ?>
        </div>
    </div>
</section>