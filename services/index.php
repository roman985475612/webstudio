<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Услуги | We Coders");
$APPLICATION->SetTitle("Чем мы занимаемся");

$data = GetEntityDataById(1)[0]
?>

<!-- Текстовый блок + скилы -->
<section class="who-area-are bg-color pad-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="who-we">
                    <h2 class="title-1"><?= $data['UF_TITLE'] ?></h2>
                    <?= $data['UF_TEXT'] ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="our-skill">
                    <h2 class="title-1">Skills</h2>
                    <div class="progress-list">
                        <div class="progress">
                            <div class="lead">Web-дизайн</div>
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                <span>90%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="lead">PHP (Bitrix / Laravel / Symfony)</div>
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                <span>80%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="lead">Node.js</div>
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 75%;">
                                <span>75%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="lead">JavaScript (Angular / React)</div>
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                <span>75%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="lead">CSS (LESS)</div>
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 80%;">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Основные направления
$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'main_activites',
    [
        'IBLOCK_TYPE'         => 'content',
        'IBLOCK_ID'           => getIBlockIdByCode('mainActivites'),
        'NEWS_COUNT'          => '6',
        'SORT_BY1'            => 'SORT',
        'SORT_ORDER1'         => 'ASC',
        // 'PARENT_SECTION_CODE' => 'glavnaya-stranitsa',
        'PROPERTY_CODE'       => ['ICON_CLASS'],
        'SET_TITLE'           => 'N',
    ]
);
?>

<!-- Услуги -->
<section id="pricing" class="pricing-area bg-color pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Разработка сайта</h2>
                <p>Какой сайт вам нужен? Выбирайте, оставляйте заявку в форме ниже и мы свяжемся с вами!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="single-pricing text-center mb-30">
                    <div class="pricing-head">
                        <h2 class="pricing-title text-uppercase">Лендинг</h2>
                        <span>Одностраничный сайт</span>
                    </div>
                    <div class="pricing-plan-price basic-bg">
                        <span><span>от </span>10 000<span> ₽</span></span>
                    </div>
                    <div class="pricing-plan-list">
                        <ul>
                            <li>до 2х недель</li>
                            <li>Индивидуальный дизайн</li>
                            <li>Домен + хостинг на 1 год</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                        </ul>
                    </div>
                    <div class="get-started">
                        <a href="services_landing.html" class="btn">Узнать больше</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="single-pricing text-center mb-30">
                    <div class="pricing-head">
                        <h2 class="pricing-title text-uppercase">Сайт визитка</h2>
                        <span></span>
                    </div>
                    <div class="pricing-plan-price standard-bg">
                        <span><span>от </span>15 000<span> ₽</span></span>
                    </div>
                    <div class="pricing-plan-list">
                        <ul>
                            <li>от 1 до 2 недель</li>
                            <li>Индивидуальный дизайн</li>
                            <li>Домен + хостинг на 1 год</li>
                            <li>Удобная админка</li>
                            <li>-</li>
                            <li>-</li>
                        </ul>
                    </div>
                    <div class="get-started">
                        <a href="#" class="btn standard-bg">Узнать больше</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="single-pricing text-center mb-30">
                    <div class="pricing-head">
                        <h2 class="pricing-title text-uppercase">Интернет магазин</h2>
                        <span></span>
                    </div>
                    <div class="pricing-plan-price premium-bg">
                        <span><span>от </span>30 000<span> ₽</span></span>
                    </div>
                    <div class="pricing-plan-list">
                        <ul>
                            <li>от 3х недель до 1,5 мес.</li>
                            <li>Индивидуальный дизайн</li>
                            <li>Домен + хостинг на 1 год</li>
                            <li>Удобная админка</li>
                            <li>Интеграции с внешними сервисами</li>
                            <li>Базовая SEO-оптимизация</li>
                        </ul>
                    </div>
                    <div class="get-started">
                        <a href="services_online_shop.html" class="btn premium-bg">Узнать больше</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="single-pricing text-center mb-30">
                    <div class="pricing-head">
                        <h2 class="pricing-title text-uppercase">Корп. сайт</h2>
                        <span>Любой сложности</span>
                    </div>
                    <div class="pricing-plan-price unlimited-bg">
                        <span><span>от </span>50 000<span> ₽</span></span>
                    </div>
                    <div class="pricing-plan-list">
                        <ul>
                            <li>до 2 мес.</li>
                            <li>Индивидуальный дизайн</li>
                            <li>Домен + хостинг на 1 год</li>
                            <li>Удобная панель управлени</li>
                            <li>Интеграции с внешними сервисами</li>
                            <li>-</li>
                        </ul>
                    </div>
                    <div class="get-started">
                        <a href="#" class="btn unlimited-bg">Узнать больше</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");