<?php 
    include_once __DIR__ . '/../server/db.php'
?>

<div class="carta row row-cols-5" <?php foreach ($music as $card) {?>>
    <div class="col text-center text-light px-3 mb-3">
        <div class="card h-100 c-wrapper p-3" style="background-color: #2E3A46" >
            <img class="image-card w-100" src="<?= $card['poster'] ?>" alt="">
            <h4><?= $card['title'] ?></h4>
            <h5><?= $card['author'] ?></h5>
            <h6><?= $card['year'] ?></h6>
        </div>
    </div>
    <?php } ?>
</div>