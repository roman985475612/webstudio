<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(empty($arResult))
	return '';

global $APPLICATION;

$res = <<<HERE
<div class="breadcrumb-area brand-bg ptb-100">
    <div class="container width-100">
        <div class="row z-index">
            <div class="col-md-7 col-sm-6">
                <div class="breadcrumb-title">
                    <h2 class="white-text">{$APPLICATION->GetTitle()}</h2>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="breadcrumb-menu">
                    <ol class="breadcrumb text-right">
HERE;

foreach ($arResult as $idx => $item) {
    $res .= '<li>';
    $res .= '<a href="' . $item['LINK'] . '">' . $item['TITLE'] . '</a>';
    $res .= '</li>';
}
                            
$res .= '
                    </ol>
                </div>            
            </div>
        </div>
    </div>
</div>';

return $res;