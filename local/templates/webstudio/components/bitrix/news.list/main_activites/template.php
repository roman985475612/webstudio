<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult['ITEMS'])) {
    return;
}
?>

<section class="service-area pt-90 pb-60 bg-color">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Основные направления</h2>
                <p>Всё что нужно для производства сайта любой сложности</p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($arResult['ITEMS'] as $item): ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-service brand-hover radius-4 mb-30 text-center">
                        <div class="service-icon">
                            <span class="<?= $item['PROPERTIES']['ICON_CLASS']['VALUE'] ?>" aria-hidden="true"></span>
                        </div>
                        <div class="service-text">
                            <h3><?= $item['NAME'] ?></h3>
                            <p><?= $item['PREVIEW_TEXT'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
