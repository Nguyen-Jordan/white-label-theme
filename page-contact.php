<?php $contact = get_field('contact_bloc') ?>

<section class="d-flex justify-content-center">
    <div class="row">
        <h1>Contact</h1>
        <div class="row">
            <div class="col-4">
                <h2>Un projet, une question ?</h2>
                <p>N’hésitez pas à nous contacter ou à passer nous voir</p>
                <p>
                    <?= $contact['Address_number'] ?>, <?= $contact['address_type'] ?> <br> <?= $contact['address_name'] ?> <br>
                    <?= $contact['zip_code'] ?> <span class="text-uppercase"><?= $contact['city'] ?></span><br>
                    <span class="text-uppercase"><?= $contact['country'] ?></span><br>
                </p>
                <div class="row">
                    <h3>Téléphones</h3>
                    <div class="col">
                        <img width="64" height="64" src="https://img.icons8.com/external-glyph-andi-nur-abdillah/64/external-Telephone-retro-gadget-(glyph)-glyph-andi-nur-abdillah.png" alt="external-Telephone-retro-gadget-(glyph)-glyph-andi-nur-abdillah"/>
                        <p>Siège social : <?= $contact['phone_number']['head_office'] ?></p>
                    </div>
                    <div class="col">
                        <img width="64" height="64" src="https://img.icons8.com/external-febrian-hidayat-glyph-febrian-hidayat/64/external-telephone-ui-essential-febrian-hidayat-glyph-febrian-hidayat.png" alt="external-telephone-ui-essential-febrian-hidayat-glyph-febrian-hidayat"/>
                        <p>Ligne directe : <?= $contact['phone_number']['direct_ligne'] ?></p>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</section>
