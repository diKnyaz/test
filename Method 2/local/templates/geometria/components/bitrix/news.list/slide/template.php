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

<div class="feedback__gallery gallery" id="sliderControls">
    <span class="feedback__prev"></span>
    <span class="feedback__next"></span>
</div>
<div class="feedback__block" id="slider">
	<?if($arParams["DISPLAY_TOP_PAGER"]):?>
		<?=$arResult["NAV_STRING"]?><br />
	<?endif;?>
	
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>


    <div class="feedback__card-wrapper" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="feedback__card">
            <div class="feedback__phrase">
                <p class="feedback__quote">
					<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
						<?echo $arItem["NAME"]?>
					<?endif;?>
                </p>
                <img src="<?=SITE_TEMPLATE_PATH?>/images/icons/yellow_blocks.svg" class="feedback__yellow-blocks" alt="yellow blocks">
            </div>
            <div class="feedback__reaction">
                <p class="feedback__reaction-text text">
					<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
						<?echo $arItem["PREVIEW_TEXT"];?>
					<?endif;?>
				</p>
                <div class="feedback__name-block">
                    <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
						<img
							class="feedback__photo"
							src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
							alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
							title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						/>
					<?endif?>
					<div class="feedback__name-unit">
                        <p class="feedback__name">
							<?echo $arItem['DISPLAY_PROPERTIES']['FIO']['~VALUE'];?> 
						</p>
                        <p class="feedback__post">
							<?echo $arItem['DISPLAY_PROPERTIES']['TITLE']['~VALUE'];?>
						</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?endforeach;?>
</div>