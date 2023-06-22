<?php $welcomeField = get_field('welcome_header') ?>
<section class="p-4 my-5">
    <div class="row d-flex justify-content-center">
        <div class="col-5 p-4 me-2">
            <h1><?= $welcomeField['left_title'] ?></h1>
            <p><?= $welcomeField['left_text'] ?></p>
            <div class="row">
                <button type="button" class="btn btn-sm col-2 button-purple m-2"
                        onclick="window.location.href='<?= $welcomeField['left_button']['left_url_link'] ?>';">
                    <?= $welcomeField['left_button']['left_button_text'] ?>
                </button>
                <button type="button" class="btn btn-sm col-2 button-white m-2"
                        onclick="window.location.href='<?= $welcomeField['right_button']['right_url_link'] ?>';">
                    <?= $welcomeField['right_button']['right_button_text'] ?>
                </button>
            </div>
        </div>
        <div class="col-6 m-auto">
            <img src="<?= $welcomeField['left_img'] ?>" alt="" style="width: 80%; height: auto">
        </div>
    </div>
</section>