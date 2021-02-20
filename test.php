<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Тестовая страница");
$APPLICATION->SetTitle('Тест');
?>

<?php /*$APPLICATION->IncludeComponent(
    'bitrix:breadcrumb',
    'breadcrumb_blue',
    [
        'START_FROM' => '0',
        'SITE_ID'    => 's1',
    ]
) */?>


<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");