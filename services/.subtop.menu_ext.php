<?php
global $APPLICATION; 

CModule::IncludeModule("iblock");

$iblockId = getIBlockIdByCode('services');

$arOrder = ['SORT' => 'ASC'];
$arSelect = ["NAME", "DETAIL_PAGE_URL"];
$arFilter = ["IBLOCK_ID" => $iblockId, "ACTIVE" => "Y"];

$res = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);

$aMenuLinksExt = [];

while ($ob = $res->GetNextElement()) {
	$arFields = $ob->GetFields();
	
	$aMenuLinksExt[] = [
		$arFields['NAME'],
		$arFields['DETAIL_PAGE_URL'],
		[],
		[],
		''
	];
}  

$aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);