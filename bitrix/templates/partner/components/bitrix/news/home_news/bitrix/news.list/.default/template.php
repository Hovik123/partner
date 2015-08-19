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

<a class="btn pull-right btn-archiv" href="news.html">Архив новостей</a>

<!-- Tab panes -->
</div>
<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 news_block">
		<div class="tab-content">
			<?foreach($arResult["ITEMS"] as $arItem):?>

			<div role="tabpanel" class="tab-pane active" id="news">
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

			</div>
			<?endforeach;?>
			<!--<div role="tabpanel" class="tab-pane" id="sovet">
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title">Советы ---Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title"> Советы ---Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title">Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="umniesoveti">
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title"> умные цитаты  Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title">умные цитаты Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title">умные цитаты Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="arxiv">
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title">Архив новостей Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title">Архив новостей Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title">Архив новостей Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
			</div>--><!--<div role="tabpanel" class="tab-pane" id="sovet">
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title">Советы ---Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title"> Советы ---Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title">Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="umniesoveti">
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title"> умные цитаты  Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title">умные цитаты Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title">умные цитаты Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="arxiv">
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title">Архив новостей Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title">Архив новостей Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
				<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 news_item">
					<span class="news_item_title">Архив новостей Депутат: выход РФ из Европейской конвенции по правам человека возможен</span>
					<span class="news-item-text">По словам депутата Госдумы Леонида Калашникова, выходя из международных конвенций, Россия могла бы их ...</span>
					<span class="time_clock"><i class="fa fa-clock-o"></i> 02.04.2015</span>
				</div>
			</div>-->
		</div>
	</div>

</div>




<div class="news-list">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>




		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</p>
<?endforeach;?>

</div>
