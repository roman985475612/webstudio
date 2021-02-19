<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

\Bitrix\Main\UI\Extension::load("ui.bootstrap4");
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="row">
	<form id="contact-form" class="default-form" action="<?=POST_FORM_ACTION_URI?>" method="POST">
		<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">

		<?php if(!empty($arResult["ERROR_MESSAGE"])): ?>
				<?php foreach($arResult["ERROR_MESSAGE"] as $v): ?>
					<p class="form-messege" style="color:red"><?= $v ?></p>
				<?php endforeach ?>
		<?php endif ?>

		<?php if($arResult["OK_MESSAGE"] <> ''): ?>
			<div class="alert alert-success"><?=$arResult["OK_MESSAGE"]?></div>
		<?php endif ?>

		<?=bitrix_sessid_post()?>
		<div class="col-md-4 col-sm-6">
			<input
				type="text"
				id="mainFeedback_name"
				name="user_name"
				value="<?=$arResult["AUTHOR_NAME"]?>"
				placeholder="<?=GetMessage("MFT_NAME");?>"
				<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])): ?>required<?endif?>
			/>
		</div>

		<div class="col-md-4 col-sm-6">
			<input
				type="text"
				name="user_email"
				id="mainFeedback_email"
				value="<?=$arResult["AUTHOR_EMAIL"]?>"
				placeholder="<?=GetMessage("MFT_EMAIL")?>"
				<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?>required<?endif?>
			/>
		</div>

		<div class="col-md-4 col-sm-6">
			<input
				type="text"
				name="user_phone"
				id="mainFeedback_phone"
				value="<?=$arResult["PHONE"]?>"
				placeholder="<?=GetMessage("MFT_PHONE")?>"
				<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?>required<?endif?>
			/>
		</div>

		<div class="col-md-12 col-sm-12">
			<textarea id="mainFeedback_message" cols="30" rows="10" placeholder="<?=GetMessage("MFT_MESSAGE")?>"><?=$arResult["MESSAGE"]?></textarea>
			<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn mt-30">
		</div>
	</form>
</div>