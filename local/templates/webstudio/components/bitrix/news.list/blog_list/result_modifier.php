<?php

$user_ids = [];
$category_ids = [];
foreach ($arResult['ITEMS'] as $item) {
    $user_ids[] = $item['PROPERTIES']['AUTHOR']['VALUE'];
    $category_ids[] = $item['IBLOCK_SECTION_ID'];
}

$user_ids = array_unique($user_ids);
$user_ids = implode(' | ', $user_ids);

// Получим пользователей из БД
$rsUsers = CUser::GetList(
    ($by='id'),
    ($order='asc'),
    ['ID' => $user_ids],
);

// Сформируем массив вида ID => UserName
$users = [];
while($user = $rsUsers->Fetch()) {
    $userID   = $user['ID'];
    $userName = !empty($user['NAME']) ? $user['NAME'] : $user['LOGIN'];
    $users[$userID] = ucfirst($userName);
}

// Сформируем массив вида CategoryID => [CategoryName, CategoryURL]
$rsSections = CIBlockSection::GetList(
    ['SORT' => 'ASC'],
    [
        'IBLOCK_CODE' => 'blog',
        'ID' => array_unique($category_ids),
    ],
    true,
    ['ID', 'NAME', 'CODE']
);

$categories = [];
while($category = $rsSections->Fetch()) {
    $categories[$category['ID']] = [
        'NAME' => $category['NAME'],
        'URL'  => '/blog/' . $category['CODE'] . '/',
    ];
}

foreach ($arResult['ITEMS'] as &$item) {
    $userID = $item['PROPERTIES']['AUTHOR']['VALUE'];
    $item['AUTHOR'] = $users[$userID];

    $categoryID = $item['IBLOCK_SECTION_ID'];
    $item['CATEGORY'] = $categories[$categoryID];

    $item['COVER'] = $item['PREVIEW_PICTURE']['SRC'];
    $item['DATE'] = date('d F Y', strtotime($item['TIMESTAMP_X']));
}
