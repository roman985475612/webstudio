<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult['ITEMS'])) {
    return;
}
?>

<!-- Слайдер -->
<section class="slider-area">
    <div class="slider-active">
        <?php foreach ($arResult['ITEMS'] as $item): ?>
            <div class="single-slider">
                <div class="slider-img parallax-bg bg-opacity-black-60" style="background:url(<?= $item['PREVIEW_PICTURE']['SRC'] ?>)"></div>
                <div class="slider-content slider-style-2 slider-style-4 text-center z-index-5">
                    <span><?= $item['NAME'] ?></span>
                    <h2><?= $item['PREVIEW_TEXT'] ?></h2>
                    <?php if(!empty($item['PROPERTIES']['BUTTON_TEXT']['VALUE'])): ?>
                        <a 
                            class="my-button" 
                            href="<?= $item['PROPERTIES']['BUTTON_LINK']['VALUE'] ?>"
                        >
                            <?= $item['PROPERTIES']['BUTTON_TEXT']['VALUE'] ?>
                        </a>
                    <?php endif ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>
