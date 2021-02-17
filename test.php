<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->IncludeComponent(
    'bitrix:catalog.section.list',
    '',
    [
        'IBLOCK_TYPE'   => 'content',
        'IBLOCK_ID'     => getIBlockIdByCode('portfolio'),
    ]
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");