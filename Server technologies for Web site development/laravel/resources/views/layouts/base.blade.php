<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <title>health</title>
    <link rel="stylesheet" src="assets/src/main.css">

    <script src="assets/src/jquery.js"></script>
    <script src="assets/src/main.js"></script>
    <script src="assets/src/script.js"></script>
</head>

<body>
<!-- Header -->
<div class="wrapper">
    <header class="section-header">
        <div class="container">
            <form action="{{asset('/')}}">
                <button class="logo">
                    <h1 class="logo__title">Правильное Питание</h1>
                    <div class="logo__subtitle">Рационы питания и меню на неделю</div>
                </button>
            </form>
            <nav class="nav-wrapper">
                <div class="hamburger-menu">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                </div>
                <div class="nav-list">
                    <a class="nav-link" href="{{asset('/')}}"><img src="assets/icons/home.svg"><span
                            class="icon">Главная</span></a>
                    <a class="nav-link" href="{{asset('/products')}}"><img src="assets/icons/products.svg"><span
                            class="icon">Продукты</span></a>
                    <a class="nav-link" href="{{asset('/recipes')}}"><img src="assets/icons/receipts.svg"><span
                            class="icon">Рецепты</span></a>
                    <a class="nav-link" href="{{asset('/diets')}}"><img src="assets/icons/diets.svg"><span
                            class="icon">Диеты</span></a>
                    <a class="nav-link" href="{{asset('/trainings')}}"><img src="assets/icons/trainings.svg"><span
                                class="icon">Тренировки</span></a>
                    <a class="nav-link" href="{{asset('/review')}}"><img src="assets/icons/finger_good.svg"><span
                                class="icon">Отзывы</span></a>
                </div>
            </nav>
        </div>
    </header>
    <!-- /Header -->
<main class="main">
    @yield('content')
</main>
    <!-- Footer -->
    <footer class="section-footer">
        <div class="container">
            <div class="info">
                <div class="contact-info">
                    <div class="contact-info__title">Вопросы и предложения</div>
                    <a href="mailto:spysystems.87@gmail.com" target="_blank" class="email-container footer-hover">
                        <img class="email-container__icon" src="../../assets/icons/footer-mail.svg" alt="mail-icon">
                        <div class="email-container__email">proper_nutrition@email.ru</div>
                    </a>
                    <a href="tel:+13-674-567-75-54" class="telephone-container footer-hover">
                        <img class="telephone-container__icon" src="../../assets/icons/footer-phone.svg" alt="phone-icon">
                        <div class="telephone-container__telephone">+375 29 123 45 67</div>
                    </a>
                </div>
                <div class="location">
                    <div class="location__title">Офис находится по адресу</div>
                    <a href="https://www.google.com/maps/place/%D1%83%D0%BB%D0%B8%D1%86%D0%B0+%D0%9B%D0%B5%D0%BD%D0%B8%D0%BD%D0%B0+23,+%D0%9C%D0%B8%D0%BD%D1%81%D0%BA/@53.8963387,27.5625308,17z/data=!3m1!4b1!4m5!3m4!1s0x46dbcfc443a9bba7:0xb20c1bd1bab93e1d!8m2!3d53.8963356!4d27.5647195"
                       target="_blank" class="location-by footer-hover">
                        <img class="location-by__icon" src="../../assets/icons/footer-location.svg" alt="location-icon">
                        <div class="location-by__street">Республика Беларусь, <br>г. Минск, ул. Ленина 23</div>
                    </a>
                </div>
            </div>
            <img src="../../assets/images/footer_img.png" alt="footer_img" class="section-footer__img">
        </div>
    </footer>
    <!-- /Footer -->
    <script src="../../assets/src/script.js"></script>
</body>
</html>
