<?php
get_header();
$fields = get_fields();
$contact = get_field('contact_page');
$map = $contact['map_shortcode'];
$form = $contact['contact_form'] ?>

<?php if (have_posts() && !is_front_page()) : ?>
    <section class="my-5">
        <div class="row d-flex justify-content-evenly">
            <h1 class="text-center my-4">Contact</h1>
            <div class="row my-5 align-items-center">
                <div class="col-5">
                    <h2>Un projet, une question ?</h2>
                    <p>N’hésitez pas à nous contacter ou à passer nous voir</p>
                    <p>
                        <?= $contact['address_number'] ?>, <?= $contact['address_type'] ?> <?= $contact['address_name'] ?> <br>
                        <?= $contact['zip_code'] ?> <span class="text-uppercase"><?= $contact['city'] ?></span><br>
                        <span class="text-uppercase"><?= $contact['country'] ?></span><br>
                    </p>
                    <div class="row">
                        <h3>Téléphones</h3>
                        <div class="col-12">
                            <img width="24" height="24" src="https://img.icons8.com/external-glyph-andi-nur-abdillah/64/external-Telephone-retro-gadget-(glyph)-glyph-andi-nur-abdillah.png" alt="external-Telephone-retro-gadget-(glyph)-glyph-andi-nur-abdillah"/>
                            <p>Siège social : <?= $contact['phone_number']['head_office'] ?></p>
                        </div>
                        <div class="col-12">
                            <img width="24" height="24" src="https://img.icons8.com/external-febrian-hidayat-glyph-febrian-hidayat/64/external-telephone-ui-essential-febrian-hidayat-glyph-febrian-hidayat.png" alt="external-telephone-ui-essential-febrian-hidayat-glyph-febrian-hidayat"/>
                            <p>Ligne directe : <?= $contact['phone_number']['direct_ligne'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <?= do_shortcode($map); ?>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <?= do_shortcode($form); ?>
            </div>
        </div>
        <div
    </section>
<?php else : ?>
    <h1>Pas de page contact</h1>
<?php endif; ?>
<?php get_footer() ?>