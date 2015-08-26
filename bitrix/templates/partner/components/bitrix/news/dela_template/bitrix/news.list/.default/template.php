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
<?php $i=1;?>
<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <?

    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 del-item <?=$i%2==0?'margin_right_none':''?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
        <div class="col-lg-3 col-sm-3 col-xs-12 col-md-3 padding_left_right_none">
            <a href="<?php echo $arItem['DISPLAY_PROPERTIES']['download_file_pdf']['FILE_VALUE']['SRC']; ?>"
               download="<?php echo $arItem['DISPLAY_PROPERTIES']['download_file_pdf']['FILE_VALUE']['ORIGINAL_NAME']; ?>">
                <img
                    class="img-responsive"
                    border="0"
                    src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"


                    alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                    title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"

                    />
            </a>
        </div>
        <div class="col-lg-9 col-sm-9 col-xs-12 col-md-9 text padding_right_none">
        <span class="news_title">
            <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                    <a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><? echo $arItem["NAME"] ?></a><br/>
                <? else: ?>
                    <? echo $arItem["NAME"] ?>
                <? endif; ?>
            <? endif; ?>
        </span>
            <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>

                <span class="time_clock"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?><i class="fa fa-clock-o"></i></span>
            <? endif ?>

            <hr>
                    <span class="text">
                       <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                           <? echo mb_substr($arItem["PREVIEW_TEXT"],0,198)."..."; ?>
                       <? endif; ?>
                    </span>
        </div>
    </div>
    <?php $i++;?>
<? endforeach; ?>