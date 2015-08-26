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
?>

<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <?php

    array_push($array_list, $arItem['PROPERTIES']['servicess_type']['VALUE']);
    ?>
<? endforeach; ?>
<?php $array_list = array_count_values($array_list); ?>
<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 news-list stoimost">
    <span>Стоимость наших услуг</span>
    <?php $link=1;?>
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
            <div id="servicess_price_<?php echo $link;
            $link++;
            ?>"></div>
            <h2 id="<?= $this->GetEditAreaId($arItem['ID']); ?>"><?= $arItem['PROPERTIES']['servicess_type']['VALUE'] ?></h2>
            <p><?= $arItem['PROPERTIES']['servicess_desc']['VALUE'] ?></p>


                    <div class="table-responsive">
                        <table class="table table-bordered ">
                            <colgroup>
                                <col class="col-xs-6">
                                <col class="col-xs-2">
                            </colgroup>
                            <tbody>
                            <?php $i=0?>
                            <?php foreach ($arItem['PROPERTIES']["select_custom_name"]["VALUE"] as $value_name) { ?>

                                <tr>
                                    <td><?= $value_name; ?></td>
                                    <td><?=$arItem['PROPERTIES']["select_custom_price"]["VALUE"][$i]?></td>
                                </tr>

                            <?php $i++; } ?>

                            </tbody>
                        </table>
                    </div>

                <?php } else { ?>

            <h2 id="<?= $this->GetEditAreaId($arItem['ID']); ?>"><?= $arItem['PROPERTIES']['servicess_type']['VALUE'] ?></h2>
        <?php } ?>
    <? endforeach; ?>
    </div>

