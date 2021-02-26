<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Тестовая страница");
$APPLICATION->SetTitle('Тест');
?>

<?php

$data = getEntityDataByName('contact');
dd($data);

?>


<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");