<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult)) {
    return;
}
?>

<div class="single-portfolio-area pt-90 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="portfolio-details">
                    <h3><?= $arResult['PROPERTIES']['detail_title']['VALUE'] ?></h3>

					<?php foreach ($arResult['PROPERTIES']['description']['VALUE'] as $key => $value): ?>
						<span class="text-colort-blue"><?= $arResult['PROPERTIES']['description']['DESCRIPTION'][$key] ?></span>
	                    <p><?= $value['TEXT'] ?></p>
					<?php endforeach ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="portfolio-meta">
                    <ul>
						<?php foreach ($arResult['PROPERTIES']['add_info']['VALUE'] as $key => $value): ?>
                        	<li>
								<span><b><?= $arResult['PROPERTIES']['add_info']['DESCRIPTION'][$key] ?>:</b></span> 
								<?= $value ?>
							</li>
						<?php endforeach ?>
                    </ul>
                    <a href="//<?= $arResult['PROPERTIES']['link']['VALUE'] ?>" class="btn mt-30">Посмотреть сайт</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Фотогалерея -->
<div class="img-gallery-area pt-30 pb-60">
    <div class="container">
        <div class="row">
			<?php foreach ($arResult['photos'] as $key => $photo): ?>
				<div class="col-md-6 col-sm-4">
					<div class="img-gallery hover-bg-opacity mb-30">
						<a class="image-link" href="<?= $photo['SRC'] ?>">
							<img 
								src="<?= $photo['SRC'] ?>" 
								alt="<?= $arResult['PROPERTIES']['gallery']['DESCRIPTION'][$key] ?>"
							>
						</a>
					</div>
				</div>
			<?php endforeach ?>
        </div>
    </div>
</div>
