<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("description", "We Coders - это команда профессиональных разработчиков сайтов!");
$APPLICATION->SetTitle("Digital-агенство We Coders");

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
        'SET_TITLE'     => 'N',
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
        'SET_TITLE'           => 'N',
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
        'SET_TITLE'           => 'N',
    ]
);

// Наши работы
$APPLICATION->IncludeFile(
    SITE_DIR . '/include/_portfolio_list.php', 
    [], 
    [
        'MODE' => 'html',
        'NAME' => 'Наши работы',
    ]
);

?>

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