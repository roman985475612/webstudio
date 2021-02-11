<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
// dd($arResult);
?>
                    
<div class="header-main-menu hidden-xs">
    <nav id="primary-menu">
        <ul class="main-menu text-right">
            <?php foreach ($arResult as $item): ?>
                <li>
                    <a href="<?=$item['LINK']?>"><?=$item['TEXT']?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </nav>
</div>

