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
            <li><a href="/">Главная</a></li>
            <li class="active">Новости</li>
        </ul>
    </div>

    <hr class="newshr">
    <div class="row">


        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 news-list">
            <span>Новости</span>

            <ul class="nav archiv" id="filter_god">
                <li>Архив:</li>
                <li><a href="#">2015</a></li>
                <li><a href="#">2014</a></li>

            </ul>


            <!-- Nav tabs -->
            <ul class="nav archiv" role="tablist">
                <li>Категории:</li>
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                          data-toggle="tab">новости</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                           data-toggle="tab">советы специалистов</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">умные цитаты</a>
                </li>
            </ul>

            <!-- Tab panes -->


            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="home">
                    <? foreach ($arResult["ITEMS"] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                         if($arItem['PROPERTIES']['news_type']['VALUE_XML_ID']=='new_news'){
                            ?>
                            <div class="news-list-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <i class="fa fa-clock-o"></i>
                                <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
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
                        <?php } ?>
                    <? endforeach; ?>

                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <? foreach ($arResult["ITEMS"] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                        if($arItem['PROPERTIES']['news_type']['VALUE_XML_ID']=='sovet_news'){
                            ?>
                            <div class="news-list-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <i class="fa fa-clock-o"></i>
                                <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
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
                        <?php } ?>
                    <? endforeach; ?>

                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                    <? foreach ($arResult["ITEMS"] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                        if($arItem['PROPERTIES']['news_type']['VALUE_XML_ID']=='umnie_news'){
                            ?>
                            <div class="news-list-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <i class="fa fa-clock-o"></i>
                                <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
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
                        <?php } ?>
                    <? endforeach; ?>
                </div>

            </div>
        </div>
    </div>
</div>
