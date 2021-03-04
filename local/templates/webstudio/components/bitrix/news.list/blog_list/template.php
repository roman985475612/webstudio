<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<?php foreach ($arResult['ITEMS'] as $item): ?>
    <article class="post-wrapper mb-60">
        <div class="post-img hover-bg-opacity">
            <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                <img src="<?= $item['COVER'] ?>" alt=""/>
            </a>
        </div>
        <div class="post-content">
            <h3>
                <a href="<?= $item['DETAIL_PAGE_URL'] ?>"><?= $item['NAME'] ?></a>
            </h3>
            <div class="post-meta">
                <span><a href="#"><i class="fa fa-clock-o"></i> <?= $item['DATE'] ?></a></span> -
                <span><a href="#"><i class="fa fa-user"></i> <?= $item['AUTHOR'] ?></a></span> -
                <span><a href="<?= $item['CATEGORY']['URL'] ?>"><?= $item['CATEGORY']['NAME'] ?></a></span> -
                <span><a href="#"><i class="fa fa-comments"></i> 1 Комментарий</a></span>
            </div>
            <?= $item['PREVIEW_TEXT'] ?><br>
            <a class="read-more btn btn-small" href="<?= $item['DETAIL_PAGE_URL'] ?>">Читать
                <i class="fa fa-arrow-right"></i></a>
        </div>
    </article>
<?php endforeach ?>

<!-- Пагинация (постраничная навигация) -->
<ul class="pagination mt-50">
    <li>
        <a href="#"><i class="fa fa-angle-left"></i></a>
    </li>
    <li><span class="current">1</span></li>
    <li>
        <a href="#">2</a>
    </li>
    <li>
        <a href="#"><i class="fa fa-angle-right"></i></a>
    </li>
</ul>
