<?php 
    include_once __DIR__ . '/../server/db.php'
?>
<div class="row row-cols-5" <?php foreach ($music as $card) {?>>
    <div class="col text-center text-light px-3 mb-3">
        <div class="h-100 card-wrapper card-bg-color p-3">
            <img src="image" alt="">
            <h4>titolo</h4>
            <h5>autore</h5>
            <h6>anno</h6>
        </div>
    </div>
    <?php } ?>
</div>