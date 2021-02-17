<?php

if (!empty($arResult['PROPERTIES']['gallery']['VALUE'])) {
    foreach ($arResult['PROPERTIES']['gallery']['VALUE'] as $key => $photoID) {
        $photo = CFile::GetFileArray($photoID);
        $arResult['photos'][$key] = $photo;
    }
}