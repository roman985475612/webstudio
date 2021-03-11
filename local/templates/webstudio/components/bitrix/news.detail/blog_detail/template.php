<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use \Bitrix\Main\Localization\Loc;
Loc::loadLanguageFile(__FILE__);
?>
<article class="post-wrapper mb-60">
    <div class="post-img hover-bg-opacity">
        <h3 class="text-blue"><?= $arResult['NAME'] ?></h3>
        <div class="post-img hover-bg-opacity">
            <img src="<?= $arResult['COVER'] ?>" alt=""/>
        </div>
    </div>
    <div class="post-content">
        <div class="post-meta">
            <span><a href="#"><i class="fa fa-clock-o"></i> <?= $arResult['DATE'] ?></a></span> -
            <span><a href="#"><i class="fa fa-user"></i> <?= $arResult['AUTHOR'] ?></a></span> -
            <span><a href="<?= $arResult['CATEGORY_URL'] ?>"><?= $arResult['CATEGORY_NAME'] ?></a></span> -
            <span><a href="#"><i class="fa fa-eye"></i> <?= $arResult['SHOW_COUNTER'] ?></a></span>
        </div>
        <?= $arResult['DETAIL_TEXT'] ?><br>
    </div>

    <a href="<?= $arResult['LIST_PAGE_URL'] ?>" class="btn btn-primary">
        <i class="fa fa-chevron-left"></i>&nbsp;&nbsp;<?=Loc::getMessage('BACK_TO_LIST');?>
    </a>
</article>
