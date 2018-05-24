@extends('layouts.layout')

@section('title','Мой стиль')

@section('content')
  <section class="section section--lk-client">
    <h1 class="section__title">Мой стиль</h1>
    <div class="container">
      <div class="lk-stylist__block">
        <h2 class="title-second">Мой стиль</h2>
        <div class="lk-client__style">
          <div class="lk-client__style-seasons">

            <ul class="lk-client__style-seasons-list">
              <a class="link-change-content link-change-content--active" href="#">Зима</a>
              <a class="link-change-content" href="#">Весна</a>
              <a class="link-change-content" href="#">Лето</a>
              <a class="link-change-content" href="#">Осень</a>
            </ul>

            <div class="lk-client__style-seasons-description lk-client__style-seasons-description--active">
              <div class="lk-client__style-photo">
                <img class="lk-client__style-seasons-photo" src="/img/my-style/winter.jpg" alt="" />
              </div>

              <div>
                <p class="lk-client__paragraph">
                  Мода постоянно диктует нам свои требования и для
                  современной девушки, желающей идти в ногу со временем,
                  важно иметь возможность постоянно пополнять свой гардероб
                  стильной одеждой. Коллекционная часть ассортимент обновляется
                  в магазинах каждые две недели и отражает все модные тренды.
                </p>
                <p class="lk-client__paragraph">
                  Продолжением цветовых и трендовых решений коллекционной
                  части являются базовые модели, которые представлены во всех
                  отделах женской одежды внутри магазинов, а так же бестселлеры
                  прошлых сезонов, характеризующиеся умеренным дизайном и
                  невысокими ценами.
                </p>
                <p class="lk-client__paragraph">
                  Мы сами контролируем весь процесс производства,
                  начиная от разработки одежды и заканчивая розничной
                  продажей моделей в собственных магазинах сети и Онлайн,
                  что позволяет нам продавать хорошую качественную одежду
                  по минимальным ценам.
                </p>
              </div>
            </div>

            <div class="lk-client__style-seasons-description">
              <div class="lk-client__style-photo">
                <img class="lk-client__style-seasons-photo" src="/img/my-style/spring.jpg" alt="" />
              </div>

              <div>
                <p class="lk-client__paragraph">
                  Мода постоянно диктует нам свои требования и для
                  современной девушки, желающей идти в ногу со временем,
                  важно иметь возможность постоянно пополнять свой гардероб
                  стильной одеждой. Коллекционная часть ассортимент обновляется
                  в магазинах каждые две недели и отражает все модные тренды.
                </p>
                <p class="lk-client__paragraph">
                  Продолжением цветовых и трендовых решений коллекционной
                  части являются базовые модели, которые представлены во всех
                  отделах женской одежды внутри магазинов, а так же бестселлеры
                  прошлых сезонов, характеризующиеся умеренным дизайном и
                  невысокими ценами.
                </p>
              </div>
            </div>

            <div class="lk-client__style-seasons-description">
              <div class="lk-client__style-photo">
                <img src="/img/my-style/summer.jpg" alt="" class="lk-client__style-seasons-photo"  />
              </div>
              
              <div>
                <p class="lk-client__paragraph">
                  Мода постоянно диктует нам свои требования и для
                  современной девушк две недели и отражает все модные тренды.
                </p>
                <p class="lk-client__paragraph">
                  Продолжением цветовых и трендовых решений коллекционной
                  части являются базовые модели, которые представлены во всех
                  отделах женской одежды внутри магазинов, а так же бестселлеры
                  прошлых сезонов, характеризующиеся умеренным дизайном и
                  невысокими ценами.
                </p>
              </div>
            </div>

            <div class="lk-client__style-seasons-description">
              <div class="lk-client__style-photo">
                <img src="/img/my-style/autumn.jpg" alt="" class="lk-client__style-seasons-photo" />
              </div>

              <div>
                <p class="lk-client__paragraph">
                  Мода постоянно диктует нам свои требования и для
                  современной девушки, желающей идти в ногу со временем,
                  важно иметь возможность постоянно пополнять свой гардероб
                  стильной одеждой. Коллекционная часть ассортимент обновляется
                  в магазинах каждые две недели и отражает все модные тренды.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="lk-stylist__block">
        <h2 class="title-second">Тип фигуры</h2>
        <div class="lk-client__style">
          <div class="lk-client__style-photo">
            <img src="img/my-style/type-body-pear.jpg" alt=""/>
          </div>
          <div class="lk-client__style-seasons">
            <div class="lk-client__style-body-type">
              <h3 class="title-block">Груша</h3>
              <p class="lk-client__paragraph">Груша — тип фигуры, который среди современных
                женщин встречается нередко. Это такие дамы, у которых силуэт становится шире внизу, к бедрам. Плечи в
                этом случае по ширине бедрам уступают, а вот талия выделяется достаточно отчетливо, что визуально
                делает фигуру привлекательной и женственной. Подбирая одежду для данного типа строения тела, нужно
                помнить о том, что визуальные акценты следует сместить в верхнюю половину туловища, при этом бедра
                следует постараться по возможности скрыть.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="lk-stylist__block">
        <h2 class="title-second">Советы</h2>
        
        <div class="slider-tips">
          <div class="lk-client__style">
            <div class="lk-client__style-photo">
              <img src="img/my-style/tip1.jpg" alt=""/>
            </div>
            <div class="lk-client__style-seasons">
              <div class="lk-client__style-tips">
                <p class="lk-client__paragraph">Мешковатые изделия лучше не носить, так как они
                  откровенно портят фигуру, столь красивую от природы. Чаще всего она становится прямоугольником. На
                  бедрах акценты ставить не стоит. Подбирая топы и блузки для фигуры типа песочные часы, не нужно
                  забывать о балансе верха и низа тела.</p>
                <p class="lk-client__paragraph">Для того чтобы его поддержать, лучше брать такие
                  топы, у которых бретелек нет, где есть глубокое декольте. Чтобы привлечь внимание к талии, можно
                  рассмотреть прилегающие вещи, модели с запахом.</p>
                <p class="lk-client__paragraph">Чаще всего она становится прямоугольником. На
                  бедрах акценты ставить не стоит. Подбирая топы и блузки для фигуры типа песочные часы, не нужно
                  забывать о балансе верха и низа тела. Для того чтобы его поддержать, лучше брать такие топы, у
                  которых бретелек нет, где есть глубокое декольте. Чтобы привлечь внимание к талии, можно рассмотреть
                  прилегающие вещи, модели с запахом.</p>
              </div>
            </div>
          </div>
          
          <div class="lk-client__style">
            <div class="lk-client__style-photo">
              <img src="img/my-style/tip1.jpg" alt=""/>
            </div>
            <div class="lk-client__style-seasons">
              <div class="lk-client__style-tips">
                <p class="lk-client__paragraph">Мешковатые изделия лучше не носить, так как они
                  откровенно портят фигуру, столь красивую от природы. Чаще всего она становится прямоугольником. На
                  бедрах акценты ставить не стоит. Подбирая топы и блузки для фигуры типа песочные часы, не нужно
                  забывать о балансе верха и низа тела.</p>
                <p class="lk-client__paragraph">Для того чтобы его поддержать, лучше брать такие
                  топы, у которых бретелек нет, где есть глубокое декольте. Чтобы привлечь внимание к талии, можно
                  рассмотреть прилегающие вещи, модели с запахом.</p>
                <p class="lk-client__paragraph">Чаще всего она становится прямоугольником. На
                  бедрах акценты ставить не стоит. Подбирая топы и блузки для фигуры типа песочные часы, не нужно
                  забывать о балансе верха и низа тела. Для того чтобы его поддержать, лучше брать такие топы, у
                  которых бретелек нет, где есть глубокое декольте. Чтобы привлечь внимание к талии, можно рассмотреть
                  прилегающие вещи, модели с запахом.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="slider-tips__numbers">
          <span class="slider-tips__numbers-current"></span>
          <span>/</span>
          <span class="slider-tips__numbers-all"></span>
        </div>
      </div>

      <div class="lk-stylist__block">
        <h2 class="title-second">Фото до и после</h2>
        <div class="lk-client__style">
          <div class="lk-client__style-photo-before-after">
            <div class="photo__first">
              <img src="img/clients/4before.jpg" alt=""/>
            </div>
            <div class="photo__second">
              <img src="img/clients/4-1after.jpg" alt=""/>
            </div>
          </div>

          
          <div class="lk-client__style-description">
            <h3 class="title-block">Фото до и после от 20 сентября 2016</h3>
            <p class="lk-client__paragraph">Для того чтобы его поддержать, лучше брать такие топы, у которых бретелек нет, где есть глубокое декольте. Чтобы привлечь внимание к талии, можно рассмотреть прилегающие вещи, модели с запахом.</p>
          </div>
          
        </div>
      </div>
    </div>
  </section>
@endsection