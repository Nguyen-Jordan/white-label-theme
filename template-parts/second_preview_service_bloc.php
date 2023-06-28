<?php $service = get_field('second_preview_service_bloc') ?>
<section class="my-5 py-2">
    <div class="row d-flex justify-content-center">
        <div class="col-5 m-auto">
            <img src="<?= $service['img'] ?>" alt="" style="width: 80%; height: auto">
        </div>
        <div class="col-5 m-auto">
            <h1><?= $service['title'] ?></h1>
            <p><?= $service['text'] ?></p>
            <a href="<?= $service['url_link'] ?>">
                Voir plus
                <img class="px-2" width="50" height="34" src="https://img.icons8.com/laces/64/arrow.png" alt="arrow"/>
            </a>
        </div>
    </div>
</section>