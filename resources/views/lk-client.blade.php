@extends('layout')

@section ('title','Личный кабинет')

@section('content')
  <section class="section section--lk-client section__home">
    <h1 class="section__title">Личный кабинет</h1>
    <div class="lk-client">
      <div class="container-home">
        <div class="info-block info-block__wrapper">
          <h2 class="secondary-title">Мой стиль</h2>
          <div class="lk-client__style">
            <div class="lk-client__style-photo"><img src="img/winter.png" alt=""/></div>
            <div class="lk-client__style-seasons">
              <ul class="lk-client__style-seasons-list"><a class="link-change-content link-change-content--active"
                                                           href="#">Зима</a><a class="link-change-content" href="#">Весна</a><a
                  class="link-change-content" href="#">Лето</a><a class="link-change-content" href="#">Осень</a>
              </ul>
              <div class="lk-client__style-seasons-description lk-client__style-seasons-description--active">
                <p class="lk-client__style-seasons-description-text">
                  Мода постоянно диктует нам свои требования и для
                  современной девушки, желающей идти в ногу со временем,
                  важно иметь возможность постоянно пополнять свой гардероб
                  стильной одеждой. Коллекционная часть ассортимент обновляется
                  в магазинах каждые две недели и отражает все модные тренды.
                </p>
                <p class="lk-client__style-seasons-description-text">
                  Продолжением цветовых и трендовых решений коллекционной
                  части являются базовые модели, которые представлены во всех
                  отделах женской одежды внутри магазинов, а так же бестселлеры
                  прошлых сезонов, характеризующиеся умеренным дизайном и
                  невысокими ценами.
                </p>
                <p class="lk-client__style-seasons-description-text">
                  Мы сами контролируем весь процесс производства,
                  начиная от разработки одежды и заканчивая розничной
                  продажей моделей в собственных магазинах сети и Онлайн,
                  что позволяет нам продавать хорошую качественную одежду
                  по минимальным ценам.
                </p>
              </div>
              <div class="lk-client__style-seasons-description">
                <p class="lk-client__style-seasons-description-text">
                  Мода постоянно диктует нам свои требования и для
                  современной девушки, желающей идти в ногу со временем,
                  важно иметь возможность постоянно пополнять свой гардероб
                  стильной одеждой. Коллекционная часть ассортимент обновляется
                  в магазинах каждые две недели и отражает все модные тренды.
                </p>
                <p class="lk-client__style-seasons-description-text">
                  Продолжением цветовых и трендовых решений коллекционной
                  части являются базовые модели, которые представлены во всех
                  отделах женской одежды
                </p>
              </div>
              <div class="lk-client__style-seasons-description">
                <p class="lk-client__style-seasons-description-text">
                  Мода постоянно диктует нам свои требования и для
                  современной девушки, желающей и
                </p>
                <p class="lk-client__style-seasons-description-text">
                  Мы сами контролируем весь процесс производства,
                  начиная от разработки одежды и заканчивая розничной
                  продажей моделей в собственных магазинах сети и Онлайн,
                  что позволяет нам продавать хорошую качественную одежду
                  по минимальным ценам.
                </p>
              </div>
              <div class="lk-client__style-seasons-description">
                <p class="lk-client__style-seasons-description-text">
                  Мода постоянно диктует нам свои требования и для
                  современной девушки, желающей идти в ногу со временем,
                  важно иметь возможность постоянно пополнять свой гардероб
                  стильной одеждой. Коллекционная часть ассортимент обновляется
                  в магазинах каждые две недели и отражает все модные тренды.
                </p>
                <p class="lk-client__style-seasons-description-text">
                  Продолжением цветовых и трендовых решений коллекционной
                  части являются базовые модели, которые представлены во всех
                  отделах женской одежды внутри магазинов, а так же бестселлеры
                  прошлых сезонов, характеризующиеся умеренным дизайном и
                  невысокими ценами.
                </p>
                <p class="lk-client__style-seasons-description-text">Мы сами контролируем весь про</p>
              </div>
              <a class="link-common link-common--right" href="#">Посмотреть все рекомендации</a>
            </div>
          </div>
        </div>
        <div class="info-block info-block__wrapper">
          <h2 class="secondary-title">Моя история заказов</h2>
          <div class="scroll-block scroll-block--orders scroll-block--slim scroll-block__wrapper">
            <ul class="orders__title">
              <li class="orders__photo">Фото</li>
              <li class="orders__service orders__service--big">Услуга</li>
              <li class="orders__date-name orders__date-name--big">Дата</li>
              <li class="orders__count orders__count--big">Количество</li>
              <li class="orders__price orders__price--big">Цена</li>
              @
            </ul>
            <ul class="orders__item">
              <li class="orders__photo"><img src="img/services/selection-hairstyle.png" alt="" width="70%"/></li>
              <li class="orders__service orders__service--big"><span>Подбор прически</span><br/><span>Стилист первой категории</span><br/><a
                  class="common-link" href="#">Стилевое решение</a></li>
              <li class="orders__date-name orders__date-name--big">18.07.2016</li>
              <li class="orders__count orders__count--big">2</li>
              <li class="orders__price orders__price--big">
                <input class="input--number input-price" type="number" disabled="disabled"
                       value="5000"/><span>р</span>
              </li>
            </ul>
            <ul class="orders__item">
              <li class="orders__photo"><img src="img/services/select-makeup.png" alt="" width="70%"/></li>
              <li class="orders__service orders__service--big">
                <span>Подбор макияжа</span><br/><span>VIP стилист</span><br/><a class="common-link" href="#">Стилевое
                  решение</a></li>
              <li class="orders__date-name orders__date-name--big">15.06.2018</li>
              <li class="orders__count orders__count--big">1</li>
              <li class="orders__price orders__price--big">
                <input class="input--number input-price" type="number" disabled="disabled"
                       value="3500"/><span>р</span>
              </li>
            </ul>
            <ul class="orders__item">
              <li class="orders__photo"><img src="img/services/make-over.png" alt="" width="70%"/></li>
              <li class="orders__service orders__service--big">
                <span>Пакет или подарочный сертификат make over</span><br/><a class="common-link" href="#">Стилевое
                  решение</a></li>
              <li class="orders__date-name orders__date-name--big">25.02.2018</li>
              <li class="orders__count orders__count--big">1</li>
              <li class="orders__price orders__price--big">
                <input class="input--number input-price" type="number" disabled="disabled"
                       value="2500"/><span>р</span>
              </li>
            </ul>
          </div>
          <a class="link-common link-common--right" href="#">Посмотреть все заказы</a>
        </div>
        <div class="info-block info-block__wrapper">
          <h2 class="secondary-title">Мои вопросы</h2>
          <div class="scroll-block">
            <div class="ask-question__quest">
              <div class="ask-question__quest-icon">?</div>
              <div class="ask-question__quest-block"><a class="ask-question__quest-block-title" href="#">Добрый
                  день! Подскажите, что посоветуете одевать при широких плечах и прямой фигуре, еще и маленьком
                  росте!</a>
                <div class="ask-question__quest-block-text">Виктория, если при этом у вас изящные бедра и ноги, то
                  есть несколько вариантов. Во-первых, визуально усугубить перевернутый треугольник, то есть
                  сместить акцент на плечи, например, надев жакет с гиперболизированными плечами. За счет оптической
                  иллюзии, создаться впечатление, что широкие плечи - заслуга жакета, а не ваши личные физически
                  параметры. Более того, сегодняшняя мода на андрогинность предполагает, что плечи шире бедер
                  (вспомните подиумных моделей). А еще смещение акцента (плечи) ближе к лицу позволит визуально
                  вытянуть рост. Если вас больше прельщают женственные формы, то я бы посоветовала подчеркнуть талию
                  и увеличить бедра за счет юбки-колокола, которая держит форму (плотные ткани, кожа и тд). То есть
                  за счет той же иллюзии теперь вы расширите бедра и подчеркнете талию. А чтобы сделать ее еще более
                  выраженной, для верха вы можете использовать треугольный вырез, создав иллюзию "острого угла". В
                  любом случае, чтобы увеличить рост, стоит выбирать схожие цвета для верха и низа, чтобы не резать
                  фигуру, а, наоборот, визуально ее вытягивать.
                </div>
              </div>
            </div>
            <div class="ask-question__quest">
              <div class="ask-question__quest-icon">?</div>
              <div class="ask-question__quest-block"><a class="ask-question__quest-block-title" href="#">здравствуйте!хочется
                  узнать,что весной можно одеть с высокими сапогами(до колен),коричневого цвета,без каблука?тип
                  фигуры прямоугольный. Работаю учителем,хочется и на работу что то одеть с ними,и после работы)
                  заранее спасибо</a>
                <div class="ask-question__quest-block-text">Альбина, если Вам на работе позволительно надевать
                  классические джинсы (без всяких излишеств, с нашивными карманами, без так называемых цветовых
                  высолов и потертостей), а именно правильного синего или голубого цвета, то можете попробовать
                  носить такие джинсы с этими сапогами, легкой блузой, поддетой под трикотаж или шерстяной кардиган.
                  Сюда также можно добавить аккуратный кулон (которые вновь становятся актуальными) или шелковый
                  платок повязать на шею. Получится сдержанный профессиональный образ, который при этом не создает
                  дистанции с вашими учениками, но и не нарушает субординацию. Или купить хороший блейзер (как часто
                  представлено в Massimo Dutti) и надевать под него топ.
                </div>
              </div>
            </div>
            <div class="ask-question__quest">
              <div class="ask-question__quest-icon">?</div>
              <div class="ask-question__quest-block"><a class="ask-question__quest-block-title" href="#">Здравствуйте!
                  А под юбкой-карандаш понимается только зауженная юбка?</a>
                <div class="ask-question__quest-block-text">Лидия, добрый день! Вообще, да. Юбка-карандаш в
                  классическом понимании обладает определенным силуэтом: нормальная посадка на талии, чуть ниже
                  колена и зауженная.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

