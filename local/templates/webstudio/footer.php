<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<!-- Футер -->
<footer class="footer-style-2">
    <div class="footer-top-area brand-bg pad-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="footer-widget footer-widget-center text-center">
                        <!-- Лого + текст -->
                        <div class="footer-logo">
                            <a href="#">
                                <img src="img/logo/logo-white.png" alt=""/>
                            </a>
                        </div>
                        <p>Если вы похожи на большинство компаний, у вас нет маркетингового бюджета в миллион
                           долларов<br>
                           или своей команды разработки. Но это не значит, что у вас не может быть<br>
                           сайта мирового класса. И мы вам в этом поможем!</p>

                        <!-- Соц. сети -->
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- нижнее меню -->
    <div class="footer-bottom-area pad-20 brand-bg footer-border">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="copyright white-text">
                        <p>We Coders © 2021</p>
                    </div>
                </div>

                <div class="col-lg-7 col-md-7 col-sm-12">
                    <?php
                        $APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", [
                            "ROOT_MENU_TYPE"        => "top", 
                            "MAX_LEVEL"             => "1", 
                            "CHILD_MENU_TYPE"       => "top", 
                            "USE_EXT"               => "Y",
                            "DELAY"                 => "N",
                            "ALLOW_MULTI_SELECT"    => "Y",
                            "MENU_CACHE_TYPE"       => "N", 
                            "MENU_CACHE_TIME"       => "3600", 
                            "MENU_CACHE_USE_GROUPS" => "Y", 
                            "MENU_CACHE_GET_VARS"   => "" 
                        ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
