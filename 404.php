<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");?>
<h1 class="text-center alert" style="font-size: 60px">404 страница не найдена</h1>


<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>