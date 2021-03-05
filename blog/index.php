<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Блог | We Coders");
$APPLICATION->SetTitle("Блог");
?>

<div class="blog-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">

                <?php $APPLICATION->IncludeComponent(
                    'bitrix:news',
                    'blog',
                    [
                        'IBLOCK_TYPE'       => 'content',
                        'IBLOCK_ID'         => getIBlockIdByCode('blog'),
                        'NEWS_COUNT'        => 1,
                        'PAGER_TEMPLATE'    => 'blog_pagination',
                        'SEF_MODE'          => 'Y',
                        'SEF_FOLDER'        => '/blog/',
                        'SEF_URL_TEMPLATES' => [
                            'detail' => '#SECTION_CODE_PATH#/#ELEMENT_CODE#/',
                        ],
                        'BROWSER_TITLE'     => 'NAME',
                        'LIST_PROPERTY_CODE'=> [
                            'AUTHOR',
                        ],
                        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                        'SET_TITLE'         => 'Y',
                        'SET_STATUS_404'    => 'Y',
                        'SHOW_404'          => 'Y',
                    ],
                ); ?>

            </div>

            <!-- Правая колонка -->
            <div class="col-md-4 col-sm-12 col-xs-12 mt-sm-40 mt-xs-40">

                <!-- Поиск -->
                <div class="widget mb-60">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Поиск"/>
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>

                <!-- Категории -->
                <div class="widget mb-60">
                    <h4 class="sidebar-title text-uppercase mb-35 pb-10">Категории</h4>
                    <ul class="widget-cat">
                        <li>
                            <a href="#">Web-Дизайн</a>
                        </li>
                        <li>
                            <a href="#">События</a>
                        </li>
                        <li>
                            <a href="#">Разработка</a>
                        </li>
                        <li>
                            <a href="#">Разное</a>
                        </li>
                    </ul>
                </div>

                <!-- Популярные теги -->
                <div class="widget mb-60">
                    <h4 class="sidebar-title text-uppercase mb-35 pb-10">Популярные теги</h4>
                    <ul class="tag">
                        <li>
                            <a href="#">PHP</a>
                        </li>
                        <li>
                            <a href="#">UI/UX</a>
                        </li>
                        <li>
                            <a href="#">Дизайн</a>
                        </li>
                        <li class="active">
                            <a href="#">Портфолио</a>
                        </li>

                        <li>
                            <a href="#">UI & UX</a>
                        </li>
                        <li>
                            <a href="#">Html5</a>
                        </li>
                        <li>
                            <a href="#">Css3</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");