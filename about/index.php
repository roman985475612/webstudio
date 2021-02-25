<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "О студии | We Coders");
$APPLICATION->SetTitle("О студии");

// О Нас
$APPLICATION->IncludeFile(
    SITE_DIR . '/include/_about_us.php', 
    [], 
    [
        'MODE' => 'html',
        'NAME' => 'Редактирование линии с контактами',
    ]
);
?>

<!-- Команда -->
<div id="team" class="team-area bg-color pt-90 pb-60">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Команда</h2>
                <p>Творческие и гениальные. Мастера своего дела</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-team mb-30">
                    <div class="team-img">
                        <img src="img/team/team1.jpg" alt=""/>
                        <div class="team-text">
                            <h4>Привет всем!</h4>
                            <p>Ни один человек за всю историю не добился ничего великого, не породив этого сначала в
                               своем воображении.</p>
                            <div class="team-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-name text-center">
                        <h4>Антон Морозов</h4>
                        <h5>Креативный директор</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-team mb-30">
                    <div class="team-img">
                        <img src="img/team/team2.jpg" alt=""/>
                        <div class="team-text">
                            <p>Сосредоточь все силы на достижение желаемого, чтобы у тебя не было времени бояться
                               нежелательного.</p>
                            <div class="team-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-name text-center">
                        <h4>Анастасия Любимова</h4>
                        <h5>Дизайнер</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-team mb-30">
                    <div class="team-img">
                        <img src="img/team/team3.jpg" alt=""/>
                        <div class="team-text">
                            <h4>Привет!</h4>
                            <p>Чем дольше вы идете к успеху, тем он становится ближе. Слишком многие бросают дело за
                               шаг до победы. Запомните: этот шаг сделают другие.</p>
                            <div class="team-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-name text-center">
                        <h4>Александр Ленский</h4>
                        <h5>web разработчик</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
// Отзывы
$APPLICATION->IncludeFile(
    SITE_DIR . '/include/_testimonials.php', 
    [], 
    [
        'MODE' => 'html',
        'NAME' => 'Наши работы',
    ]
); 

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");