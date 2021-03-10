<?php

$queryString = $arResult['sUrlPathParams'].'PAGEN_'.$arResult['NavNum'].'=';

$prev = $arResult['NavPageNomer'] - 1;
$next = $arResult['NavPageNomer'] + 1;

if ($prev > 1)
    $prevQueryString = $queryString . $prev;
elseif ($prev = 1)
    $prevQueryString = $arResult['sUrlPath'];

if ($next <= $arResult['NavPageCount'])
    $nextQueryString = $queryString . $next;

$pages = [];

if ($arResult['NavPageNomer'] > 1) {
    $pages['prev'] = [
        'type' => 'PREV',
        'link' => $prevQueryString,
    ];

} else {
    $pages['prev'] = [
        'type' => 'DISABLED',
        'link'  => '',
    ];
}

for ($i = 1; $i <= $arResult['NavPageCount']; $i++) {
    if ($i == $arResult['NavPageNomer']) {
        $page = [
            'type' => 'CURRENT',
            'link'  => '#!',
        ];
    // } else if ($i == 1) {
    //     $page = [
    //         'type' => '',
    //         'link'  => $prevQueryString,
    //     ];
    } else {
        $page = [
            'type' => '',
            'link'  => $queryString . $i,
        ];
    }

    $page['text'] = $i;

    $pages[$i] = $page;
}

if ($arResult['NavPageNomer'] < $arResult['NavPageCount']) {
    $pages['next'] = [
        'type' => 'NEXT',
        'link'  => $nextQueryString,
    ];

} else {
    $pages['next'] = [
        'type' => 'DISABLED',
        'link'  => '',
    ];
}

$arResult['pages'] = $pages;
