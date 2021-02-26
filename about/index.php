<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "О студии | We Coders");
$APPLICATION->SetTitle("О студии");

// О Нас
$APPLICATION->IncludeFile(
    SITE_DIR . '/include/_about_us.php', 
    [], 
    [
        'MODE' => 'html',
        'NAME' => 'О нас',
    ]
);

// Команда
$APPLICATION->IncludeFile(
    SITE_DIR . '/include/_team.php', 
    [], 
    [
        'MODE' => 'html',
        'NAME' => 'Команда',
    ]
); 


// Отзывы
$APPLICATION->IncludeFile(
    SITE_DIR . '/include/_testimonials.php', 
    [], 
    [
        'MODE' => 'html',
        'NAME' => 'Отзывы',
    ]
); 

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");