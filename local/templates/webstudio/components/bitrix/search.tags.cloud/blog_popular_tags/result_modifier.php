<?php

$currentTag = htmlspecialchars($_GET['tags']);

foreach($arResult['SEARCH'] as &$tag) {
    $tag['SELECTED'] = $tag['NAME'] == $currentTag;
}