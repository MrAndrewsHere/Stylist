@extends('layouts.layout')

@section('title','Стилисты отвечают')

@section ('content')
  <section class="section section__home">
    <h1 class="section__title">Стилисты отвечают</h1>
    <div class="ask-question">
      <div class="container">
        <div class="ask-question__preview ask-question__preview__wrapper">
          <div class="ask-question__preview-text"> есть вопрос к нашим стилистам вы можете задать его здесь и получить
            развернутый ответ
          </div>
          <input class="btn btn--action" type="submit" value="Задать вопрос"/>
        </div>
        <div class="ask-question__quest">
          <div class="ask-question__quest-icon">?</div>
          <div class="ask-question__quest-block"><a class="ask-question__quest-block-title" href="#">Добрый день!
              Подскажите, что посоветуете одевать при широких плечах и прямой фигуре, еще и маленьком росте!</a>
            <div class="ask-question__quest-block-text">Виктория, если при этом у вас изящные бедра и ноги, то есть
              несколько вариантов. Во-первых, визуально усугубить перевернутый треугольник, то есть сместить акцент на
              плечи, например, надев жакет с гиперболизированными плечами. За счет оптической иллюзии, создаться
              впечатление, что широкие плечи - заслуга жакета, а не ваши личные физически параметры. Более того,
              сегодняшняя мода на андрогинность предполагает, что плечи шире бедер (вспомните подиумных моделей). А
              еще смещение акцента (плечи) ближе к лицу позволит визуально вытянуть рост. Если вас больше прельщают
              женственные формы, то я бы посоветовала подчеркнуть талию и увеличить бедра за счет юбки-колокола,
              которая держит форму (плотные ткани, кожа и тд). То есть за счет той же иллюзии теперь вы расширите
              бедра и подчеркнете талию. А чтобы сделать ее еще более выраженной, для верха вы можете использовать
              треугольный вырез, создав иллюзию "острого угла". В любом случае, чтобы увеличить рост, стоит выбирать
              схожие цвета для верха и низа, чтобы не резать фигуру, а, наоборот, визуально ее вытягивать.
            </div>
          </div>
        </div>
        <div class="ask-question__quest">
          <div class="ask-question__quest-icon">?</div>
          <div class="ask-question__quest-block"><a class="ask-question__quest-block-title" href="#">здравствуйте!хочется
              узнать,что весной можно одеть с высокими сапогами(до колен),коричневого цвета,без каблука?тип фигуры
              прямоугольный. Работаю учителем,хочется и на работу что то одеть с ними,и после работы) заранее
              спасибо</a>
            <div class="ask-question__quest-block-text">Альбина, если Вам на работе позволительно надевать
              классические джинсы (без всяких излишеств, с нашивными карманами, без так называемых цветовых высолов и
              потертостей), а именно правильного синего или голубого цвета, то можете попробовать носить такие джинсы
              с этими сапогами, легкой блузой, поддетой под трикотаж или шерстяной кардиган. Сюда также можно добавить
              аккуратный кулон (которые вновь становятся актуальными) или шелковый платок повязать на шею. Получится
              сдержанный профессиональный образ, который при этом не создает дистанции с вашими учениками, но и не
              нарушает субординацию. Или купить хороший блейзер (как часто представлено в Massimo Dutti) и надевать
              под него топ.
            </div>
          </div>
        </div>
        <div class="ask-question__quest">
          <div class="ask-question__quest-icon">?</div>
          <div class="ask-question__quest-block"><a class="ask-question__quest-block-title" href="#">Здравствуйте! А
              под юбкой-карандаш понимается только зауженная юбка?</a>
            <div class="ask-question__quest-block-text">Лидия, добрый день! Вообще, да. Юбка-карандаш в классическом
              понимании обладает определенным силуэтом: нормальная посадка на талии, чуть ниже колена и зауженная.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
