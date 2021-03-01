<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Услуги | We Coders");
$APPLICATION->SetTitle("Чем мы занимаемся");

$aboutUs = getEntityDataByName('AboutUs')[0];

$skills = getEntityDataByName('Skills');

?>

<!-- Текстовый блок + скилы -->
<section class="who-area-are bg-color pad-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="who-we">
                    <h2 class="title-1"><?= $aboutUs['UF_TITLE'] ?></h2>
                    <?= $aboutUs['UF_TEXT'] ?>
                </div>
            </div>
            <?php if (!empty($skills)): ?>
                <div class="col-lg-6 col-md-6">
                    <div class="our-skill">
                        <h2 class="title-1">Skills</h2>
                        <div class="progress-list">
                            <?php foreach ($skills as $skill): ?>
                                <div class="progress">
                                    <div class="lead"><?= $skill['UF_TITLE'] ?></div>
                                    <div 
                                        class="progress-bar" 
                                        role="progressbar" 
                                        aria-valuenow="60" 
                                        aria-valuemin="0" 
                                        aria-valuemax="100" 
                                        style="width: <?= $skill['UF_PROGRESS'] ?>%;"
                                    >
                                        <span><?= $skill['UF_PROGRESS'] ?>%</span>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>

<?php
// Основные направления
$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'main_activites',
    [
        'IBLOCK_TYPE'    => 'content',
        'IBLOCK_ID'      => getIBlockIdByCode('mainActivites'),
        'NEWS_COUNT'     => '6',
        'SORT_BY1'       => 'SORT',
        'SORT_ORDER1'    => 'ASC',
        'PROPERTY_CODE'  => ['ICON_CLASS'],
        'SET_TITLE'      => 'N',
    ]
);

// Услуги
$APPLICATION->IncludeComponent(
    'bitrix:news',
    'services',
    [
        'IBLOCK_TYPE'   => 'content',
        'IBLOCK_ID'     => getIBlockIdByCode('services'),
        'SEF_MODE'      => 'Y',
        'SEF_FOLDER'    => '/services/',
        'SEF_URL_TEMPLATES' => [
            'detail' => '#SECTION_CODE_PATH#/#ELEMENT_CODE#/', 
        ],
        'BROWSER_TITLE' => 'NAME',
        'LIST_PROPERTY_CODE' => [
            'TITLE',
            'SUBTITLE',
            'PRICE',
            'ADVANTAGES',
            'COLOR',
        ],
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
        'SET_TITLE'     => 'N',
        'SET_STATUS_404'=> 'Y',
        'SHOW_404'      => 'Y',
    ],
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");