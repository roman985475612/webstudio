<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Портфолио");
$APPLICATION->SetPageProperty("title", "Портфолио | We Coders");

$APPLICATION->IncludeComponent(
    'bitrix:news',
    'Portfolio',
    [
        'IBLOCK_TYPE'   => 'content',
        'IBLOCK_ID'     => getIBlockIdByCode('portfolio'),
        'SEF_MODE'      => 'Y',
        'SEF_FOLDER'    => '/portfolio/',
        'SEF_URL_TEMPLATES' => [
            'detail' => '#SECTION_CODE#/#ELEMENT_CODE#/', 
        ],
        'SET_TITLE'     => 'Y',
        'SET_STATUS_404'=> 'Y',
        'SHOW_404'      => 'Y',
    ],
);



require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");