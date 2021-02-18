<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>

<section class="work-area pt-90 pb-60" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Портфолио</h2>
                <p>Лучший способ найти хорошую команду - это посмотреть результаты её работы</p>
            </div>
        </div>
        <div class="row">
            
            <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:catalog.section.list',
                    'portfolioSectionList',
                    [
                        'IBLOCK_TYPE'   => 'content',
                        'IBLOCK_ID'     => getIBlockIdByCode('portfolio'),
                    ]
                );
            
                $APPLICATION->IncludeComponent(
                    'bitrix:news.list',
                    'portfolio_list',
                    [
                        'IBLOCK_TYPE'   => 'content',
                        'IBLOCK_ID'     => getIBlockIdByCode('portfolio'),
                        'NEWS_COUNT'    => 6,
                        'SET_TITLE'     => 'N',
                    ],
                );
            ?>
        
        </div>

    </div>
</section>
