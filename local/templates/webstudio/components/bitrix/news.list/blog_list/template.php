<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();

use \Bitrix\Main\Localization\Loc;
Loc::loadLanguageFile(__FILE__);
?>
<?php if(!empty($arResult['ITEMS'])): ?>
    <?php foreach ($arResult['ITEMS'] as $item): ?>
        <article class="post-wrapper mb-60">
            <div class="post-img hover-bg-opacity">
                <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                    <img src="<?= $item['COVER'] ?>" alt=""/>
                </a>
            </div>
            <div class="post-content">
                <h3>
                    <a href="<?= $item['DETAIL_PAGE_URL'] ?>"><?= $item['NAME'] ?></a>
                </h3>
                <div class="post-meta">
                    <span><a href="#"><i class="fa fa-clock-o"></i> <?= $item['DATE'] ?></a></span> -
                    <span><a href="#"><i class="fa fa-user"></i> <?= $item['AUTHOR'] ?></a></span> -
                    <span><a href="<?= $item['CATEGORY']['URL'] ?>"><?= $item['CATEGORY']['NAME'] ?></a></span> -
                    <span><a href="#"><i class="fa fa-eye"></i> <?= $item['SHOW_COUNTER'] ?></a></span>
                </div>
                <?= $item['PREVIEW_TEXT'] ?><br>
                <a class="read-more btn btn-small" href="<?= $item['DETAIL_PAGE_URL'] ?>">
                    <?=Loc::getMessage('READ_MORE');?> <i class="fa fa-chevron-right"></i>
                </a>
            </div>
        </article>
    <?php endforeach ?>
<?php else: ?>
    <p>В этом разделе пока еще нет статей...</p>
<?php endif ?>
<?= $arResult['NAV_STRING'] ?>
