<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "We Coders - это команда профессиональных разработчиков сайтов!");
$APPLICATION->SetTitle("Главная страница");

// Слайдер
$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'main_slider',
    [
        'IBLOCK_TYPE'   => 'content',
        'IBLOCK_ID'     => getIBlockIdByCode('mainSlider'),
        'NEWS_COUNT'    => '3',
        'SORT_BY1'      => 'SORT',
        'SORT_ORDER1'   => 'ASC',
        'PROPERTY_CODE' => ['BUTTON_TEXT', 'BUTTON_LINK'],
    ]
);

// О нас
$APPLICATION->IncludeFile(
    SITE_DIR . '/include/_about_us.php', 
    [], 
    [
        'MODE' => 'html',
        'NAME' => 'Редактирование линии с контактами',
    ]
);

// Основные направления
$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'main_activites',
    [
        'IBLOCK_TYPE'         => 'content',
        'IBLOCK_ID'           => getIBlockIdByCode('mainActivites'),
        'NEWS_COUNT'          => '3',
        'SORT_BY1'            => 'SORT',
        'SORT_ORDER1'         => 'ASC',
        'PARENT_SECTION_CODE' => 'glavnaya-stranitsa',
        'PROPERTY_CODE'       => ['ICON_CLASS'],
    ]
);

// Инфографика
$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'infographics',
    [
        'IBLOCK_TYPE'         => 'content',
        'IBLOCK_ID'           => getIBlockIdByCode('infographics'),
        'NEWS_COUNT'          => '4',
        'SORT_BY1'            => 'SORT',
        'SORT_ORDER1'         => 'ASC',
        'PARENT_SECTION_CODE' => 'glavnaya-stranitsa',
        'PROPERTY_CODE'       => ['ICON', 'COUNTER'],
    ]
);

?>

<!-- Наши работы -->
<section class="work-area pt-90 pb-60" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Портфолио</h2>
                <p>Лучший способ найти хорошую команду - это посмотреть результаты её работы</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-menu brand-filter text-center mb-70">
                    <div class="filter" data-filter="all">Все</div>
                    <div class="filter" data-filter=".landing">Лендинги</div>
                    <div class="filter" data-filter=".internet_shop">Интренет магазины</div>
                    <div class="filter" data-filter=".promo">Промо сайты</div>
                    <div class="filter" data-filter=".corporative_site">Корпоративные порталы</div>
                </div>
            </div>
            <div id="Container">
                <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix landing promo">
                    <div class="portfolio-wrapper portfolio-title">
                        <div class="portfolio-img">
                            <img src="img/portfolio/1.jpg" alt=""/>
                            <div class="work-text brand-bg">
                                <div class="inner-text">
                                    <a class="view-portfolio image-link" href="img/portfolio/1.jpg">
                                        <span class="plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-heading pd-15">
                            <h4 class="mb-10">
                                <a href="#">Green Planet</a>
                            </h4>
                            <h5 class="m-0">Дизайн</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix internet_shop corporative_site">
                    <div class="portfolio-wrapper portfolio-title">
                        <div class="portfolio-img">
                            <img src="img/portfolio/2.jpg" alt=""/>
                            <div class="work-text brand-bg">
                                <div class="inner-text">
                                    <a class="view-portfolio image-link" href="img/portfolio/2.jpg">
                                        <span class="plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-heading pd-15">
                            <h4 class="mb-10">
                                <a href="#">Creative developer</a>
                            </h4>
                            <h5 class="m-0">Разработка лендинга</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix landing">
                    <div class="portfolio-wrapper portfolio-title">
                        <div class="portfolio-img">
                            <img src="img/portfolio/3.jpg" alt=""/>
                            <div class="work-text brand-bg">
                                <div class="inner-text">
                                    <a class="view-portfolio image-link" href="img/portfolio/3.jpg"><span class="plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-heading pd-15">
                            <h4 class="mb-10">
                                <a href="portfolio_online_shop.html">Dress & Jeans</a>
                            </h4>
                            <h5 class="m-0">Разработка интернет-магазина</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix internet_shop">
                    <div class="portfolio-wrapper portfolio-title">
                        <div class="portfolio-img">
                            <img src="img/portfolio/4.jpg" alt=""/>
                            <div class="work-text brand-bg">
                                <div class="inner-text">
                                    <a class="view-portfolio image-link" href="img/portfolio/4.jpg"><span
                                            class="plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-heading pd-15">
                            <h4 class="mb-10">
                                <a href="portfolio_landing.html">Mountain King</a>
                            </h4>
                            <h5 class="m-0">Разработка сайта визитки</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix corporative_site">
                    <div class="portfolio-wrapper portfolio-title">
                        <div class="portfolio-img">
                            <img src="img/portfolio/5.jpg" alt=""/>
                            <div class="work-text brand-bg">
                                <div class="inner-text">
                                    <a class="view-portfolio image-link" href="img/portfolio/5.jpg">
                                        <span class="plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-heading pd-15">
                            <h4 class="mb-10">
                                <a href="#">Beauty SPA</a>
                            </h4>
                            <h5 class="m-0">Разработка сайта визитки</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix promo">
                    <div class="portfolio-wrapper portfolio-title">
                        <div class="portfolio-img">
                            <img src="img/portfolio/6.jpg" alt=""/>
                            <div class="work-text brand-bg">
                                <div class="inner-text">
                                    <a class="view-portfolio image-link" href="img/portfolio/6.jpg"><span class="plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-heading pd-15">
                            <h4 class="mb-10">
                                <a href="#">Bent Application</a>
                            </h4>
                            <h5 class="m-0">Разработка лендинга</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Отзывы клиентов -->
<section class="testimonial-area bg-color pad-90">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="testimonial-active dots-style">
                    <div class="single-testimonial black-text text-center">
                        <div class="testimonial-title">
                            <span class="icon-quote"></span>
                            <h3 class="black-text">Сроки не проблема!</h3>
                        </div>
                        <p><span>"</span>Спасут любой проект с самыми горящими сроками! Ребята действительно
                                         профессионалы своего дела.<span>"</span>
                        </p>
                        <div class="testimonial-author text-uppercase">
                            <span>- Андрей Александров, Best Shop.</span>
                        </div>
                    </div>
                    <div class="single-testimonial black-text text-center">
                        <div class="testimonial-title">
                            <span class="icon-quote"></span>
                            <h3 class="black-text">Это взрыв!</h3>
                        </div>
                        <p><span>"</span>Я рад, что мы получили такой классный продукт на выходе!
                                         Думаю, что совместными усилиями мы реализуем ещё не один
                                         проект.<span>"</span></p>
                        <div class="testimonial-author text-uppercase">
                            <span>- Виталий Нохрин, NA'MAN Rec.</span>
                        </div>
                    </div>
                    <div class="single-testimonial black-text text-center">
                        <div class="testimonial-title">
                            <span class="icon-quote"></span>
                            <h3 class="black-text">Большая удача?</h3>
                        </div>
                        <p><span>"</span>Мы нашли WeCoders после десятка неудачных проектов с другими web студиями. И…
                                         Это большая удача, <span>"</span></p>
                        <div class="testimonial-author text-uppercase">
                            <span>- Ирина Граф, Cars & Cars company</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");