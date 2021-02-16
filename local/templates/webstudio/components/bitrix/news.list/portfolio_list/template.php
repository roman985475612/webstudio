<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult['ITEMS'])) {
    return;
}
?>

<div id="Container">
	<?php foreach ($arResult['ITEMS'] as $item): ?>
		<div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix <?= isset($item['SECTIONS_CODES']) ? $item['SECTIONS_CODES'] : ''; ?>">
			<div class="portfolio-wrapper portfolio-title">
				<div class="portfolio-img">
					<?php if ($item['PREVIEW_PICTURE']['SRC']): ?>
						<img 
							src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>"
							alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>"
						>

						<div class="work-text brand-bg">
							<div class="inner-text">
								<a class="view-portfolio image-link" href="<?= $item['PREVIEW_PICTURE']['SRC'] ?>">
									<span class="plus"></span>
								</a>
							</div>
						</div>
					<?php endif; ?>
				</div>
				<div class="portfolio-heading pd-15">
					<h4 class="mb-10">
						<a href="<?= $item['DETAIL_PAGE_URL'] ?>">
							<?= isset($item['NAME']) ? $item['NAME'] : ''; ?>
						</a>
					</h4>
					<h5 class="m-0"><?= $item['PREVIEW_TEXT'] ?></h5>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>
