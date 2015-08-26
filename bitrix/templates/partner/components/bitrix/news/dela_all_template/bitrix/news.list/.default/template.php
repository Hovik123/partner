<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
            <li class="active">Успешные дела</li>
        </ul>
    </div>
    <hr class="newshr">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 news-list">
            <span>Успешные дела</span>
            <ul class="nav archiv" id="filter_god">
                <li>Архив:</li>
                <li><a href="#">2016</a></li>
                <li><a href="#" class="active">2015</a></li>
                <li><a href="#">2014</a></li>
            </ul>
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNI_ELEMENT_DELETE_CONFIRM')));
                ?>
            <div class="news-list-block col-lg-12 col-sm-12 col-xs-12 col-md-12 " id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                    <i class="fa fa-clock-o"></i>
                    <span><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
                <? endif ?>
                <h5><? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]):?>
                        <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                            <a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><? echo $arItem["NAME"] ?></a>
                        <? else:?>
                            <? echo $arItem["NAME"] ?>
                        <? endif; ?>
                    <? endif; ?>
                </h5>
                <p><? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]):?>
                        <? echo $arItem["PREVIEW_TEXT"]; ?>
                    <? endif; ?>
                </p>
            </div>
            <div> <a href="<?php echo $arItem['DISPLAY_PROPERTIES']['download_file_pdf']['FILE_VALUE']['SRC']; ?>"
                     download="<?php echo $arItem['DISPLAY_PROPERTIES']['download_file_pdf']['FILE_VALUE']['ORIGINAL_NAME']; ?>" class="download">- Посмотреть решение суда</a></div>
            <? endforeach; ?>

        </div>
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]):  ?>
        <br/><?=$arResult["NAV_STRING"]  ?>
        <?  endif;  ?>
    </div>
</div>