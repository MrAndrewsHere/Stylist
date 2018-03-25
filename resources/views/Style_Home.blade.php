<!DOCTYPE html>
<html lang="ru"></html>
<head>
    <meta charset="UTF-8"/>
    <title>Stylists</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/app.css"/>

</head>

<body>
<header class="header">
    <div class="container">
        <div class="header__wrap">
            <div class="header__name"><a class="logo" href="#">Stylists</a></div>
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item"> <a class="nav__link nav__link--profile nav__link--active" href="#">Профиль</a></li>
                    <li class="nav__item"> <a class="nav__link nav__link--services" href="#">Услуги</a></li>
                    <li class="nav__item"> <a class="nav__link nav__link--portfolio" href="#">Портфолио</a></li>
                    <li class="nav__item"> <a class="nav__link nav__link--records" href="#">Записи</a></li>
                </ul>
            </nav>
            <div class="header__user-panel">
                <input class="input input--search" type="text" placeholder="поиск по сайту"/>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </div>
        </div>
    </div>
</header>
<main class="main">
    <div class="container">
        <section class="profile">
            <h2 class="title-section">Денисова Анастасия — Визажист</h2>
            <div class="profile__content">
                <div class="profile__photo"><img class="profile__photo-img" src="img/no_avatar.jpg" alt=""/>
                    <input type="file"/>
                </div>
                <form class="profile__information">
                    <div class="profile__information-left">
                        <label>Имя</label><span class="required">*
                <div class="input__wrap">
                  <input class="input input--form" type="text" required="required" placeholder="{{Auth::user()->name}}}"/>
                </div></span>
                        <label>Фамилия
                            <div class="input__wrap">
                                <input class="input input--form" type="text"/>
                            </div>
                        </label>
                        <label>Телефон
                            <div class="input__wrap">
                                <input class="input input--form" type="number"/>
                            </div>
                        </label>
                        <input class="input input--submit input--submit-profile" type="submit" value="Сохранить"/>
                    </div>
                    <div class="profile__information-right">
                        <label>Должность
                            <div class="input__wrap">
                                <input class="input input--form" type="text"/>
                            </div>
                        </label>
                        <label>Категория
                            <div class="input__wrap">
                                <input class="input input--form" type="text"/>
                            </div>
                        </label>
                        <label>Электронная почта
                            <div class="input__wrap">
                                <input class="input input--form" type="email" placeholder="{{Auth::user()->email}}}"/>
                            </div>
                        </label>
                        <div class="input__wrap">
                            <input class="input input--reset input--reset-profile" type="reset" value="Очистить"/>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="services">
            <h2 class="title-section">Каталог услуг</h2>
            <form class="form-add-new">
                <select class="input input--form input--form-services">
                    <option>Категория</option>
                    <option>Парикмахерские услуги</option>
                    <option>Ногтевой сервис</option>
                    <option>Услуги визажиста</option>
                    <option>Массаж</option>
                </select>
                <input class="input input--form input--form-services" type="text" placeholder="Название"/>
                <select class="input input--form input--form-services">
                    <option>Длительность</option>
                    <option>15 минут</option>
                    <option>30 минут</option>
                    <option>45 минут</option>
                    <option>1 час</option>
                </select>
                <input class="input input--form input--form-services" type="number" min="0" placeholder="Цена, руб."/>
                <input class="input input--submit" type="submit" value="Добавить"/>
            </form>
            <table class="services__table">
                <tr>
                    <th class="services__table-row services__table-row--title">Название</th>
                    <th class="services__table-row services__table-row--title">Длительность</th>
                    <th class="services__table-row services__table-row--title">Стоимость</th>
                    <th class="services__table-row services__table-row--title"></th>
                </tr>
                <tr>
                    <td class="services__table-row">Французский маникюр</td>
                    <td class="services__table-row">30<span class="services__table-span">минут</span></td>
                    <td class="services__table-row">200<span class="services__table-span">руб.</span></td>
                    <td class="services__table-row btn">x</td>
                </tr>
                <tr>
                    <td class="services__table-row">Стрижка</td>
                    <td class="services__table-row">45<span class="services__table-span">минут</span></td>
                    <td class="services__table-row">500<span class="services__table-span">руб.</span></td>
                    <td class="services__table-row btn">x</td>
                </tr>
                <tr>
                    <td class="services__table-row">Массаж</td>
                    <td class="services__table-row">1<span class="services__table-span">час</span></td>
                    <td class="services__table-row">2500<span class="services__table-span">руб.</span></td>
                    <td class="services__table-row btn">x</td>
                </tr>
            </table>
        </section>
        <section class="portfolio">
            <h2 class="title-section">Портфолио</h2>
            <div class="portfolio__work">
                <div class="photo">
                    <div class="photo__first"><img class="photo__before" src="img/before1.png" alt=""/></div>
                    <div class="photo__second"><img class="photo__after" src="img/after1.png" alt=""/></div>
                </div>
                <div class="portfolio__content">
                    <div class="portfolio__title">Дата</div>
                    <div class="portfolio__description portfolio__description--date">22 сентября 2016</div>
                    <div class="portfolio__title">Цель клиента</div>
                    <div class="portfolio__description portfolio__description--goal">Сделать макияж перед фотосессией</div>
                    <div class="portfolio__title">Заказанные услуги</div>
                    <div class="portfolio__description portfolio__description--services">Макияж</div>
                    <div class="portfolio__title">Комментарии стилиста</div>
                    <div class="portfolio__description portfolio__description--comment-stylist">Очень понравилось работать в Викторией, надеюсь на дальнейшее сотрудничество</div>
                    <div class="portfolio__comment"><img class="portfolio__comment-photo" src="img/client1.jpg" alt=""/>
                        <div class="portfolio__comment-content">
                            <div class="portfolio__title">Виктория</div>
                            <div class="portfolio__description portfolio__description--comment-client">Настя — супер мастер!! Сделала из меня богиню на фотосессии Недавно пересматривала фото и вспоминала, какой чудесный день был тогда и как было все красиво!</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio__work">
                <div class="photo">
                    <div class="photo__first"><img class="photo__before" src="img/before2.jpg" alt=""/></div>
                    <div class="photo__second"><img class="photo__after" src="img/after2.jpg" alt=""/></div>
                </div>
                <div class="portfolio__content">
                    <div class="portfolio__title">Дата</div>
                    <div class="portfolio__description portfolio__description--date">15 октября 2016</div>
                    <div class="portfolio__title">Цель клиента</div>
                    <div class="portfolio__description portfolio__description--goal">Сделать прическу для выступления на сцене</div>
                    <div class="portfolio__title">Заказанные услуги</div>
                    <div class="portfolio__description portfolio__description--services">Прическа</div>
                    <div class="portfolio__title">Комментарии стилиста</div>
                    <div class="portfolio__description portfolio__description--comment-stylist">Очень понравилось работать в Викторией, надеюсь на дальнейшее сотрудничество</div>
                    <div class="portfolio__comment"><img class="portfolio__comment-photo" src="img/client2.jpg" alt=""/>
                        <div class="portfolio__comment-content">
                            <div class="portfolio__title">Екатерина</div>
                            <div class="portfolio__description portfolio__description--comment-client">Анастасия отличный стилист, и мои пожелания по стрижке учла и показала как можно сделать лучше. Замечательно получилось, лучше ожиданий, плюс куча рекомендаций по уходу и укладке.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="records">
            <h2 class="title-section">Записи</h2>
            <form class="form-add-new"><img class="form-add-new__img" src="img/client1.jpg" alt="клиентка"/><span class="form-add-new__name"><span class="form-add-new__last-name">Романова</span><span class="form-add-new__first-name">Виктория</span></span><span class="form-add-new__service">Ногтевой сервис</span><span class="form-add-new__info"><span class="form-add-new__date">22.12.2017</span><span class="form-add-new__time">12:00</span><span class="form-add-new__cost">800<span>руб.</span></span></span><span class="form-add-new__buttons">
            <input class="input input--accept" type="submit" value="Добавить"/>
            <input class="input input--decline" type="button" value="Отклонить"/>
            <input class="input input--submit" type="button" value="Другое время"/></span></form>
            <form class="form-add-new"><img class="form-add-new__img" src="img/client2.jpg" alt="клиентка"/><span class="form-add-new__name"><span class="form-add-new__last-name">Царева</span><span class="form-add-new__first-name">Екатерина</span></span><span class="form-add-new__service">Массаж</span><span class="form-add-new__info"><span class="form-add-new__date">25.12.2017</span><span class="form-add-new__time">18:00</span><span class="form-add-new__cost">2000<span>руб.</span></span></span><span class="form-add-new__buttons">
            <input class="input input--accept" type="submit" value="Добавить"/>
            <input class="input input--decline" type="button" value="Отклонить"/>
            <input class="input input--submit" type="button" value="Другое время"/></span></form>
            <form class="form-add-new"><img class="form-add-new__img" src="img/client3.jpg" alt="клиентка"/><span class="form-add-new__name"><span class="form-add-new__last-name">Лебедева</span><span class="form-add-new__first-name">Анастасия</span></span><span class="form-add-new__service">Прическа</span><span class="form-add-new__info"><span class="form-add-new__date">25.12.2017</span><span class="form-add-new__time">14:00</span><span class="form-add-new__cost">1200<span>руб.</span></span></span><span class="form-add-new__buttons">
            <input class="input input--accept" type="submit" value="Добавить"/>
            <input class="input input--decline" type="button" value="Отклонить"/>
            <input class="input input--submit" type="button" value="Другое время"/></span></form>
            <h3 class="title-section">Календарь</h3>
            <div class="calendar__wrap">
                <table class="calendar" id="calendar">
                    <thead>
                    <tr>
                        <td class="calendar__arrow-left"></td>
                        <td class="calendar__title" colspan="5"></td>
                        <td class="calendar__arrow-right"></td>
                    </tr>
                    <tr>
                        <td>Пн</td>
                        <td>Вт</td>
                        <td>Ср</td>
                        <td>Чт</td>
                        <td>Пт</td>
                        <td>Сб</td>
                        <td>Вс</td>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </section>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="js/main.js"></script>
<script src="js/app.js"></script>
</body>


