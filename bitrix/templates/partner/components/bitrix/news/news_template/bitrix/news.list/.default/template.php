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
			<li><a href="/">Главная</a></li>
			<li class="active">Новости</li>
		</ul>
	</div>

	<hr class="newshr">
	<div class="row">


		<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 news-list">
			<span>Новости</span>

			<ul class="nav archiv">
				<li>Архив:</li>
				<li><a href="./?god=2016">2016</a></li>
				<li><a href="#" class="active">2015</a></li>
				<li><a href="#">2014</a></li>

			</ul>


			<ul class="nav archiv">
				<li>Категории:</li>
				<li><a href="#">новости</a></li>
				<li><a href="#" class="active">советы специалистов</a></li>
				<li><a href="#">умные цитаты</a></li>

			</ul>
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
			<div class="news-list-block">
				<i class="fa fa-clock-o"></i>
                <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                    <span><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
                <?endif?>
                <h5><?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                        <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                            <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
                        <?else:?>
                            <?echo $arItem["NAME"]?>
                        <?endif;?>
                    <?endif;?>
                </h5>
				<p><?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                        <?echo $arItem["PREVIEW_TEXT"];?>
                    <?endif;?>
                </p>
			</div>
            <?endforeach;?>

		</div>
	</div>
</div>
