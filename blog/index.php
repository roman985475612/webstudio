<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Блог | We Coders");
$APPLICATION->SetTitle("Блог");
?>
<?php $APPLICATION->IncludeComponent(
    'bitrix:news',
    'blog',
    [
        'IBLOCK_TYPE'       => 'content',
        'IBLOCK_ID'         => getIBlockIdByCode('blog'),
        'SEF_MODE'          => 'Y',
        'SEF_FOLDER'        => '/blog/',
        'SEF_URL_TEMPLATES' => [
            'detail' => '#SECTION_CODE_PATH#/#ELEMENT_CODE#/',
        ],
        'BROWSER_TITLE'     => 'NAME',
        'LIST_PROPERTY_CODE'=> [
            'AUTHOR',
        ],
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
        'SET_TITLE'         => 'Y',
        'SET_STATUS_404'    => 'Y',
        'SHOW_404'          => 'Y',
    ],
); ?>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");