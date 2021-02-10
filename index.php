<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости банка");

echo '<pre>' . print_r(SITE_TEMPLATE_PATH, 1) . '</pre>';

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");