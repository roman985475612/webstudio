<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>
<!-- Результаты поиска -->
<div class="faq-area pt-30">
    <div class="container">

        <!-- Блок с поиском -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="faq-search text-center pt-40">
                    <h2 class="">Что ищем?</h2>
                    <form class="mb-20" action="">
                        <input type="text" name="q" placeholder="Поиск" value="<?=$arResult["REQUEST"]["QUERY"]?>" />
                        <button type="submit" name="s"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Результаты -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="faq-style pt-40 pb-80">
                    <?php foreach($arResult['SEARCH'] as $item): ?>
                        <div class="single-faq">
                            <h4><a href="<?= $item['URL_WO_PARAMS'] ?>"><?= $item['TITLE_FORMATED'] ?></a></h4>
                            <p><?= $item['BODY_FORMATED'] ?></p>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>            
        </div>
        <div class="row">
            
            <div class="col-md-4 col-md-offset-4" style="margin-bottom:2em">
                <?= $arResult['NAV_STRING'] ?>
            </div>

        </div>
    </div>
</div>
