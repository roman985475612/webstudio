<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult)) {
    return;
}
?>
<!-- ДЛЯ СТРАНИЦЫ УСЛУГИ -->
<!-- Описание + картинка -->
<section class="who-area-are pad-90" id="about_us">
    <div class="container">
        <h2 class="title-1"><?= $arResult['TITLE'] ?></h2>
        <div class="row">
            <div class="col-md-7">
                <div class="who-we"><?= $arResult['DETAIL_TEXT'] ?></div>
            </div>
            <div class="col-md-5">
                <div class="about-bg">
                    <img src="<?= $arResult['DETAIL_PICTURE'] ?>" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Доп. контент об услуге -->
<div class="pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-30">Вопросы и ответы</h3>
                <div class="brand-accordion">
                    <div class="panel-group icon angle-icon" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php foreach ($arResult['QUESTIONS_AND_ANSWERS'] as $key => $value): ?>
                            <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a
                                        <?php if (!$value['IS_ACTIVE']): ?>
                                            class="collapsed"
                                        <?php endif ?>
                                        role="button"
                                        data-toggle="collapse"
                                        data-parent="#accordion"
                                        href="#collapse<?= $key ?>"
                                        aria-expanded="<?= $value['IS_ACTIVE'] ?>"
                                        aria-controls="collapse<?= $key ?>"
                                    >
                                        <?= $value['UF_QUESTION'] ?>
                                    </a>
                                </h4>
                            </div>
                            <div
                                id="collapse<?= $key ?>"
                                <?php if ($value['IS_ACTIVE']): ?>
                                    class="panel-collapse collapse in"
                                <?php else: ?>
                                    class="panel-collapse collapse"
                                <?php endif ?>
                                role="tabpanel"
                                aria-labelledby="heading<?= $key ?>"
                            >
                                <div class="panel-body"><?= $value['UF_ANSWER'] ?></div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <h3 class="mb-30">Этапы разработки</h3>
                <div class="my-tab">
                    <!-- Nav tabs -->
                    <ul class="custom-tab mb-15" role="tablist">
                        <?php foreach ($arResult['DEVELOPMENT_STAGES'] as $item): ?>
                            <li
                                role="presentation"
                                <?php if ($item['IS_ACTIVE']): ?>
                                    class="active"
                                <?php endif?>
                            >
                                <a href="#<?= $item['CODE'] ?>" aria-controls="<?= $item['CODE'] ?>" role="tab" data-toggle="tab">
                                    <?= $item['NAME'] ?>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <?php foreach ($arResult['DEVELOPMENT_STAGES'] as $item): ?>
                            <div
                                role="tabpanel"
                                id="<?= $item['CODE'] ?>"
                                <?php if ($item['IS_ACTIVE']): ?>
                                    class="tab-pane fade in active"
                                <?php else: ?>
                                    class="tab-pane fade"
                                <?php endif; $is_active = false ?>
                            >
                                <?= $item['DESCRIPTION'] ?>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
