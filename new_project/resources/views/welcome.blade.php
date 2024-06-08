<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Магазин картин</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</head>
<body id="app">
    <header>
        <div class="logo">
            <img src="{{asset('images/logo.png')}}" alt="">
        </div>
        <div class="nav">
            <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
            <label for="burger-checkbox" class="burger"></label>    
            <ul class="menu-list">
                <li><a href="#">Репродукция</a></li>
                <li><a href="#">Новинки</a></li>
                <li><a href="#">О нас</a></li>
            </ul>
        </div>
        <div class="cart">
            <a href="#"><img src="{{asset('images/cart.png')}}" alt=""></a>
        </div>
    </header>
    <div class="section-1">
        <div class="photo">
            <img src="{{asset('images/bird.png')}}" alt="главное изображение">
        </div>
        <div class="anounce">
            <h1>Реплики картин от <span>Ink. House</span></h1>
            <p>Высокое качество отрисовки на плотной бумаге или льняном холсте. Редкие произведения, доступные цены.</p>
            <div class="btn-header">Продукция</div>
        </div>
    </div>
    <div class="reproduction">
        <div class="reproduction__header">
            <h3>Репродукция</h3>
            <ul class="category">
                <li class="active">Франция</li>
                <li>Германия</li>
                <li>Англия</li>
            </ul>
        </div>
        <div class="reproduction__content">
            <div class="item">
                <div class="photo">
                    <img src="{{asset('images/3004b7d8a3c0e2de1caa8fd5732848be.jpg')}}" alt="">
                </div>
                <p class="author">Марсель Руссо</p>
                <p class="title">Охота Амура</p>
                <p class="materials">Холст, масло (50х80)</p>
                <p class="price">14 500 руб</p>
                <div class="btn-cart">В корзину</div>
            </div>
            <div class="item">
                <div class="photo">
                    <img src="{{asset('images/ab708c86c2084b45ede2e5b47f32f0ae.jpg')}}" alt="">
                </div>
                <p class="author">Марсель Руссо</p>
                <p class="title">Охота Амура</p>
                <p class="materials">Холст, масло (50х80)</p>
                <p class="price">14 500 руб</p>
                <div class="btn-cart">В корзину</div>
            </div>
            <div class="item">
                <div class="photo">
                    <img src="{{asset('images/2bf109bb1a75d2ec01ef08204231eeaa.jpg')}}" alt="">
                </div>
                <p class="author">Марсель Руссо</p>
                <p class="title">Охота Амура</p>
                <p class="materials">Холст, масло (50х80)</p>
                <p class="price">14 500 руб</p>
                <div class="btn-cart">В корзину</div>
            </div>
            <div class="item">
                <div class="photo">
                    <img src="{{asset('images/3004b7d8a3c0e2de1caa8fd5732848be.jpg')}}" alt="">
                </div>
                <p class="author">Марсель Руссо</p>
                <p class="title">Охота Амура</p>
                <p class="materials">Холст, масло (50х80)</p>
                <p class="price">14 500 руб</p>
                <div class="btn-cart">В корзину</div>
            </div>
            <div class="item">
                <div class="photo">
                    <img src="{{asset('images/ab708c86c2084b45ede2e5b47f32f0ae.jpg')}}" alt="">
                </div>
                <p class="author">Марсель Руссо</p>
                <p class="title">Охота Амура</p>
                <p class="materials">Холст, масло (50х80)</p>
                <p class="price">14 500 руб</p>
                <div class="btn-cart">В корзину</div>
            </div>
            <div class="item">
                <div class="photo">
                    <img src="{{asset('images/2bf109bb1a75d2ec01ef08204231eeaa.jpg')}}" alt="">
                </div>
                <p class="author">Марсель Руссо</p>
                <p class="title">Охота Амура</p>
                <p class="materials">Холст, масло (50х80)</p>
                <p class="price">14 500 руб</p>
                <div class="btn-cart">В корзину</div>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="news__container">
            <div class="news__title">
                <img src="{{asset('images/star.png')}}" alt="">
                <h2>Новая коллекция французских авторов</h2>
            </div>
            <div class="news__content">
                <p>
                    Сложно сказать, почему акционеры крупнейших компаний призывают нас к новым свершениям, которые, в свою очередь, должны быть заблокированы в рамках своих собственных рациональных ограничений.
                </p>
                <p>
                    Принимая во внимание показатели успешности, граница обучения кадров предопределяет высокую востребованность направлений прогрессивного развития.
                </p>
            </div>
            <div class="btn-more">Ознакомиться</div>    
        </div>
    </div>
    <div class="team">
        <div class="photo">
            <img src="{{asset('images/68436d155a37e51396a89fba1db5db07.png')}}" alt="">
        </div>
        <div class="members">
            <h3>Наша команда</h3>
            <p>Значимость этих проблем настолько очевидна, что базовый вектор развития позволяет оценить значение экспериментов, поражающих по своей масштабности и грандиозности. Мы вынуждены отталкиваться от того, что консультация с широким активом.</p>
            <ul>
                <li>
                    <a href="#">
                        <img src="{{asset('images/user-1.png')}}" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('images/user-2.png')}}" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('images/user-3.png')}}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <footer>
        <div class="company_info">
            <div class="logo"></div>
            <div class="contacts">
                <h4>+7 (999) 543-54-54</h4>
                <h5>Мастерская</h5>    
            </div>
        </div>
        <div class="footer__navs">
            <div class="nav">
                <div class="title">Репродукции</div>
                <ul>
                    <li>
                        <a href="#">Франция</a>
                    </li>
                    <li>
                        <a href="#">Германия</a>
                    </li>
                    <li>
                        <a href="#">Англия</a>
                    </li>
                </ul>
            </div>
            <div class="nav">
                <div class="title">Новинки</div>
                <ul>
                    <li>
                        <a href="#">2021</a>
                    </li>
                    <li>
                        <a href="#">2020</a>
                    </li>
                </ul>
            </div>
            <div class="nav">
                <div class="title">О нас</div>
                <ul>
                    <li>
                        <a href="#">Художники</a>
                    </li>
                    <li>
                        <a href="#">Менеджеры</a>
                    </li>
                </ul>
            </div>
            <div class="social">
                <ul>
                    <li>
                        <a href="#"><img src="{{asset('images/facebook.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('images/instagram.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('images/youtube.png')}}" alt=""></a>
                    </li>
                </ul>
                <h6>Ink. House &#174;</h6>
                <h6>All rights reserved</h6>
            </div>
        </div>
    </footer>
</body>
</html>