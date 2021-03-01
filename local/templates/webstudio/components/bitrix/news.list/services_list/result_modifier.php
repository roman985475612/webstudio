<?php

$adv = [];
$advantages = getEntityDataByName('Preimushchestva');
foreach ($advantages as $advantage) {
    $adv[$advantage['UF_XML_ID']] = $advantage['UF_NAME'];
}

$tempResult = [];

foreach ($arResult['ITEMS'] as $item) {

    $curAdvantages = [];
    foreach ($item['PROPERTIES']['ADVANTAGES']['VALUE'] as $key => $value) {
        $curAdvantages[] = $adv[$value];
    }
    for ($i = $key; $i < 5; $i++) {
        $curAdvantages[] = '-';
    }

    $tempResult[] = [
        'title'           => $item['NAME'],
        'subtitle'        => $item['PROPERTIES']['SUBTITLE']['VALUE'],
        'price'           => $item['PROPERTIES']['PRICE']['VALUE'],
        'color'           => $item['PROPERTIES']['COLOR']['VALUE'],
        'detail_page_url' => $item['DETAIL_PAGE_URL'],
        'advantages'      => $curAdvantages,
    ];
}
$arResult = $tempResult;