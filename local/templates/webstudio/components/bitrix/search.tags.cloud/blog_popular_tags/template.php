<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();

?>
<div class="widget mb-60">
    <h4 class="sidebar-title text-uppercase mb-35 pb-10">Популярные теги</h4>
    <ul class="tag">
        <?php foreach($arResult['SEARCH'] as $tag): ?>
            <li
                <?php if($tag['SELECTED']): ?>
                    class="active"
                <?php endif ?>
            ><a href="<?= $tag['URL'] ?>"><?= $tag['NAME'] ?></a></li>
        <?php endforeach ?>
    </ul>
</div>
