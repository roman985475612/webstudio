<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Блог | We Coders");
$APPLICATION->SetTitle("Блог");
?>

<div class="blog-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">

                <?php $APPLICATION->IncludeComponent(
                    'bitrix:news',
                    'blog',
                    [
                        'IBLOCK_TYPE'       => 'content',
                        'IBLOCK_ID'         => getIBlockIdByCode('blog'),
                        'NEWS_COUNT'        => 1,
                        'PAGER_TEMPLATE'    => 'blog_pagination',
                        'SEF_MODE'          => 'Y',
                        'SEF_FOLDER'        => '/blog/',
                        'SEF_URL_TEMPLATES' => [
                            'section' => '#SECTION_CODE#/',
                            'detail'  => '#SECTION_CODE_PATH#/#ELEMENT_CODE#/',
                        ],
                        'BROWSER_TITLE'     => 'NAME',
                        'FIELD_CODE'        => ['SHOW_COUNTER'],
                        'DETAIL_FIELD_CODE' => ['SHOW_COUNTER'],
                        'LIST_FIELD_CODE'   => ['SHOW_COUNTER'],
                        'LIST_PROPERTY_CODE'=> ['AUTHOR',],
                        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                        'SET_TITLE'         => 'Y',
                        'SET_STATUS_404'    => 'Y',
                        'SHOW_404'          => 'Y',
                    ],
                ); ?>

            </div>

            <!-- Правая колонка -->
            <div class="col-md-4 col-sm-12 col-xs-12 mt-sm-40 mt-xs-40">

                <?php 
                // Поиск
                $APPLICATION->includeComponent(
                    'bitrix:search.form',
                    'blog_search_form',
                    [
                        'PAGE' => '#SITE_DIR#search/index.php',
                    ]
                ); 

                // Категории
                $APPLICATION->IncludeComponent(
                    'bitrix:catalog.section.list',
                    'blog_category',
                    [
                        'IBLOCK_TYPE'   => 'content',
                        'IBLOCK_ID'     => getIBlockIdByCode('blog'),
                        'COUNT_ELEMENTS'=> 'N',
                    ]
                );

                // Популярные теги
                $APPLICATION->IncludeComponent(
                    'bitrix:search.tags.cloud',
                    'blog_popular_tags',
                    [
                        'URL_SEARCH' => '/search/index.php',
                    ]
                );
                ?>

            </div>
        </div>
    </div>
</div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");