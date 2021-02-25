<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("description", "We Coders - это команда профессиональных разработчиков сайтов!");
$APPLICATION->SetTitle("Digital-агенство We Coders");

// Слайдер
$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'main_slider',
    [
        'IBLOCK_TYPE'   => 'content',
        'IBLOCK_ID'     => getIBlockIdByCode('mainSlider'),
        'NEWS_COUNT'    => '3',
        'SORT_BY1'      => 'SORT',
        'SORT_ORDER1'   => 'ASC',
        'PROPERTY_CODE' => ['BUTTON_TEXT', 'BUTTON_LINK'],
        'SET_TITLE'     => 'N',
    ]
);

// О нас
$APPLICATION->IncludeFile(
    SITE_DIR . '/include/_about_us.php', 
    [], 
    [
        'MODE' => 'html',
        'NAME' => 'Редактирование линии с контактами',
    ]
);

// Основные направления
$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'main_activites',
    [
        'IBLOCK_TYPE'         => 'content',
        'IBLOCK_ID'           => getIBlockIdByCode('mainActivites'),
        'NEWS_COUNT'          => '3',
        'SORT_BY1'            => 'SORT',
        'SORT_ORDER1'         => 'ASC',
        'PARENT_SECTION_CODE' => 'glavnaya-stranitsa',
        'PROPERTY_CODE'       => ['ICON_CLASS'],
        'SET_TITLE'           => 'N',
    ]
);

// Инфографика
$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'infographics',
    [
        'IBLOCK_TYPE'         => 'content',
        'IBLOCK_ID'           => getIBlockIdByCode('infographics'),
        'NEWS_COUNT'          => '4',
        'SORT_BY1'            => 'SORT',
        'SORT_ORDER1'         => 'ASC',
        'PARENT_SECTION_CODE' => 'glavnaya-stranitsa',
        'PROPERTY_CODE'       => ['ICON', 'COUNTER'],
        'SET_TITLE'           => 'N',
    ]
);

// Наши работы
$APPLICATION->IncludeFile(
    SITE_DIR . '/include/_portfolio_list.php', 
    [], 
    [
        'MODE' => 'html',
        'NAME' => 'Наши работы',
    ]
);

// Отзывы клиентов
$APPLICATION->IncludeFile(
    SITE_DIR . '/include/_testimonials.php', 
    [], 
    [
        'MODE' => 'html',
        'NAME' => 'Наши работы',
    ]
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");