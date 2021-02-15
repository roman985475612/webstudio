<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult['ITEMS'])) {
    return;
}
?>

<section class="project-count-area brand-bg pad-90">
    <div class="container">
        <div class="row">
            <?php foreach ($arResult['ITEMS'] as $item): ?>
                <div class="col-md-3 col-sm-3">
                    <div class="single-count white-text text-center">
                        <span class="<?= $item['PROPERTIES']['ICON']['VALUE'] ?>"></span>
                        <h2 class="counter"><?= $item['PROPERTIES']['COUNTER']['VALUE'] ?></h2>
                        <p><?= $item['NAME'] ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
