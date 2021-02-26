<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Контакты | WeCoders");
$APPLICATION->SetTitle("Контакты");

$contact = getEntityDataByName('Contact')[0];

?>

<div class="contact-form pt-90 pb-30">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Нужен классный сайт?</h2>
                <p>Оставьте заявку в форме ниже и мы всё сделаем!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info">
                    <address>
                        <ul>
                            <li>
                                <i aria-hidden="true" class="fa fa-map-marker brand-color"></i>
                                <div class="address">
                                    Мы находимся по адресу:
                                    <hr>
                                    <p><?= $contact['UF_ADDRESS'] ?></p>
                                </div>
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-phone brand-color"></i>
                                <div class="phone">
                                    <p><?= $contact['UF_PHONE'] ?></p>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-envelope brand-color"></i>
                                <div class="mail">
                                    <p>
                                        <a href="mailto:#"><?= $contact['UF_EMAIL'] ?></a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </address>
                </div>
            </div>
            <div class="col-md-8">
                <?php $APPLICATION->IncludeComponent(
                    'custom:main.feedback',
                    'contactsPageForm',
                    [
                        'USE_CAPTCHA'      => 'N',
                        'OK_TEXT'          => 'Спасибо, Ваше сообщение принято!',
                        'EMAIL_TO'         => '',
                        'REQUIRED_FIELDS'  => ['NAME', 'EMAIL', 'PHONE', 'MESSAGE'],
                        'EVENT_MESSAGE_ID' => ['7'],
                        'AJAX_MODE'        => 'Y',
                    ]
                );?>
            </div>
        </div>
    </div>
</div>

<!-- Карта -->
<div class="map-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe 
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3Abb5efd9aed6bed239dae7c638b80913af9e0e5c01e17da3f43794b498f652005&amp;source=constructor" 
                    width="1140" 
                    height="400" 
                    frameborder="0"
                ></iframe>
            </div>
        </div>
    </div>
</div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");