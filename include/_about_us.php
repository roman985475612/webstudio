<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$data = GetEntityDataById(1)[0];
$photo = CFile::GetPath($data['UF_IMG']);
?>

<section class="who-area-are pad-90" id="about_us">
    <div class="container">
        <h2 class="title-1"><?= $data['UF_TITLE'] ?></h2>
        <div class="row">
            <div class="col-md-7">
                <div class="who-we">
                    <?= $data['UF_TEXT'] ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="about-bg">
                    <img src="<?= $photo ?>" alt="<?= $data['UF_TITLE'] ?>">
                </div>
            </div>
        </div>
    </div>
</section>
