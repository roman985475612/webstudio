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

Loader::includeModule("highloadblock"); 

function GetEntityDataById($HlBlockId)
{
    if (empty($HlBlockId) || $HlBlockId < 1) {
        return false;
    }
    $hlblock = HLBT::getById($HlBlockId)->fetch();

    $entity = HLBT::compileEntity($hlblock);

    $entity_data_class = $entity->getDataClass();
    
    $rsData = $entity_data_class::getList([
       'select' => ['*'],
       'order'  => ['ID' => 'ASC'],
    ]);

    $result = [];
    
    while ($data = $rsData->fetch()) {
        $result[] = $data; 
    }

    return $result;
}

function getEntityDataByTableName($tableName)
{
    $hlblock = HLBT::getList(['filter' => ['TABLE_NAME' => $tableName]])->fetch();

    $entity = HLBT::compileEntity($hlblock);

    $entity_data_class = $entity->getDataClass();

    $rsData = $entity_data_class::getList([
        'select' => ['*'],
        'order'  => ['ID' => 'ASC'],
    ]);

    $result = [];

    while ($data = $rsData->fetch()) {
        $result[] = $data;
    }

    return $result;
}

function getEntityDataByName($hlblockName)
{
    // $hlblock = HLBT::getList(['filter' => ['NAME' => $hlblockName]])->fetch();
    // $entity = HLBT::compileEntity($hlblock);

    $entity = HLBT::compileEntity($hlblockName);

    $entity_data_class = $entity->getDataClass();
    
    $rsData = $entity_data_class::getList([
       'select' => ['*'],
       'order'  => ['ID' => 'ASC'],
    ]);

    $result = [];
    
    while ($data = $rsData->fetch()) {
        $result[] = $data; 
    }

    return $result;
}
