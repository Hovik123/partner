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
<!-- Nav tabs -->
<div class="row">
<ul class="nav nav-tabs nav-tabs-news" role="tablist">
	<li role="presentation" class="active"><a href="#news" aria-controls="news" role="tab"
											  data-toggle="tab">Новости</a></li>
	<li role="presentation"><a href="#sovet" aria-controls="sovet" role="tab" data-toggle="tab">Советы
			специалистов</a></li>
	<li role="presentation"><a href="#umniesoveti" aria-controls="umniesoveti" role="tab" data-toggle="tab">умные
			цитаты</a></li>
</ul>

<a class="btn pull-right btn-archiv" href="./novosti">Архив новостей</a>

<!-- Tab panes -->
</div>
<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 news_block">
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="news">
				<?php $i=0;?>
			<?php foreach($arResult["ITEMS"] as $arItem):?>
			<?php if($arItem['PROPERTIES']['news_type']['VALUE_XML_ID']=='new_news'){?>

				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<span class="news_item_title">
				<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
					<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
						<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a><br />
					<?else:?>
						<?echo $arItem["NAME"]?><br />
					<?endif;?>
				<?endif;?>
					</span>
					<span class="news-item-text">
						<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
							<?echo $arItem["PREVIEW_TEXT"];?>
						<?endif;?>
					</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i>
						<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
							<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
						<?endif?>
					</span>
				</div>


			<?php }?>
				<?php $i++;
				if($i==3){
					break;
				}
				?>
			<?endforeach;?>
			</div>
				<div role="tabpanel" class="tab-pane" id="sovet">
					<?php $i=0;?>
					<?php foreach($arResult["ITEMS"] as $arItem):?>

				<?php if($arItem['PROPERTIES']['news_type']['VALUE_XML_ID']=='sovet_news'){?>

						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>

						<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<span class="news_item_title">
				<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
					<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
						<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a><br />
					<?else:?>
						<?echo $arItem["NAME"]?><br />
					<?endif;?>
				<?endif;?>
					</span>
					<span class="news-item-text">
						<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
							<?echo $arItem["PREVIEW_TEXT"];?>
						<?endif;?>
					</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i>
						<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
							<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
						<?endif?>
					</span>
						</div>


				<?php }?>
				<?php $i++;
				if($i==3){
					break;
				}
				?>
			<?endforeach;?>
					</div>
			<div role="tabpanel" class="tab-pane" id="umniesoveti">
			<?php $i=0;?>
				<?php foreach($arResult["ITEMS"] as $arItem):?>

				<?php if($arItem['PROPERTIES']['news_type']['VALUE_XML_ID']=='umnie_news'){?>

						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>

						<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<span class="news_item_title">
				<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
					<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
						<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a><br />
					<?else:?>
						<?echo $arItem["NAME"]?><br />
					<?endif;?>
				<?endif;?>
					</span>
					<span class="news-item-text">
						<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
							<?echo $arItem["PREVIEW_TEXT"];?>
						<?endif;?>
					</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i>
						<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
							<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
						<?endif?>
					</span>
						</div>


				<?php }?>
				<?php $i++;
				if($i==3){
					break;
				}
				?>
			<?endforeach;?>
					</div>
</div>
