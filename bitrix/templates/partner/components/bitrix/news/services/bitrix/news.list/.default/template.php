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
<div class="tab-content">
	<?php ?>
	<div role="tabpanel" class="tab-pane active tab_services" id="home">
		<?php $i=1;
		$isEmpty=true;
		?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?php if($arItem['PROPERTIES']['urfizSelect']['VALUE_XML_ID']=='urlic'){?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNI_ELEMENT_DELETE_CONFIRM')));
				?>

					<div class="col-xs-4 col-lg-4 col-sm-4 col-md-4 servicesItem <?php echo $i%3==0 ? 'margin_right_none':''?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="col-xs-2 col-lg-2 col-sm-2 col-md-2 padding_left_right_none services_icon">
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
						</div>
						<div class="col-xs-10 col-lg-10 col-sm-10 col-md-10 padding_left_right_none servicesItemContent">
							<span class="title"><?echo $arItem["NAME"]?></span>
							<ul class="item">
								<?echo $arItem["PREVIEW_TEXT"];?>
								<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>
							</ul>
						</div>
					</div>
					<?php
					$isEmpty=false;
					$i++;
				}?>

			<?php endforeach;?>
		<?php if($isEmpty){?>
			<div class="col-xs-12 col-lg-12 col-sm-12 col-md-12" style="margin-top: 30px;">
				<p>Здесь пока нет услуг для Юредических лиц</p>
			</div>
		<?php }?>

	</div>
	<div role="tabpanel" class="tab-pane tab_services" id="profile">
		<?php $i=1;
		$isEmpty=true;
		?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?php if($arItem['PROPERTIES']['urfizSelect']['VALUE_XML_ID']=='fizlic'){?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNI_ELEMENT_DELETE_CONFIRM')));
			?>

				<div class="col-xs-4 col-lg-4 col-sm-4 col-md-4 servicesItem <?php echo $i%3==0 ? 'margin_right_none':''?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<div class="col-xs-2 col-lg-2 col-sm-2 col-md-2 padding_left_right_none services_icon">
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
					</div>
					<div class="col-xs-10 col-lg-10 col-sm-10 col-md-10 padding_left_right_none servicesItemContent">
						<span class="title"><?echo $arItem["NAME"]?></span>
						<ul class="item">
							<?echo $arItem["PREVIEW_TEXT"];?>
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>
						</ul>
					</div>
				</div>
				<?php
				$isEmpty=false;
				$i++;
			}?>

		<?php endforeach;?>
		<?php if($isEmpty){?>
			<div class="col-xs-12 col-lg-12 col-sm-12 col-md-12" style="margin-top: 30px;">
				<p>Здесь пока нет услуг для Юредических лиц</p>
			</div>
		<?php }?>
	</div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 clearfix">

	<a href="./services"><button class="btn btn-lazur  center">Остальные услуги</button></a>
</div>













<!--<div class="news-list">-->
<?//if($arParams["DISPLAY_TOP_PAGER"]):?>
<!--	--><?//=$arResult["NAV_STRING"]?><!--<br />-->
<?//endif;?>
<?//foreach($arResult["ITEMS"] as $arItem):?>
<!--	--><?//
//	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
//	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
//	?>
<!--	<p class="news-item" id="--><?//=$this->GetEditAreaId($arItem['ID']);?><!--">-->
<!--		--><?//if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
<!--			--><?//if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
<!--				<a href="--><?//=$arItem["DETAIL_PAGE_URL"]?><!--"><img-->
<!--						class="preview_picture"-->
<!--						border="0"-->
<!--						src="--><?//=$arItem["PREVIEW_PICTURE"]["SRC"]?><!--"-->
<!--						width="--><?//=$arItem["PREVIEW_PICTURE"]["WIDTH"]?><!--"-->
<!--						height="--><?//=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?><!--"-->
<!--						alt="--><?//=$arItem["PREVIEW_PICTURE"]["ALT"]?><!--"-->
<!--						title="--><?//=$arItem["PREVIEW_PICTURE"]["TITLE"]?><!--"-->
<!--						style="float:left"-->
<!--						/></a>-->
<!--			--><?//else:?>
<!--				<img-->
<!--					class="preview_picture"-->
<!--					border="0"-->
<!--					src="--><?//=$arItem["PREVIEW_PICTURE"]["SRC"]?><!--"-->
<!--					width="--><?//=$arItem["PREVIEW_PICTURE"]["WIDTH"]?><!--"-->
<!--					height="--><?//=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?><!--"-->
<!--					alt="--><?//=$arItem["PREVIEW_PICTURE"]["ALT"]?><!--"-->
<!--					title="--><?//=$arItem["PREVIEW_PICTURE"]["TITLE"]?><!--"-->
<!--					style="float:left"-->
<!--					/>-->
<!--			--><?//endif;?>
<!--		--><?//endif?>
<!--		--><?//if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
<!--			<span class="news-date-time">--><?//echo $arItem["DISPLAY_ACTIVE_FROM"]?><!--</span>-->
<!--		--><?//endif?>
<!--		--><?//if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
<!--			--><?//if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
<!--				<a href="--><?//echo $arItem["DETAIL_PAGE_URL"]?><!--"><b>--><?//echo $arItem["NAME"]?><!--</b></a><br />-->
<!--			--><?//else:?>
<!--				<b>--><?//echo $arItem["NAME"]?><!--</b><br />-->
<!--			--><?//endif;?>
<!--		--><?//endif;?>
<!--		--><?//if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
<!--			--><?//echo $arItem["PREVIEW_TEXT"];?>
<!--		--><?//endif;?>
<!--		--><?//if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
<!--			<div style="clear:both"></div>-->
<!--		--><?//endif?>
<!--		--><?//foreach($arItem["FIELDS"] as $code=>$value):?>
<!--			<small>-->
<!--			--><?//=GetMessage("IBLOCK_FIELD_".$code)?><!--:&nbsp;--><?//=$value;?>
<!--			</small><br />-->
<!--		--><?//endforeach;?>
<!--		--><?//foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
<!--			<small>-->
<!--			--><?//=$arProperty["NAME"]?><!--:&nbsp;-->
<!--			--><?//if(is_array($arProperty["DISPLAY_VALUE"])):?>
<!--				--><?//=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
<!--			--><?//else:?>
<!--				--><?//=$arProperty["DISPLAY_VALUE"];?>
<!--			--><?//endif?>
<!--			</small><br />-->
<!--		--><?//endforeach;?>
<!--	</p>-->
<?//endforeach;?>
<?//if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
<!--	<br />--><?//=$arResult["NAV_STRING"]?>
<?//endif;?>
<!--</div>-->
