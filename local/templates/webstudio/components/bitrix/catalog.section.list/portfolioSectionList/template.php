<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult['SECTIONS'])) {
    return;
}
?>

<div class="col-lg-12">
	<div class="portfolio-menu brand-filter text-center mb-70">
		<div class="filter" data-filter="all">Все</div>
		<?php foreach ($arResult['SECTIONS'] as $section): ?>
			<div class="filter" data-filter=".<?= $section['CODE'] ?>">
				<?= $section['NAME'] ?>
			</div>
		<?php endforeach ?>
	</div>
</div>
