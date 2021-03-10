<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult['SECTIONS'])) {
    return;
}
?>
<div class="widget mb-60">
    <h4 class="sidebar-title text-uppercase mb-35 pb-10">Категории</h4>
    <ul class="widget-cat">
        <?php foreach($arResult['SECTIONS'] as $item): ?>
            <li><a href="<?= $item['SECTION_PAGE_URL'] ?>"><?= $item['NAME'] ?></a></li>
        <?php endforeach ?>
    </ul>
</div>
