<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();

?>
<div class="widget mb-60">
    <form class="search-form" action="<?=$arResult["FORM_ACTION"]?>">
        <input type="text" name="q" value="" size="15" maxlength="50" placeholder="Поиск" />
        <button type="submit" name="s"><i class="fa fa-search"></i></button>
    </form>
</div>
