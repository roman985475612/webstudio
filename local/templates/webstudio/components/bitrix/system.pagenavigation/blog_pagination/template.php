<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();

?>

<ul class="pagination mt-50">
    <?php foreach($arResult['pages'] as $page): ?>       
        <?php if($page['type'] == 'DISABLED'): continue; ?>
        <?php elseif($page['type'] == 'PREV'): ?>
            <li><a href="<?= $page['link'] ?>"><i class="fa fa-angle-left"></i></a></li>
        <?php elseif($page['type'] == 'NEXT'): ?>
            <li><a href="<?= $page['link'] ?>"><i class="fa fa-angle-right"></i></a></li>
        <?php elseif($page['type'] == 'CURRENT'): ?>
            <li><span class="current"><?= $page['text'] ?></span></li>
        <?php else: ?>
            <li><a href="<?= $page['link'] ?>"><?= $page['text'] ?></a></li>
        <?php endif ?>
    <?php endforeach ?>
</ul>
