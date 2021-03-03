<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Услуги | We Coders");
$APPLICATION->SetTitle("Чем мы занимаемся");

// Услуги
$APPLICATION->IncludeComponent(
    'bitrix:news',
    'services',
    [
        'IBLOCK_TYPE'   => 'content',
        'IBLOCK_ID'     => getIBlockIdByCode('services'),
        'SEF_MODE'      => 'Y',
        'SEF_FOLDER'    => '/services/',
        'SEF_URL_TEMPLATES' => [
            'detail' => '#ELEMENT_CODE#/',
        ],
        'BROWSER_TITLE' => 'NAME',
        'LIST_PROPERTY_CODE' => [
            'TITLE',
            'SUBTITLE',
            'PRICE',
            'ADVANTAGES',
            'COLOR',
        ],
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
        'SET_TITLE'     => 'Y',
        'SET_STATUS_404'=> 'Y',
        'SHOW_404'      => 'Y',
    ],
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");