<?php

// Получим пользователя из БД
$user = CUser::GetList(
    ($by='id'),
    ($order='asc'),
    ['ID' => $arResult['PROPERTIES']['AUTHOR']['VALUE']],
)->Fetch();

$arResult['AUTHOR'] = !empty($user['NAME']) ? $user['NAME'] : $user['LOGIN'];

$arResult['COVER'] = $arResult['DETAIL_PICTURE']['SRC'];

$arResult['DATE'] = date('d F Y', strtotime($arResult['TIMESTAMP_X']));

$arResult['CATEGORY_NAME'] = $arResult['SECTION']['PATH'][0]['NAME'];
$arResult['CATEGORY_URL']  = $arResult['SECTION']['PATH'][0]['SECTION_PAGE_URL']
                           . $arResult['SECTION']['PATH'][0]['CODE'] . '/';
