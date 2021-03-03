<?php

$tempResult = [
    'TITLE'         => $arResult['PROPERTIES']['TITLE']['VALUE'],
    'DETAIL_TEXT'   => $arResult['DETAIL_TEXT'],
    'DETAIL_PICTURE'=> $arResult['DETAIL_PICTURE']['SRC'],
];

// Вопросы и ответы
$questions = array_set_id_as_key(getEntityDataByName('Questions'));
$qnas = getEntityDataByName('QuestionsAndAnswers', ['UF_SERVICE' => $arResult['ID']]);
$is_active = true;
foreach ($qnas as &$qna) {
    $qna['UF_QUESTION'] = $questions[$qna['UF_QUESTION']]['UF_QUESTION'];
    $qna['IS_ACTIVE'] = $is_active;

    $is_active = false;

    unset($qna['ID']);
    unset($qna['UF_SERVICE']);
}
$tempResult['QUESTIONS_AND_ANSWERS'] = $qnas;

// Этапы разработки
$typesDevelopmentStages = array_set_id_as_key(getEntityDataByName('TypesDevelopmentStages'));
$developmentStages = getEntityDataByName('DevelopmentStages');
$is_active = true;
foreach ($developmentStages as &$item) {
    $type = $typesDevelopmentStages[$item['UF_TYPE']];

    $item['CODE'] = $type['UF_CODE'];
    $item['NAME'] = $type['UF_NAME'];
    $item['DESCRIPTION'] = $item['UF_DESCRIPTION'];
    $item['IS_ACTIVE'] = $is_active;

    $is_active = false;

    unset($item['ID']);
    unset($item['UF_SERVICE']);
    unset($item['UF_DESCRIPTION']);
    unset($item['UF_TYPE']);
}
$tempResult['DEVELOPMENT_STAGES'] = $developmentStages;

$arResult = $tempResult;