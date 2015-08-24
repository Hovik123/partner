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
<?php
$array_list = [];
$s=0;
?>

<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <?php

    array_push($array_list, $arItem['PROPERTIES']['servicess_type']['VALUE']);
    ?>
<? endforeach; ?>
<?php $array_list = array_count_values($array_list); ?>
<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 news-list stoimost">
    <span>Стоимость наших услуг</span>
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <?php if ($array_list[$arItem['PROPERTIES']['servicess_type']['VALUE']] == 1) { ?>
            <?php /*var_dump($arItem['PROPERTIES']['servicess_type']);*/ ?>

            <? /*="<pre>";*/ ?><!--
		<? /*var_dump($arItem['PROPERTIES']);*/ ?>
		--><? /*="</pre>";*/ ?>
            <h2 id="<?= $this->GetEditAreaId($arItem['ID']); ?>"><?= $arItem['PROPERTIES']['servicess_type']['VALUE'] ?></h2>
            <p><?= $arItem['PROPERTIES']['servicess_desc']['VALUE'] ?></p>
            <?php if (!empty($arItem['PROPERTIES']["select_group_name"]["VALUE"])) { ?>
                <? foreach ($arItem['PROPERTIES']["select_group_name"]["VALUE"] as $value): ?>


                    <div class="table-responsive">
                        <table class="table table-bordered ">
                            <colgroup>
                                <col class="col-xs-6">
                                <col class="col-xs-2">
                            </colgroup>
                            <thead>
                            <tr>
                                <th colspan="2"><?= $value; ?></th>

                            </tr>
                            </thead>
                            <tbody>
							<?php  foreach($arItem['PROPERTIES']["select_custom_name"]["VALUE"] as $value_name){?>
							
							<tr>
								<td><?=$value_name;?></td>
								<td>от 50 000 руб.</td>
							</tr>
<?php }?>

                            </tbody>
                        </table>
                    </div>

                <? endforeach;
            } ?>
        <?php } else { ?>

            <h2 id="<?= $this->GetEditAreaId($arItem['ID']); ?>"><?= $arItem['PROPERTIES']['servicess_type']['VALUE'] ?></h2>
        <?php } ?>
    <? endforeach; ?>
    <h2>Физическим лицам</h2>

    <p>Организация любой деятельности — коммерческой, бюджетной или некоммерческой — невозможна без юридического
        сопровождения.</p>


</div>


<!--<div class="news-list">
    <? /* if ($arParams["DISPLAY_TOP_PAGER"]): */ ?>
        <? /*= $arResult["NAV_STRING"] */ ?><br/>
    <? /* endif; */ ?>
    <? /* foreach($arResult["ITEMS"] as $arItem):*/ ?>
	<? /*
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	*/ ?>
	<p class="news-item" id="<? /*=$this->GetEditAreaId($arItem['ID']);*/ ?>">
		<? /*if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):*/ ?>
			<? /*if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):*/ ?>
				<a href="<? /*=$arItem["DETAIL_PAGE_URL"]*/ ?>"><img
						class="preview_picture"
						border="0"
						src="<? /*=$arItem["PREVIEW_PICTURE"]["SRC"]*/ ?>"
						width="<? /*=$arItem["PREVIEW_PICTURE"]["WIDTH"]*/ ?>"
						height="<? /*=$arItem["PREVIEW_PICTURE"]["HEIGHT"]*/ ?>"
						alt="<? /*=$arItem["PREVIEW_PICTURE"]["ALT"]*/ ?>"
						title="<? /*=$arItem["PREVIEW_PICTURE"]["TITLE"]*/ ?>"
						style="float:left"
						/></a>
			<? /*else:*/ ?>
				<img
					class="preview_picture"
					border="0"
					src="<? /*=$arItem["PREVIEW_PICTURE"]["SRC"]*/ ?>"
					width="<? /*=$arItem["PREVIEW_PICTURE"]["WIDTH"]*/ ?>"
					height="<? /*=$arItem["PREVIEW_PICTURE"]["HEIGHT"]*/ ?>"
					alt="<? /*=$arItem["PREVIEW_PICTURE"]["ALT"]*/ ?>"
					title="<? /*=$arItem["PREVIEW_PICTURE"]["TITLE"]*/ ?>"
					style="float:left"
					/>
			<? /*endif;*/ ?>
		<? /*endif*/ ?>
		<? /*if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):*/ ?>
			<span class="news-date-time"><? /*echo $arItem["DISPLAY_ACTIVE_FROM"]*/ ?></span>
		<? /*endif*/ ?>
		<? /*if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):*/ ?>
			<? /*if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):*/ ?>
				<a href="<? /*echo $arItem["DETAIL_PAGE_URL"]*/ ?>"><b><? /*echo $arItem["NAME"]*/ ?></b></a><br />
			<? /*else:*/ ?>
				<b><? /*echo $arItem["NAME"]*/ ?></b><br />
			<? /*endif;*/ ?>
		<? /*endif;*/ ?>
		<? /*if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):*/ ?>
			<? /*echo $arItem["PREVIEW_TEXT"];*/ ?>
		<? /*endif;*/ ?>
		<? /*if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):*/ ?>
			<div style="clear:both"></div>
		<? /*endif*/ ?>
		<? /*foreach($arItem["FIELDS"] as $code=>$value):*/ ?>
			<small>
			<? /*=GetMessage("IBLOCK_FIELD_".$code)*/ ?>:&nbsp;<? /*=$value;*/ ?>
			</small><br />
		<? /*endforeach;*/ ?>
		<? /*foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):*/ ?>
			<small>
			<? /*=$arProperty["NAME"]*/ ?>:&nbsp;
			<? /*if(is_array($arProperty["DISPLAY_VALUE"])):*/ ?>
				<? /*=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);*/ ?>
			<? /*else:*/ ?>
				<? /*=$arProperty["DISPLAY_VALUE"];*/ ?>
			<? /*endif*/ ?>
			</small><br />
		<? /*endforeach;*/ ?>
	</p>
<? /*endforeach; */ ?>
    <? /* if ($arParams["DISPLAY_BOTTOM_PAGER"]): */ ?>
        <br/><? /*= $arResult["NAV_STRING"] */ ?>
    <? /* endif; */ ?>
</div>-->
