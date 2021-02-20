<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Портфолио | We Coders");
$APPLICATION->SetTitle("Наши работы");

$APPLICATION->IncludeComponent(
    'bitrix:news',
    'Portfolio',
    [
        'IBLOCK_TYPE'   => 'content',
        'IBLOCK_ID'     => getIBlockIdByCode('portfolio'),
        'SEF_MODE'      => 'Y',
        'SEF_FOLDER'    => '/portfolio/',
        'SEF_URL_TEMPLATES' => [
            'detail' => '#SECTION_CODE_PATH#/#ELEMENT_CODE#/', 
        ],
        'BROWSER_TITLE' => 'NAME',
        'PROPERTY_CODE' => [
            'detail_title',
            'description',
            'add_info',
            'gallery',
            'link',
        ],
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
        'SET_TITLE'     => 'N',
        'SET_STATUS_404'=> 'Y',
        'SHOW_404'      => 'Y',
    ],
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");