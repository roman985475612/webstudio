<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Поиск | We Coders");
$APPLICATION->SetTitle("Поиск");

$APPLICATION->IncludeComponent(
    'bitrix:search.page',
    'search_page',
    [
        'PAGE_RESULT_COUNT' => '1',
        'PAGER_TEMPLATE'    => 'blog_pagination',
    ]
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
