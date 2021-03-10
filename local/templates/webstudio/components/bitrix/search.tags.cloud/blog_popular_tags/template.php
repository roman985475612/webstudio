<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();

?>
<ul class="tag">
    <?php foreach($arResult['SEARCH'] as $tag): ?>
        <li
            <?php if($tag['SELECTED']): ?>
                class="active"
            <?php endif ?>
        ><a href="<?= $tag['URL'] ?>"><?= $tag['NAME'] ?></a></li>
    <?php endforeach ?>
</ul>
