<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?>

<div class="basket-page">
  <div class="basket__products">
    <div class="basket__product">
      <div class="basket__product-img-wrap">
        <a href="#">
          <img src="/korzina/basket-products/product-1.jpg" alt="ЖК2 105" class="basket__product-img">
        </a>
      </div>
      <div class="basket__product-list">
        <a href="#" class="basket__product-link">ЖК2 105</a>
        <p class="select__selected">Артикул: <span>1135151</span></p>
        <p class="select__selected">Цвет: <span>зеленый</span></p>
        <p class="select__selected">Размер: <span>42</span></p>
        <div class="card-info__select color-select card-info__color-select">
          <p class="color-select__selected">Цвет:</p>
          <ul class="color-select__list">
            <li class="color-select__item">
              <button class="color-select__btn" data-color="#28F0E4" style="background-color: #28F0E4;"></button>
            </li>
            <li class="color-select__item">
              <button class="color-select__btn" data-color="#28F090" style="background-color:#28F090;"></button>
            </li>
            <li class="color-select__item">
              <button class="color-select__btn color-select__btn--active" data-color="#84F84D" style="background-color: #84F84D;"></button>
            </li>
            <li class="color-select__item">
              <button class="color-select__btn" data-color="#C8F028" style="background-color: #C8F028;"></button>
            </li>
            <li class="color-select__item">
              <button class="color-select__btn" data-color="#F08828" style="background-color: #F08828;"></button>
            </li>
            <li class="color-select__item">
              <button class="color-select__btn" data-color="#F03428" style="background-color: #F03428;"></button>
            </li>
            <li class="color-select__item">
              <button class="color-select__btn" data-color="#F08828" style="background-color: #F08828;"></button>
            </li>
          </ul>
        </div>
        <div class="card-info__select size-select card-info__size-select">
          <p class="size-select__selected">Размер:</span></p>
          <ul class="size-select__list">
            <li class="size-select__item"><button class="size-select__btn size-select__btn--active">42</button></li>
            <li class="size-select__item"><button class="size-select__btn">44</button></li>
            <li class="size-select__item"><button class="size-select__btn">46</button></li>
            <li class="size-select__item"><button class="size-select__btn">48</button></li>
            <li class="size-select__item"><button class="size-select__btn">50</button></li>
            <li class="size-select__item"><button class="size-select__btn">52</button></li>
            <li class="size-select__item"><button class="size-select__btn">54</button></li>
            <li class="size-select__item"><button class="size-select__btn">56</button></li>
          </ul>
        </div>
      </div>
      <div class="basket__price">
        <div class="basket__price-current">5 172 р.</div>
        <div class="basket__price-count-text">Цена за 1шт</div>
      </div>
      <div class="basket__product-wrap-mob">
        <div class="side-basket__product-stepper stepper js-stepper">
          <button class="stepper__btn stepper__btn--minus" type="button" data-step="down">
            <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.913708 1.4712C0.744147 1.4712 0.609375 1.33318 0.609375 1.16467C0.609375 0.996153 0.744147 0.862213 0.913708 0.862213H8.90936C9.07892 0.862213 9.21807 0.996153 9.21807 1.16467C9.21807 1.33318 9.07892 1.47148 8.90936 1.47148H0.913708V1.4712Z" fill="#535353" />
            </svg>
          </button>
          <input type="text" class="stepper__input" value="2">
          <button class="stepper__btn stepper__btn--plus" type="button" data-step="up">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9.59086 4.41317H5.62891V0.475667C5.62891 0.274308 5.46467 0.111084 5.26206 0.111084C5.05945 0.111084 4.89521 0.274308 4.89521 0.475667V4.41317H0.933254C0.730644 4.41317 0.566406 4.57639 0.566406 4.77775C0.566406 4.97911 0.730644 5.14233 0.933254 5.14233H4.89521V9.07983C4.89521 9.28119 5.05945 9.44442 5.26206 9.44442C5.46467 9.44442 5.62891 9.28119 5.62891 9.07983V5.14233H9.59086C9.79347 5.14233 9.95771 4.97911 9.95771 4.77775C9.95771 4.57639 9.79347 4.41317 9.59086 4.41317Z" fill="#535353" />
            </svg>
          </button>
        </div>
        <div class="basket__summa">
          <div class="basket__price-total">10 344 р.</div>
        </div>
      </div>
      <div class="basket__product-del">
        <a href="" class="">
          <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.99992 0.622737L6.49992 5.12274L10.9999 0.636374C11.0885 0.546223 11.1949 0.475437 11.3122 0.428493C11.4296 0.381549 11.5554 0.359468 11.6817 0.363646C11.9296 0.379689 12.1632 0.485407 12.3389 0.661061C12.5145 0.836716 12.6202 1.0703 12.6363 1.31819C12.6375 1.44008 12.614 1.56094 12.5671 1.67346C12.5202 1.78597 12.451 1.88779 12.3636 1.97274L7.84992 6.50001L12.3636 11.0273C12.5408 11.1991 12.639 11.4364 12.6363 11.6818C12.6202 11.9297 12.5145 12.1633 12.3389 12.339C12.1632 12.5146 11.9296 12.6203 11.6817 12.6364C11.5554 12.6405 11.4296 12.6185 11.3122 12.5715C11.1949 12.5246 11.0885 12.4538 10.9999 12.3636L6.49992 7.87728L2.01356 12.3636C1.92496 12.4538 1.81862 12.5246 1.70126 12.5715C1.5839 12.6185 1.45807 12.6405 1.33174 12.6364C1.07922 12.6232 0.840527 12.517 0.661727 12.3382C0.482928 12.1594 0.376704 11.9207 0.36356 11.6682C0.362327 11.5463 0.385864 11.4254 0.432745 11.3129C0.479626 11.2004 0.548874 11.0986 0.636288 11.0136L5.14992 6.50001L0.622651 1.97274C0.537699 1.88664 0.470971 1.78431 0.426455 1.67185C0.381939 1.55939 0.360548 1.43911 0.36356 1.31819C0.379603 1.0703 0.485321 0.836716 0.660975 0.661061C0.83663 0.485407 1.07021 0.379689 1.31811 0.363646C1.44345 0.357693 1.56869 0.377625 1.68599 0.422202C1.8033 0.466778 1.91016 0.535042 1.99992 0.622737Z" fill="#BBBBBB" />
          </svg>
        </a>
      </div>
    </div>
    <div class="basket__product">
      <div class="basket__product-img-wrap">
        <a href="#">
          <img src="/korzina/basket-products/product-2.jpg" alt="Шуба из меха норки черного цвета с куницей." class="basket__product-img">
        </a>
      </div>
      <div class="basket__product-list">
        <a href="#" class="basket__product-link">Шуба из меха норки черного цвета с куницей.</a>
        <p class="select__selected">Артикул: <span>445451</span></p>
        <p class="select__selected">Цвет: <span>красный</span></p>
        <p class="select__selected">Размер: <span>50</span></p>
        <div class="card-info__select color-select card-info__color-select">
          <p class="color-select__selected">Цвет:</p>
          <ul class="color-select__list">
            <li class="color-select__item">
              <button class="color-select__btn" data-color="#28F0E4" style="background-color: #28F0E4;"></button>
            </li>
            <li class="color-select__item">
              <button class="color-select__btn" data-color="#28F090" style="background-color:#28F090;"></button>
            </li>
            <li class="color-select__item">
              <button class="color-select__btn" data-color="#84F84D" style="background-color: #84F84D;"></button>
            </li>
            <li class="color-select__item">
              <button class="color-select__btn color-select__btn--active" data-color="#F03428" style="background-color: #F03428;"></button>
            </li>
            <li class="color-select__item">
              <button class="color-select__btn" data-color="#F08828" style="background-color: #F08828;"></button>
            </li>
            <li class="color-select__item">
              <button class="color-select__btn" data-color="#F08828" style="background-color: #F08828;"></button>
            </li>
          </ul>
        </div>
        <div class="card-info__select size-select card-info__size-select">
          <p class="size-select__selected">Размер:</span></p>
          <ul class="size-select__list">
            <li class="size-select__item"><button class="size-select__btn">44</button></li>
            <li class="size-select__item"><button class="size-select__btn">48</button></li>
            <li class="size-select__item"><button class="size-select__btn size-select__btn--active">50</button></li>
            <li class="size-select__item"><button class="size-select__btn">52</button></li>
            <li class="size-select__item"><button class="size-select__btn">54</button></li>
            <li class="size-select__item"><button class="size-select__btn">56</button></li>
          </ul>
        </div>
      </div>

      <div class="basket__price">
        <div class="basket__price-current">11 344 р.</div>
        <div class="basket__price-count-text">Цена за 1шт</div>
      </div>
      <div class="basket__product-wrap-mob">
        <div class="side-basket__product-stepper stepper js-stepper">
          <button class="stepper__btn stepper__btn--minus" type="button" data-step="down">
            <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.913708 1.4712C0.744147 1.4712 0.609375 1.33318 0.609375 1.16467C0.609375 0.996153 0.744147 0.862213 0.913708 0.862213H8.90936C9.07892 0.862213 9.21807 0.996153 9.21807 1.16467C9.21807 1.33318 9.07892 1.47148 8.90936 1.47148H0.913708V1.4712Z" fill="#535353" />
            </svg>
          </button>
          <input type="text" class="stepper__input" value="10">
          <button class="stepper__btn stepper__btn--plus" type="button" data-step="up">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9.59086 4.41317H5.62891V0.475667C5.62891 0.274308 5.46467 0.111084 5.26206 0.111084C5.05945 0.111084 4.89521 0.274308 4.89521 0.475667V4.41317H0.933254C0.730644 4.41317 0.566406 4.57639 0.566406 4.77775C0.566406 4.97911 0.730644 5.14233 0.933254 5.14233H4.89521V9.07983C4.89521 9.28119 5.05945 9.44442 5.26206 9.44442C5.46467 9.44442 5.62891 9.28119 5.62891 9.07983V5.14233H9.59086C9.79347 5.14233 9.95771 4.97911 9.95771 4.77775C9.95771 4.57639 9.79347 4.41317 9.59086 4.41317Z" fill="#535353" />
            </svg>
          </button>
        </div>
        <div class="basket__summa">
          <div class="basket__price-total">157 205 р.</div>
        </div>
      </div>
      <div class="basket__product-del">
        <a href="" class="">
          <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.99992 0.622737L6.49992 5.12274L10.9999 0.636374C11.0885 0.546223 11.1949 0.475437 11.3122 0.428493C11.4296 0.381549 11.5554 0.359468 11.6817 0.363646C11.9296 0.379689 12.1632 0.485407 12.3389 0.661061C12.5145 0.836716 12.6202 1.0703 12.6363 1.31819C12.6375 1.44008 12.614 1.56094 12.5671 1.67346C12.5202 1.78597 12.451 1.88779 12.3636 1.97274L7.84992 6.50001L12.3636 11.0273C12.5408 11.1991 12.639 11.4364 12.6363 11.6818C12.6202 11.9297 12.5145 12.1633 12.3389 12.339C12.1632 12.5146 11.9296 12.6203 11.6817 12.6364C11.5554 12.6405 11.4296 12.6185 11.3122 12.5715C11.1949 12.5246 11.0885 12.4538 10.9999 12.3636L6.49992 7.87728L2.01356 12.3636C1.92496 12.4538 1.81862 12.5246 1.70126 12.5715C1.5839 12.6185 1.45807 12.6405 1.33174 12.6364C1.07922 12.6232 0.840527 12.517 0.661727 12.3382C0.482928 12.1594 0.376704 11.9207 0.36356 11.6682C0.362327 11.5463 0.385864 11.4254 0.432745 11.3129C0.479626 11.2004 0.548874 11.0986 0.636288 11.0136L5.14992 6.50001L0.622651 1.97274C0.537699 1.88664 0.470971 1.78431 0.426455 1.67185C0.381939 1.55939 0.360548 1.43911 0.36356 1.31819C0.379603 1.0703 0.485321 0.836716 0.660975 0.661061C0.83663 0.485407 1.07021 0.379689 1.31811 0.363646C1.44345 0.357693 1.56869 0.377625 1.68599 0.422202C1.8033 0.466778 1.91016 0.535042 1.99992 0.622737Z" fill="#BBBBBB" />
          </svg>
        </a>
      </div>
    </div>
    <div class="basket__product">
      <div class="basket__product-img-wrap">
        <a href="#">
          <img src="/korzina/basket-products/product-3.jpg" alt="Шуба из меха норки" class="basket__product-img">
        </a>
      </div>
      <div class="basket__product-list">
        <a href="#" class="basket__product-link">Шуба из меха норки</a>
        <p class="select__selected">Артикул: <span>196247</span></p>
        <p class="select__selected">Цвет: <span>синий</span></p>
        <p class="select__selected">Размер: <span>44</span></p>
        <div class="card-info__select color-select card-info__color-select">
          <p class="color-select__selected">Цвет:</p>
          <ul class="color-select__list">
            <li class="color-select__item">
              <button class="color-select__btn color-select__btn--active" data-color="#28F0E4" style="background-color: #28F0E4;"></button>
            </li>
            <li class="color-select__item">
              <button class="color-select__btn" data-color="#84F84D" style="background-color: #84F84D;"></button>
            </li>
            <li class="color-select__item">
              <button class="color-select__btn" data-color="#F03428" style="background-color: #F03428;"></button>
            </li>
            <li class="color-select__item">
              <button class="color-select__btn" data-color="#F08828" style="background-color: #F08828;"></button>
            </li>
          </ul>
        </div>
        <div class="card-info__select size-select card-info__size-select">
          <p class="size-select__selected">Размер:</span></p>
          <ul class="size-select__list">
            <li class="size-select__item"><button class="size-select__btn size-select__btn--active">44</button></li>
            <li class="size-select__item"><button class="size-select__btn">48</button></li>
            <li class="size-select__item"><button class="size-select__btn">50</button></li>
            <li class="size-select__item"><button class="size-select__btn">54</button></li>
          </ul>
        </div>
      </div>
      <div class="basket__price">
        <div class="basket__price-current">60 р.</div>
        <div class="basket__price-count-text">Цена за 1шт</div>
      </div>
      <div class="basket__product-wrap-mob">
        <div class="side-basket__product-stepper stepper js-stepper">
          <button class="stepper__btn stepper__btn--minus" type="button" data-step="down">
            <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.913708 1.4712C0.744147 1.4712 0.609375 1.33318 0.609375 1.16467C0.609375 0.996153 0.744147 0.862213 0.913708 0.862213H8.90936C9.07892 0.862213 9.21807 0.996153 9.21807 1.16467C9.21807 1.33318 9.07892 1.47148 8.90936 1.47148H0.913708V1.4712Z" fill="#535353" />
            </svg>
          </button>
          <input type="text" class="stepper__input" value="1">
          <button class="stepper__btn stepper__btn--plus" type="button" data-step="up">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9.59086 4.41317H5.62891V0.475667C5.62891 0.274308 5.46467 0.111084 5.26206 0.111084C5.05945 0.111084 4.89521 0.274308 4.89521 0.475667V4.41317H0.933254C0.730644 4.41317 0.566406 4.57639 0.566406 4.77775C0.566406 4.97911 0.730644 5.14233 0.933254 5.14233H4.89521V9.07983C4.89521 9.28119 5.05945 9.44442 5.26206 9.44442C5.46467 9.44442 5.62891 9.28119 5.62891 9.07983V5.14233H9.59086C9.79347 5.14233 9.95771 4.97911 9.95771 4.77775C9.95771 4.57639 9.79347 4.41317 9.59086 4.41317Z" fill="#535353" />
            </svg>
          </button>
        </div>
        <div class="basket__summa">
          <div class="basket__price-total">60 р.</div>
        </div>
      </div>
      <div class="basket__product-del">
        <a href="" class="">
          <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.99992 0.622737L6.49992 5.12274L10.9999 0.636374C11.0885 0.546223 11.1949 0.475437 11.3122 0.428493C11.4296 0.381549 11.5554 0.359468 11.6817 0.363646C11.9296 0.379689 12.1632 0.485407 12.3389 0.661061C12.5145 0.836716 12.6202 1.0703 12.6363 1.31819C12.6375 1.44008 12.614 1.56094 12.5671 1.67346C12.5202 1.78597 12.451 1.88779 12.3636 1.97274L7.84992 6.50001L12.3636 11.0273C12.5408 11.1991 12.639 11.4364 12.6363 11.6818C12.6202 11.9297 12.5145 12.1633 12.3389 12.339C12.1632 12.5146 11.9296 12.6203 11.6817 12.6364C11.5554 12.6405 11.4296 12.6185 11.3122 12.5715C11.1949 12.5246 11.0885 12.4538 10.9999 12.3636L6.49992 7.87728L2.01356 12.3636C1.92496 12.4538 1.81862 12.5246 1.70126 12.5715C1.5839 12.6185 1.45807 12.6405 1.33174 12.6364C1.07922 12.6232 0.840527 12.517 0.661727 12.3382C0.482928 12.1594 0.376704 11.9207 0.36356 11.6682C0.362327 11.5463 0.385864 11.4254 0.432745 11.3129C0.479626 11.2004 0.548874 11.0986 0.636288 11.0136L5.14992 6.50001L0.622651 1.97274C0.537699 1.88664 0.470971 1.78431 0.426455 1.67185C0.381939 1.55939 0.360548 1.43911 0.36356 1.31819C0.379603 1.0703 0.485321 0.836716 0.660975 0.661061C0.83663 0.485407 1.07021 0.379689 1.31811 0.363646C1.44345 0.357693 1.56869 0.377625 1.68599 0.422202C1.8033 0.466778 1.91016 0.535042 1.99992 0.622737Z" fill="#BBBBBB" />
          </svg>
        </a>
      </div>
    </div>
  </div>
  <div class="basket__middle">
    <a class="basket__clear" href="#">
      <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.63664 0.26012L6.13664 4.76012L10.6366 0.273756C10.7252 0.183605 10.8316 0.11282 10.9489 0.0658759C11.0663 0.0189319 11.1921 -0.00314924 11.3185 0.00102885C11.5664 0.0170712 11.7999 0.122789 11.9756 0.298444C12.1512 0.474098 12.257 0.70768 12.273 0.955574C12.2742 1.07746 12.2507 1.19832 12.2038 1.31084C12.1569 1.42335 12.0877 1.52517 12.0003 1.61012L7.48664 6.13739L12.0003 10.6647C12.1775 10.8365 12.2757 11.0738 12.273 11.3192C12.257 11.5671 12.1512 11.8007 11.9756 11.9763C11.7999 12.152 11.5664 12.2577 11.3185 12.2738C11.1921 12.2779 11.0663 12.2558 10.9489 12.2089C10.8316 12.162 10.7252 12.0912 10.6366 12.001L6.13664 7.51466L1.65028 12.001C1.56168 12.0912 1.45534 12.162 1.33798 12.2089C1.22062 12.2558 1.09479 12.2779 0.968461 12.2738C0.715942 12.2606 0.477245 12.1544 0.298446 11.9756C0.119647 11.7968 0.0134231 11.5581 0.000279106 11.3056C-0.000954715 11.1837 0.0225828 11.0628 0.0694638 10.9503C0.116345 10.8378 0.185592 10.736 0.273006 10.651L4.78664 6.13739L0.25937 1.61012C0.174417 1.52403 0.10769 1.42169 0.0631741 1.30923C0.0186582 1.19677 -0.00273279 1.07649 0.000279106 0.955574C0.0163214 0.70768 0.12204 0.474098 0.297694 0.298444C0.473348 0.122789 0.70693 0.0170712 0.954824 0.00102885C1.08017 -0.00492474 1.2054 0.0150079 1.32271 0.0595841C1.44002 0.10416 1.54688 0.172424 1.63664 0.26012Z" fill="#BBBBBB" />
      </svg>
      Очистить корзину
    </a>
    <div class="basket__total-amount-wrap">
      <div class="basket__total-amount">ИТОГО:<span>10 344 р.</span></div>
      <a href="#" class="basket__arrange-link">Оформить заказ</a>
    </div>
  </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>