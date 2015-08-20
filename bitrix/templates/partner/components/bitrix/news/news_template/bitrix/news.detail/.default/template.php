<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="container">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="#">Главная</a></li>
            <li class="active">Новости</li>
        </ul>
    </div>
    <hr class="newshr">

    <div class="row">

        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 news-list">

            <div class="news-list-block detail-news">
                <?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
                    <h4><?=$arResult["NAME"]?></h4>
                <?endif;?>

                <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
                    <i class="fa fa-clock-o"></i>
                    <span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
                <?endif;?>
                <p><?if($arResult["NAV_RESULT"]):?>
                        <?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
                        <?echo $arResult["NAV_TEXT"];?>
                        <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
                    <?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
                        <?echo $arResult["DETAIL_TEXT"];?>
                    <?else:?>
                        <?echo $arResult["PREVIEW_TEXT"];?>
                    <?endif?></p>

            </div>
            <a href="/novosti" class="archiv-news">Архив новостей</a>

        </div>
    </div>
</div>
