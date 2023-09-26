<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $mobileColumns
 * @var array $arParams
 * @var string $templateFolder
 */

$usePriceInAdditionalColumn = in_array('PRICE', $arParams['COLUMNS_LIST']) && $arParams['PRICE_DISPLAY_MODE'] === 'Y';
$useSumColumn = in_array('SUM', $arParams['COLUMNS_LIST']);
$useActionColumn = in_array('DELETE', $arParams['COLUMNS_LIST']);
$restoreColSpan = 2 + $usePriceInAdditionalColumn + $useSumColumn + $useActionColumn;

$positionClassMap = array(
    'left' => 'basket-item-label-left',
    'center' => 'basket-item-label-center',
    'right' => 'basket-item-label-right',
    'bottom' => 'basket-item-label-bottom',
    'middle' => 'basket-item-label-middle',
    'top' => 'basket-item-label-top'
);

$discountPositionClass = '';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION'])) {
    foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos) {
        $discountPositionClass .= isset($positionClassMap[$pos]) ? ' ' . $positionClassMap[$pos] : '';
    }
}

$labelPositionClass = '';
if (!empty($arParams['LABEL_PROP_POSITION'])) {
    foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos) {
        $labelPositionClass .= isset($positionClassMap[$pos]) ? ' ' . $positionClassMap[$pos] : '';
    }
}
?>
<script id="basket-item-template" type="text/html">
    <div class="basket__product" id="basket-item-{{ID}}" data-entity="basket-item" data-id="{{ID}}">

        {{#SHOW_RESTORE}}
        <div class="basket-items-list-item-notification" colspan="<?= $restoreColSpan ?>">
            <div class="basket-items-list-item-notification-inner basket-items-list-item-notification-removed"
                 id="basket-item-height-aligner-{{ID}}">
                {{#SHOW_LOADING}}
                <div class="basket-items-list-item-overlay"></div>
                {{/SHOW_LOADING}}
                <div class="basket-items-list-item-removed-container">
                    <div>
                        <?= Loc::getMessage('SBB_GOOD_CAP') ?>
                        <strong>{{NAME}}</strong> <?= Loc::getMessage('SBB_BASKET_ITEM_DELETED') ?>.
                    </div>
                    <div class="basket-items-list-item-removed-block">
                        <a href="javascript:void(0)" data-entity="basket-item-restore-button">
                            <?= Loc::getMessage('SBB_BASKET_ITEM_RESTORE') ?>
                        </a>
                        <span class="basket-items-list-item-clear-btn"
                              data-entity="basket-item-close-restore-button"></span>
                    </div>
                </div>
            </div>
        </div>
        {{/SHOW_RESTORE}}
        {{^SHOW_RESTORE}}
        <div class="basket__product-img-wrap">
            {{#DETAIL_PAGE_URL}}
            <a href="{{DETAIL_PAGE_URL}}">
                {{/DETAIL_PAGE_URL}}

                <img class="basket__product-img" alt="{{NAME}}"
                     src="{{{IMAGE_URL}}}{{^IMAGE_URL}}<?= $templateFolder ?>/images/no_photo.png{{/IMAGE_URL}}">
            </a>
        </div>
        <div class="basket__product-list">
            {{#DETAIL_PAGE_URL}}
            <a href="{{DETAIL_PAGE_URL}}" class="basket__product-link">
                {{NAME}}
            </a>

            {{/DETAIL_PAGE_URL}}

            <?
            if (!empty($arParams['PRODUCT_BLOCKS_ORDER'])) {
                foreach ($arParams['PRODUCT_BLOCKS_ORDER'] as $blockName) {

                    switch (trim((string)$blockName)) {
                        case 'props':
                            if (in_array('PROPS', $arParams['COLUMNS_LIST'])) {
                                ?>
                                {{#PROPS}}
                                <div class="basket-item-property<?= (!isset($mobileColumns['PROPS']) ? ' d-none d-sm-block' : '') ?>">
                                    <div class="select__selected">
                                        {{{NAME}}}:
                                        <span data-entity="basket-item-property-value" data-property-code="{{CODE}}">
                                         {{{VALUE}}}
                                        </span>
                                    </div>
                                </div>
                                {{/PROPS}}
                                <?
                            }

                            break;
                        case 'sku':
                            ?>
                            {{#SKU_BLOCK_LIST}}
                            {{#IS_IMAGE}}

                            <div class="card-info__select color-select card-info__color-select"
                                 data-entity="basket-item-sku-block">
                                <p class="color-select__selected">{{NAME}}:</p>

                                <ul class="color-select__list">
                                    {{#SKU_VALUES_LIST}}
                                    <li class="color-select__item
																		{{#NOT_AVAILABLE_OFFER}} not-available{{/NOT_AVAILABLE_OFFER}}"
                                        title="{{NAME}}"
                                        data-entity="basket-item-sku-field"
                                        data-initial="{{#SELECTED}}true{{/SELECTED}}{{^SELECTED}}false{{/SELECTED}}"
                                        data-value-id="{{VALUE_ID}}"
                                        data-sku-name="{{NAME}}"
                                        data-property="{{PROP_CODE}}">
                                        <button class="color-select__btn {{#SELECTED}}color-select__btn--active{{/SELECTED}}"
                                                style="background-image: url({{PICT}});"></button>
                                    </li>
                                    {{/SKU_VALUES_LIST}}
                                </ul>

                            </div>
                            {{/IS_IMAGE}}

                            {{^IS_IMAGE}}

                            <div class="card-info__select size-select card-info__size-select"
                                 data-entity="basket-item-sku-block">
                                <p class="size-select__selected">{{NAME}}:</p>

                                <ul class="size-select__list">
                                    {{#SKU_VALUES_LIST}}
                                    <li class="size-select__ite{{#NOT_AVAILABLE_OFFER}} not-available{{/NOT_AVAILABLE_OFFER}}"
                                        title="{{NAME}}"
                                        data-entity="basket-item-sku-field"
                                        data-initial="{{#SELECTED}}true{{/SELECTED}}{{^SELECTED}}false{{/SELECTED}}"
                                        data-value-id="{{VALUE_ID}}"
                                        data-sku-name="{{NAME}}"
                                        data-property="{{PROP_CODE}}">
                                        <button class="size-select__btn{{#SELECTED}} size-select__btn--active{{/SELECTED}}">
                                            {{NAME}}
                                        </button>
                                    </li>
                                    {{/SKU_VALUES_LIST}}
                                </ul>

                            </div>
                            {{/IS_IMAGE}}
                            {{/SKU_BLOCK_LIST}}

                            {{#HAS_SIMILAR_ITEMS}}
                            <div class="basket-items-list-item-double" data-entity="basket-item-sku-notification">
                                <div class="alert alert-info alert-dismissable text-center">
                                    {{#USE_FILTER}}
                                    <a href="javascript:void(0)"
                                       class="basket-items-list-item-double-anchor"
                                       data-entity="basket-item-show-similar-link">
                                        {{/USE_FILTER}}
                                        <?= Loc::getMessage('SBB_BASKET_ITEM_SIMILAR_P1') ?>{{#USE_FILTER}}</a>{{/USE_FILTER}}
                                    <?= Loc::getMessage('SBB_BASKET_ITEM_SIMILAR_P2') ?>
                                    {{SIMILAR_ITEMS_QUANTITY}} {{MEASURE_TEXT}}
                                    <br>
                                    <a href="javascript:void(0)" class="basket-items-list-item-double-anchor"
                                       data-entity="basket-item-merge-sku-link">
                                        <?= Loc::getMessage('SBB_BASKET_ITEM_SIMILAR_P3') ?>
                                        {{TOTAL_SIMILAR_ITEMS_QUANTITY}} {{MEASURE_TEXT}}?
                                    </a>
                                </div>
                            </div>
                            {{/HAS_SIMILAR_ITEMS}}
                            <?
                            break;
                        case 'columns':
                            ?>

                            {{#COLUMN_LIST}}
                            {{#IS_IMAGE}}
                            <div class="basket-item-property-custom basket-item-property-custom-photo
														{{#HIDE_MOBILE}}d-none d-sm-block{{/HIDE_MOBILE}}"
                                 data-entity="basket-item-property">
                                <div class="basket-item-property-custom-name">{{NAME}}</div>
                                <div class="basket-item-property-custom-value">
                                    {{#VALUE}}
                                    <span>
																	<img class="basket-item-custom-block-photo-item"
                                                                         src="{{{IMAGE_SRC}}}"
                                                                         data-image-index="{{INDEX}}"
                                                                         data-column-property-code="{{CODE}}">
																</span>
                                    {{/VALUE}}
                                </div>
                            </div>
                            {{/IS_IMAGE}}

                            {{#IS_TEXT}}
                            <div class="select__selected">
                                {{NAME}}:
                                <span>{{VALUE}}</span>
                            </div>


                            {{/IS_TEXT}}

                            {{#IS_LINK}}
                            <div class="basket-item-property-custom basket-item-property-custom-text
														{{#HIDE_MOBILE}}d-none d-sm-block{{/HIDE_MOBILE}}"
                                 data-entity="basket-item-property">
                                <div class="basket-item-property-custom-name">{{NAME}}</div>
                                <div class="basket-item-property-custom-value"
                                     data-column-property-code="{{CODE}}"
                                     data-entity="basket-item-property-column-value">
                                    {{#VALUE}}
                                    {{{LINK}}}{{^IS_LAST}}<br>{{/IS_LAST}}
                                    {{/VALUE}}
                                </div>
                            </div>
                            {{/IS_LINK}}
                            {{/COLUMN_LIST}}
                            <?
                            break;
                    }
                }
            }
            ?>

        </div>
        <div class="basket__price">
            <div class="basket__price-current">{{{PRICE_FORMATED}}}</div>
            <div class="basket__price-count-text"><?= Loc::getMessage('SBB_BASKET_ITEM_PRICE_FOR') ?> {{MEASURE_RATIO}}
                {{MEASURE_TEXT}}
            </div>
        </div>
        <div class="basket__product-wrap-mob">
            <div class="side-basket__product-stepper stepper js-stepper" data-entity="basket-item-quantity-block">
                <button class="stepper__btn stepper__btn--minus" type="button" data-entity="basket-item-quantity-minus"
                        data-step="down" {{#NOT_AVAILABLE}} disabled="disabled" {{
                /NOT_AVAILABLE}}>
                <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.913708 1.4712C0.744147 1.4712 0.609375 1.33318 0.609375 1.16467C0.609375 0.996153 0.744147 0.862213 0.913708 0.862213H8.90936C9.07892 0.862213 9.21807 0.996153 9.21807 1.16467C9.21807 1.33318 9.07892 1.47148 8.90936 1.47148H0.913708V1.4712Z"
                          fill="#535353"/>
                </svg>
                </button>
                <input type="text"
                       class="stepper__input"
                       id="basket-item-quantity-{{ID}}"
                       data-entity="basket-item-quantity-field"
                       value="{{QUANTITY}}"
                       {{#NOT_AVAILABLE}} disabled="disabled" {{/NOT_AVAILABLE}}
                />
                <button class="stepper__btn stepper__btn--plus" type="button" data-step="up"
                        data-entity="basket-item-quantity-plus" {{#NOT_AVAILABLE}} disabled="disabled" {{
                /NOT_AVAILABLE}}>
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.59086 4.41317H5.62891V0.475667C5.62891 0.274308 5.46467 0.111084 5.26206 0.111084C5.05945 0.111084 4.89521 0.274308 4.89521 0.475667V4.41317H0.933254C0.730644 4.41317 0.566406 4.57639 0.566406 4.77775C0.566406 4.97911 0.730644 5.14233 0.933254 5.14233H4.89521V9.07983C4.89521 9.28119 5.05945 9.44442 5.26206 9.44442C5.46467 9.44442 5.62891 9.28119 5.62891 9.07983V5.14233H9.59086C9.79347 5.14233 9.95771 4.97911 9.95771 4.77775C9.95771 4.57639 9.79347 4.41317 9.59086 4.41317Z"
                          fill="#535353"/>
                </svg>
                </button>
            </div>
            <?php if ($useSumColumn): ?>
                <div class="basket__summa">
                    <div class="basket__price-total" id="basket-item-sum-price-{{ID}}">{{{SUM_PRICE_FORMATED}}}</div>
                </div>
            <?php endif; ?>

        </div>
        <?php
        if ($useActionColumn) {
            ?>
            <div class="basket__product-del" data-entity="basket-item-delete">
                <a href="" class="">
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.99992 0.622737L6.49992 5.12274L10.9999 0.636374C11.0885 0.546223 11.1949 0.475437 11.3122 0.428493C11.4296 0.381549 11.5554 0.359468 11.6817 0.363646C11.9296 0.379689 12.1632 0.485407 12.3389 0.661061C12.5145 0.836716 12.6202 1.0703 12.6363 1.31819C12.6375 1.44008 12.614 1.56094 12.5671 1.67346C12.5202 1.78597 12.451 1.88779 12.3636 1.97274L7.84992 6.50001L12.3636 11.0273C12.5408 11.1991 12.639 11.4364 12.6363 11.6818C12.6202 11.9297 12.5145 12.1633 12.3389 12.339C12.1632 12.5146 11.9296 12.6203 11.6817 12.6364C11.5554 12.6405 11.4296 12.6185 11.3122 12.5715C11.1949 12.5246 11.0885 12.4538 10.9999 12.3636L6.49992 7.87728L2.01356 12.3636C1.92496 12.4538 1.81862 12.5246 1.70126 12.5715C1.5839 12.6185 1.45807 12.6405 1.33174 12.6364C1.07922 12.6232 0.840527 12.517 0.661727 12.3382C0.482928 12.1594 0.376704 11.9207 0.36356 11.6682C0.362327 11.5463 0.385864 11.4254 0.432745 11.3129C0.479626 11.2004 0.548874 11.0986 0.636288 11.0136L5.14992 6.50001L0.622651 1.97274C0.537699 1.88664 0.470971 1.78431 0.426455 1.67185C0.381939 1.55939 0.360548 1.43911 0.36356 1.31819C0.379603 1.0703 0.485321 0.836716 0.660975 0.661061C0.83663 0.485407 1.07021 0.379689 1.31811 0.363646C1.44345 0.357693 1.56869 0.377625 1.68599 0.422202C1.8033 0.466778 1.91016 0.535042 1.99992 0.622737Z"
                              fill="#BBBBBB"/>
                    </svg>
                </a>
            </div>
            <?
        }
        ?>
        {{/SHOW_RESTORE}}

    </div>

</script>