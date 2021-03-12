<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
  
<div class="mobile-menu-area visible-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <?php foreach ($arResult as $item): ?>
                                <li>
                                    <a href="<?= $item['LINK'] ?>">
                                        <?= $item['TEXT'] ?>
                                    
                                        <?php if (!empty($item['subitems'])): ?>
                                            <span class="indicator"><i class="fa fa-angle-down"></i></span>
                                        <?php endif ?>
                                    </a>
                                    <?php if (!empty($item['subitems'])): ?>
                                        <ul>
                                            <?php foreach ($item['subitems'] as $subitems): ?>
                                                <li>
                                                    <a href="<?= $subitems['LINK'] ?>"><?= $subitems['TEXT'] ?></a>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    <?php endif ?>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
