<?php

use Bitrix\Highloadblock\HighloadBlockTable as HLBT;
use Bitrix\Iblock\IblockTable;
use Bitrix\Main\Loader;

function getIBlockIdByCode(string $code): int
{
    Loader::includeModule('iblock');

    $iblock = IblockTable::getList([
        'filter' => [
            'CODE' => $code,
        ],
        'select' => [
            'ID',
            'CODE',
        ]
    ])->fetch();
    
    if (!isset($iblock['ID'])) {
        throw new Exception("Не найден инфоблок с кодом {$code}");
    }

    return (int) $iblock['ID'];
}

function dd($data)
{
    echo '<pre style="text-align: left;">' . print_r($data, 1) . '</pre>';
}

CModule::IncludeModule('highloadblock');

function GetEntityDataClass($HlBlockId) 
{
    if (empty($HlBlockId) || $HlBlockId < 1) {
        return false;
    }
    $hlblock = HLBT::getById($HlBlockId)->fetch();
    $entity = HLBT::compileEntity($hlblock);
    $entity_data_class = $entity->getDataClass();
    
    return $entity_data_class;
}

function GetEntityDataById($HlBlockId)
{
    $entity_data_class = GetEntityDataClass($HlBlockId);
    
    $rsData = $entity_data_class::getList([
       'select' => ['*']
    ]);

    $result = [];
    
    while ($data = $rsData->fetch()) {
        $result[] = $data; 
    }

    return $result;
}