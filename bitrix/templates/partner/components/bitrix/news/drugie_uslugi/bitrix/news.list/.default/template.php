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
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 uruslugi-list">
        <div class="col-lg-7 col-sm-4 col-xs-12 col-md-6 padding_left_right_none">
            <span>Юридические услуги</span>
        </div>
        <div class="col-lg-5 col-sm-8 col-xs-12 col-md-6 ">
            <button class="btn btn-white rg active">Юридическим лицам</button>
            <button class="btn btn-white pull-right">физическим лицам</button>
        </div>
    </div>
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 uruslugi-list">
        <h2>Юридическим лицам</h2>
        <div class="col-lg-9 col-sm-9 col-xs-12 col-md-9 padding_left_right_none">
            <p>Организация любой деятельности — коммерческой, бюджетной или <br>некоммерческой — невозможна без юридического сопровождения.</p>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-12 col-md-3">
            <button class="btn btn-lazur-bold pull-right">Узнать стоимость услуг</button>
        </div>
    </div>

    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
        <?php
        $i=1;
        ?>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            if($arItem['PROPERTIES']['urfizSelect']['VALUE_XML_ID']=='urlic'){

                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="col-xs-4 col-lg-4 col-sm-4 col-md-4 servicesItem <?php echo $i%3==0?'margin_right_none':''?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="col-xs-2 col-lg-2 col-sm-2 col-md-2 padding_left_right_none services_icon">
                        <img
                            class="img-responsive"
                            src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                            width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                            height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                            alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                            title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                            />
                    </div>
                    <div class="col-xs-10 col-lg-10 col-sm-10 col-md-10 padding_left_right_none servicesItemContent">
                        <span class="title"><?=$arItem["NAME"]?></span>
                        <ul class="item">
                            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                                <?echo $arItem["PREVIEW_TEXT"];?>
                            <?endif;?>
                            <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>

                        </ul>
                    </div>
                </div>
                <?php
                $i++;
            }?>
        <?endforeach;?>
    </div>
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 uruslugi-list">
        <h2>Физическим лицам</h2>
        <div class="col-lg-9 col-sm-9 col-xs-12 col-md-9 padding_left_right_none">
            <p>По любым вопросам, от налоговых консультаций до представления интересов организации в различных <br>инстанциях, каждый клиент может получить грамотную, квалифицированную и своевременную помощь.</p>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-12 col-md-3">
            <button class="btn btn-lazur-bold pull-right">Узнать стоимость услуг</button>
        </div>
    </div>
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
        <?php
        $i=1;
        ?>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            if($arItem['PROPERTIES']['urfizSelect']['VALUE_XML_ID']=='fizlic'){

                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="col-xs-4 col-lg-4 col-sm-4 col-md-4 servicesItem <?php echo $i%3==0?'margin_right_none':''?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="col-xs-2 col-lg-2 col-sm-2 col-md-2 padding_left_right_none services_icon">
                        <img
                            class="img-responsive"
                            src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                            width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                            height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                            alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                            title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                            />
                    </div>
                    <div class="col-xs-10 col-lg-10 col-sm-10 col-md-10 padding_left_right_none servicesItemContent">
                        <span class="title"><?=$arItem["NAME"]?></span>
                        <ul class="item">
                            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                                <?echo $arItem["PREVIEW_TEXT"];?>
                            <?endif;?>
                            <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>

                        </ul>
                    </div>
                </div>
            <?php
            $i++;
            }?>
        <?endforeach;?>
    </div>
</div>