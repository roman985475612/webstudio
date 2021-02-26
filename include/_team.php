<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$data = getEntityDataByName('Team');

if (empty($data)) {
    return;
}

foreach ($data as &$item) {
    $item['PHOTO'] = CFile::GetPath($item['UF_PHOTO']);
}

?>
<div id="team" class="team-area bg-color pt-90 pb-60">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Команда</h2>
                <p>Творческие и гениальные. Мастера своего дела</p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data as $item): ?>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="<?= $item['PHOTO'] ?>" alt="<?= $item['UF_TITLE'] ?>"/>
                            <div class="team-text">
                                <h4><?= $item['UF_TITLE'] ?></h4>
                                <p><?= $item['UF_TEXT'] ?></p>
                                <div class="team-icon">
                                    <a href="<?= $item['UF_FACEBOOK'] ?>"><i class="fa fa-facebook"></i></a>
                                    <a href="<?= $item['UF_TWITTER'] ?>"><i class="fa fa-twitter"></i></a>
                                    <a href="<?= $item['UF_LINKEDIN'] ?>"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-name text-center">
                            <h4><?= $item['UF_NAME'] ?></h4>
                            <h5><?= $item['UF_POSITION'] ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
