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
              <li class="link-change-content link-change-content--active">Зима</li>
              <li class="link-change-content">Весна</li>
              <li class="link-change-content">Лето</li>
              <li class="link-change-content">Осень</li>
            </ul>

            <div class="lk-client__style-seasons-description lk-client__style-seasons-description--active">
              <div class="lk-client__style-photo">
                <img class="lk-client__style-seasons-photo" src="/img/my-style/winter.jpg" alt="" />
              </div>

              <div>
                <p class="lk-client__paragraph">
                  Сильные и полные энергии — так можно охарактеризовать девушек этого типа внешности.
                  Они отличаются очень яркими чертами, особенно выразительные глаза всегда насыщенных
                  цветов: зеленые, серые, темно-синие, коричневые, коричнево-черные.
                </p>
                <p class="lk-client__paragraph">
                  Кожа может быть очень светлой, почти бледной либо бледная. Возможен только незначительный
                  загар. Но встречаются девушки и с оливковой кожей, которые очень легко и быстро загорают.
                  Для обладательницы типа Зима характерны средне- и темно-коричневые либо черные волосы.
                </p>
                <p class="lk-client__paragraph">
                  Девушка Зима — единственный тип, которой идеально подходит черный цвет. Поэтому смело
                  используйте его как повседневно, так и в виде вечерних нарядов. Для этого типа внешности
                  характерно преобладание чистых выразительных цветов. А это значит, что есть возможность
                  экспериментировать с кроем.
                </p>
              </div>
            </div>

            <div class="lk-client__style-seasons-description">
              <div class="lk-client__style-photo">
                <img class="lk-client__style-seasons-photo" src="/img/my-style/spring.jpg" alt="" />
              </div>

              <div>
                <p class="lk-client__paragraph">
                  Внешности обладательниц этого типа характерны следующие свойства: свежий натуральный
                  розовый цвет лица, кожа преимущественно светлая. Независимо от этого, девушки данного
                  типа могут загорать до прекрасного бронзового оттенка. Цвет волос чаще всего светлый,
                  золотой либо медовый блонд. Глаза в основном насыщенно голубые, ясно зеленые, оливковые
                  либо бирюзовые.
                </p>
                <p class="lk-client__paragraph">
                  Деликатность, безмятежность и сияние — этими словами можно охарактеризовать девушек
                  данного типа. Для них лучше всего подходят наряды из натуральных материалов одного
                  тона, неброские с простым кроем.
                </p>
                <p class="lk-client__paragraph">
                  Девушки с подобной внешностью идеально будут смотреться в радостных, теплых тонах
                  ассоциирующимися с весной и пробуждением. Если вышеупомянутое описание подходит вам,
                  тогда незамедлительно делаем себе заметку и определяемся с цветом одежды.
                </p>
              </div>
            </div>

            <div class="lk-client__style-seasons-description">
              <div class="lk-client__style-photo">
                <img src="/img/my-style/summer.jpg" alt="" class="lk-client__style-seasons-photo"  />
              </div>
              
              <div>
                <p class="lk-client__paragraph">
                  Понимание цветовых особенностей своей внешности поможет наилучшим образом подчеркнуть
                  все достоинства колорита. В это время года цвета выгорают, становятся более тусклыми
                  и припыленными. Оттенок кожи тех, чью внешность можно отнести к данному типу, может
                  быть либо «фарфоровым» - очень светлым и быстро обгорающим на солнце, либо бежево-розовым,
                  либо иметь оливковый подтон, на который загар ложится хорошо и равномерно.
                </p>
                <p class="lk-client__paragraph">
                  Оттенки волос тоже достаточно разнообразны – от светло-соломенного до темно-русого.
                  Объединяет их непременный холодный подтон, то есть, никакой желтизны и намека на рыжинку.
                  Даже выгорая на солнце и приобретая светлые блики, волосы все равно остаются скорее
                  холодными или нейтральными, чем теплыми.
                </p>
                <p class="lk-client__paragraph">
                  Глаза – серо-голубые, голубые, серо-зеленые или зеленые, или даже ореховые, светло-коричневые,
                  но всегда обычно неяркие, будто затуманенные дымкой. Белки имеют молочный оттенок,
                  радужка – серая или коричневая. Подчеркивается глубина глаз обрамлением из русых бровей и ресниц.
                </p>
              </div>
            </div>

            <div class="lk-client__style-seasons-description">
              <div class="lk-client__style-photo">
                <img src="/img/my-style/autumn.jpg" alt="" class="lk-client__style-seasons-photo" />
              </div>

              <div>
                <p class="lk-client__paragraph">
                  Теплый, золотистый блеск — отличительный знак у осеннего типа внешности. Они ассоциируются с
                  комфортом и уютом. Осенних красавиц можно увидеть на рекламных афишах, в теплом одеяле и свитере,
                  держащих кружку горячего кофе либо радующихся желтым опадающим листьям и красной рябине, передавая
                  окружающим ощущение теплоты и домашнего комфорта.
                </p>
                <p class="lk-client__paragraph">
                  Девушки типа Осень идеально смотрятся в одежде как простого, так и сложного кроя, однотонных
                  и с рисунками. Подойдут ткани более плотной, теплой, осенней фактуры.
                </p>
                <p class="lk-client__paragraph">
                  Кожа у Осени очень светлая, иногда с легким бронзовым либо теплым, желто золотым оттенком,
                  зачастую с веснушками. На солнце она реагирует значительным покраснением, поэтому осенние
                  девушки частенько избегают сильного загара.
                </p>
                <p class="lk-client__paragraph">
                  Что касается волос, то Осень всегда предпочитает следующие тона: темный блонд,
                  средний- и темно-коричневый с медным блеском, переходящий в интенсивный красный.
                  У девушек данного типа глаза чаще всего в теплом оливковом цвете либо зелено-коричневые.
                  Обладательницы этого типа часто имеют золотой либо зеленоватый ободок на радужке. Осенняя
                  гамма сочетает в себе теплые, насыщенные цвета земли
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