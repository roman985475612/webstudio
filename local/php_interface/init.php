<?php

function dd($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

use Bitrix\Highloadblock\HighloadBlockTable as HLBT;

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
