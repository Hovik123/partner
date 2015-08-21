<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>

    <div class="container">
        <div class="row">
            <ul class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li class="active">О компании</li>
            </ul>
        </div>
        <hr class="newshr">




                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "standard.php",
                        "PATH" => "/include/about_comapny.php"
                    )
                ); ?>




<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>