<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>

<!-- Хлебные крошки (навигация) -->
<div class="breadcrumb-area brand-bg ptb-100">
    <div class="container width-100">
        <div class="row z-index">
            <div class="col-md-7 col-sm-6">
                <div class="breadcrumb-title">
                    <h2 class="white-text">Страница не найдена</h2>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="breadcrumb-menu">
                    <ol class="breadcrumb text-right">
                        <li class="active">404</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Контент (ошибка) -->
<div class="error-area ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-content text-center">
                    <h1>404</h1>
                    <p>Страница, которую вы ищете, не найдена!</p>
                    <a href="index.html" class="btn">На главную</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>