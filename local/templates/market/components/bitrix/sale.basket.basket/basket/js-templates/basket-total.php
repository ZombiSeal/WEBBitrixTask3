<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 */
?>
<script id="basket-total-template" type="text/html">

    <a class="basket__clear" href="#">
        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.63664 0.26012L6.13664 4.76012L10.6366 0.273756C10.7252 0.183605 10.8316 0.11282 10.9489 0.0658759C11.0663 0.0189319 11.1921 -0.00314924 11.3185 0.00102885C11.5664 0.0170712 11.7999 0.122789 11.9756 0.298444C12.1512 0.474098 12.257 0.70768 12.273 0.955574C12.2742 1.07746 12.2507 1.19832 12.2038 1.31084C12.1569 1.42335 12.0877 1.52517 12.0003 1.61012L7.48664 6.13739L12.0003 10.6647C12.1775 10.8365 12.2757 11.0738 12.273 11.3192C12.257 11.5671 12.1512 11.8007 11.9756 11.9763C11.7999 12.152 11.5664 12.2577 11.3185 12.2738C11.1921 12.2779 11.0663 12.2558 10.9489 12.2089C10.8316 12.162 10.7252 12.0912 10.6366 12.001L6.13664 7.51466L1.65028 12.001C1.56168 12.0912 1.45534 12.162 1.33798 12.2089C1.22062 12.2558 1.09479 12.2779 0.968461 12.2738C0.715942 12.2606 0.477245 12.1544 0.298446 11.9756C0.119647 11.7968 0.0134231 11.5581 0.000279106 11.3056C-0.000954715 11.1837 0.0225828 11.0628 0.0694638 10.9503C0.116345 10.8378 0.185592 10.736 0.273006 10.651L4.78664 6.13739L0.25937 1.61012C0.174417 1.52403 0.10769 1.42169 0.0631741 1.30923C0.0186582 1.19677 -0.00273279 1.07649 0.000279106 0.955574C0.0163214 0.70768 0.12204 0.474098 0.297694 0.298444C0.473348 0.122789 0.70693 0.0170712 0.954824 0.00102885C1.08017 -0.00492474 1.2054 0.0150079 1.32271 0.0595841C1.44002 0.10416 1.54688 0.172424 1.63664 0.26012Z"
                  fill="#BBBBBB"/>
        </svg>
        Очистить корзину
    </a>
    <?
    if ($arParams['HIDE_COUPON'] !== 'Y') {
        ?>
        <div class="basket-coupon-section">
            <div class="basket-coupon-block-field">
                <div class="basket-coupon-block-field-description">
                    <?= Loc::getMessage('SBB_COUPON_ENTER') ?>:
                </div>
                <div class="form">
                    <div class="form-group" style="position: relative;">
                        <input type="text" class="form-control" id="" placeholder="" data-entity="basket-coupon-input">
                        <span class=" basket-coupon-block-coupon-btn"></span>
                    </div>
                </div>

            </div>
        </div>
        <?
    }
    ?>

    <div class="basket__total-amount-wrap">
        <div class="basket__total-amount"><?= Loc::getMessage('SBB_TOTAL') ?>:<span data-entity="basket-total-price">{{{PRICE_FORMATED}}}</span>
        </div>
        <button class="basket__arrange-link"
                data-entity="basket-checkout-button">
            <?= Loc::getMessage('SBB_ORDER') ?>
        </button>
    </div>


    <?
    if ($arParams['HIDE_COUPON'] !== 'Y') {
        ?>
        <div class="basket-coupon-alert-section">
            <div class="basket-coupon-alert-inner">
                {{#COUPON_LIST}}
                <div class="basket-coupon-alert text-{{CLASS}}">
						<span class="basket-coupon-text">
							<strong>{{COUPON}}</strong> - <?= Loc::getMessage('SBB_COUPON') ?> {{JS_CHECK_CODE}}
							{{#DISCOUNT_NAME}}({{DISCOUNT_NAME}}){{/DISCOUNT_NAME}}
						</span>
                    <span class="close-link" data-entity="basket-coupon-delete" data-coupon="{{COUPON}}">
							<?= Loc::getMessage('SBB_DELETE') ?>
						</span>
                </div>
                {{/COUPON_LIST}}
            </div>
        </div>
        <?
    }
    ?>


</script>

