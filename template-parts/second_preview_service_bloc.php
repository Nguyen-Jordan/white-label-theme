<?php $service = get_field('second_preview_service_bloc') ?>
<section class="my-5">
    <div class="row d-flex justify-content-center">
        <div class="col-5 m-auto">
            <img src="<?= $service['img'] ?>" alt="" style="width: 80%; height: auto">
        </div>
        <div class="col-5 m-auto">
            <h1><?= $service['title'] ?></h1>
            <p><?= $service['text'] ?></p>
            <div class="row">
                <a href="<?= $service['url_link'] ?>">Voir plus</a>
                <i class="bi bi-arrow-right"></i>
            </div>
        </div>
    </div>
</section>