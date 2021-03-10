<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>
<article class="post-wrapper mb-60">
    <div class="post-img hover-bg-opacity">
        <h3 class="text-blue"><?= $arResult['NAME'] ?></h3>
        <div class="post-img hover-bg-opacity">
            <img src="<?= $arResult['COVER'] ?>" alt=""/>
        </div>
    </div>
    <div class="post-content">
        <div class="post-meta">
            <span><a href="#"><i class="fa fa-clock-o"></i> <?= $arResult['DATE'] ?></a></span> -
            <span><a href="#"><i class="fa fa-user"></i> <?= $arResult['AUTHOR'] ?></a></span> -
            <span><a href="<?= $arResult['CATEGORY_URL'] ?>"><?= $arResult['CATEGORY_NAME'] ?></a></span> -
            <span><a href="#"><i class="fa fa-comments"></i> 1 Комментарий</a></span>
        </div>
        <?= $arResult['DETAIL_TEXT'] ?><br>
    </div>
</article>

<!-- Комментарии -->
<h3 class="total-comments mb-30 pb-15">4 комментария</h3>
<ul class="media-list comment-list mt-30">
    <!-- Коммент 1 -->
    <li class="media">
        <div class="media-body">
            <div class="comment-info">
                <h4 class="author-name">Алексей Потапов</h4>
                <div class="comment-meta">
                    <a href="#" class="comment-report-link">Ответить</a>
                </div>
            </div>
            <p>Система управления содержимым веб-сайтов Битрикс (с 2007 года используется название "1С-Битрикс") выпущена как отчуждаемый от разработчиков продукт в 2002 году.
                30 мая 2018 года выпущена последняя на данный момент версия ядра под номером 18.0.0.</p>
        </div>
    </li>

    <!-- Коммент 2 -->
    <li class="media">
        <div class="media-body">
            <div class="comment-info">
                <h4 class="author-name">Александр М.</h4>
            </div>
            <p>Отличное уточнение!</p>
        </div>
    </li>
</ul>

<!-- Форма для ввода комментария -->
<div class="comments-form mt-40">
    <div class="row">
        <form action="#">
            <div class="col-md-6 mb-30">
                <input type="text" placeholder="Ваше имя"/>
            </div>
            <div class="col-md-6 mb-30">
                <input type="email" placeholder="Email"/>
            </div>
            <div class="col-md-12">
                <textarea name="message" cols="30" rows="3" placeholder="Комментарий"></textarea>
                <button class="btn btn-lg mt-30">Отправить</button>
            </div>
        </form>
    </div>
</div>
