<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult)) {
    return;
}

?>

<?php foreach ($arResult as $item): ?>
    <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="single-pricing text-center mb-30">
            <div class="pricing-head">
                <h2 class="pricing-title text-uppercase"><?= $item['title'] ?></h2>
                <span><?= $item['subtitle'] ?></span>
            </div>
            <div class="pricing-plan-price <?= $item['color'] ?>">
                <span><span>от </span><?= $item['price'] ?><span> ₽</span></span>
            </div>
            <div class="pricing-plan-list">
                <ul>
                    <?php foreach ($item['advantages'] as $adv): ?>
                        <li><?= $adv ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="get-started">
                <a href="<?= $item['detail_page_url'] ?>" class="btn">Узнать больше</a>
            </div>
        </div>
    </div>
<?php endforeach ?>
