<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php
        $APPLICATION->ShowHead();
        
        Asset::getInstance()->addCSS(SITE_TEMPLATE_PATH . '/assets/css/bootstrap.min.css');
        Asset::getInstance()->addCSS(SITE_TEMPLATE_PATH . '/assets/css/owl.carousel.css');
        Asset::getInstance()->addCSS(SITE_TEMPLATE_PATH . '/assets/css/animate-text.css');
        Asset::getInstance()->addCSS(SITE_TEMPLATE_PATH . '/assets/css/magnific-popup.css');
        Asset::getInstance()->addCSS(SITE_TEMPLATE_PATH . '/assets/css/et-line.css');
        Asset::getInstance()->addCSS(SITE_TEMPLATE_PATH . '/assets/css/pe-icon-7-stroke.css');
        Asset::getInstance()->addCSS(SITE_TEMPLATE_PATH . '/assets/css/shortcode/shortcodes.css');
        Asset::getInstance()->addCSS(SITE_TEMPLATE_PATH . '/assets/css/meanmenu.min.css');
        Asset::getInstance()->addCSS(SITE_TEMPLATE_PATH . '/assets/css/font-awesome.min.css');
        Asset::getInstance()->addCSS(SITE_TEMPLATE_PATH . '/assets/css/responsive.css');
        Asset::getInstance()->addCSS(SITE_TEMPLATE_PATH . '/assets/css/custom.css');
        Asset::getInstance()->addCSS(SITE_TEMPLATE_PATH . '/assets/style.css');
    
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/vendor/jquery-1.12.0.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/bootstrap.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/owl.carousel.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.counterup.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/waypoints.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.magnific-popup.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.mixitup.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.meanmenu.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.nav.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.parallax-1.1.3.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/animate-text.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/plugins.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/vendor/modernizr-2.8.3.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js');
        
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
        Asset::getInstance()->addString('<link rel="shortcut icon" type="image/x-icon" href="'.SITE_TEMPLATE_PATH.'/assets/img/favicon.png">');
        Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">');
    ?>

    <title><?php $APPLICATION->ShowTitle() ?></title>
</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel() ?></div>

<?php 
    if ($APPLICATION->GetCurPage() != '/') {
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/inc/header_top_area.php', [], [
            'MODE' => 'html',
            'NAME' => 'Редактирование линии с контактами',
        ]);
    } 
?>

<!-- Шапка сайта (меню) -->
<header 
    id="sticky-header" 
    <?php if ($APPLICATION->GetCurPage() == '/'): ?>
        class="header-area header-wrapper transparent-header"
    <?php else: ?>
        class="header-area header-wrapper white-bg"
    <?php endif ?>
>

    <!-- Меню (для десктопа) -->
    <div class="header-middle-area full-width">
        <div class="container">
            <div class="full-width-mega-dropdown">
                <div class="row">
                    <!-- Логотип -->
                    <div class="col-md-2 col-sm-3 col-xs-8">
                        <div class="logo ptb-22">
                            <a href="/">
                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo/logo.png" alt="main logo">
                            </a>
                        </div>
                    </div>

                    <!-- Меню (основное) -->
                    <div class="col-md-10 col-sm-9 col-xs-4 text-right">
                        <?php $APPLICATION->IncludeComponent("bitrix:menu", "top_menu", [
                            "ROOT_MENU_TYPE"        => "top", 
                            "MAX_LEVEL"             => "2", 
                            "CHILD_MENU_TYPE"       => "subtop", 
                            "USE_EXT"               => "Y",
                            "DELAY"                 => "N",
                            "ALLOW_MULTI_SELECT"    => "Y",
                            "MENU_CACHE_TYPE"       => "N", 
                            "MENU_CACHE_TIME"       => "3600", 
                            "MENU_CACHE_USE_GROUPS" => "Y", 
                            "MENU_CACHE_GET_VARS"   => "" 
                        ]);?>

                        <!-- Поиск -->
                        <div class="header-right">
                            <div class="header-search">
                                <div class="search-wrapper">
                                    <a href="javascript:void(0);" class="search-open">
                                        <i class="pe-7s-search"></i>
                                    </a>
                                    <div class="search-inside animated bounceInUp">
                                        <i class="icon-close search-close fa fa-times"></i>
                                        <div class="search-overlay"></div>
                                        <div class="position-center-center">
                                            <div class="search">
                                                <form>
                                                    <input type="search" placeholder="Поиск по сайту">
                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Меню (для мобилки) -->
    <div class="mobile-menu-area visible-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li>
                                    <a href="index.html">Главная</a>
                                </li>
                                <li>
                                    <a href="about_us.html">О нас</a>
                                </li>
                                <li>
                                    <a href="services.html">Услуги</a>
                                    <ul>
                                        <li>
                                            <a href="services_landing.html">Лендинг</a>
                                        </li>
                                        <li>
                                            <a href="services_online_shop.html">Интернет-магазин</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="portfolio.html">Портфолио</a>
                                </li>

                                <li>
                                    <a href="blog.html">Блог</a>
                                </li>
                                <li>
                                    <a href="contacts.html">Контакты</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Хлебные крошки (навигация) -->
<?php if ($APPLICATION->GetCurPage() != '/') {
    $APPLICATION->IncludeComponent(
        'bitrix:breadcrumb',
        'breadcrumb_blue',
        [
            'START_FROM' => '0',
            'SITE_ID'    => 's1',
        ]
    );
} ?>