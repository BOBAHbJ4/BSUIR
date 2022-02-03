<?php
require_once("assets/templates/top.php");
?>
<head>
    <link rel="stylesheet" href="assets/src/main.css">
    <script src="assets/src/slider.js"></script>
</head>
<!-- Slim figure -->
<section class="section-slim_figure">
    <div class="container">
        <div class="slim_figure-inner">
            <div class="slim_figure-inner__title">Стройная фигура</div>
            <div class="slim_figure-inner__subtitle"> это не только красота, но и здоровье. Однако многие,
                пытаясь достичь максимального эффекта, изнуряют себя сомнительными диетами, лишая организм необходимых
                полезных веществ. Питаясь правильно, можно сбросить лишний вес и улучшить общее самочувствие.
                Также мы можем предложить вам различные удобные для вас планы питания.
            </div>
            <button class="slim_figure-inner__button" type="button">Получить план
                <form name="form" action="/assets/src/mail.php" method="post" id="form_message">
                    <p>
                    <div class="titles">NAME*</div>
                    <input class="input" name="name" type="text"/> </p>
                    <p>
                    <div class="titles">e-mail*</div>
                    <input class="input" name="email" type="text"/> </p>
                    <label class="rad-label">
                        <input type="radio" class="rad-input" value="male" name="sex">
                        <div class="rad-design"></div>
                        <div class="rad-text">Male</div>
                    </label>
                    <label class="rad-label">
                        <input type="radio" class="rad-input" value="female" name="sex">
                        <div class="rad-design"></div>
                        <div class="rad-text">Female</div>
                    </label>
                    <div class="checkbox">
                        <input class="custom-checkbox" type="checkbox" id="plan" name="theme" value="plan">
                        <label for="plan">План питания</label>
                    </div>

                    <div class="checkbox">
                        <input class="custom-checkbox" type="checkbox" id="sport" name="theme" value="sport">
                        <label for="sport">Упражнения</label>
                    </div>

                    <div class="checkbox">
                        <input class="custom-checkbox" type="checkbox" id="combo" name="theme" value="combo">
                        <label for="combo">Комплекс</label>
                    </div>
                    <p> Subject
                        <select class="titles" name="subject">
                            <option value="plan pit">Вопрос по плану питания</option>
                            <option value="trainings">Вопрос по тренировкам</option>
                            <option value="combo plan">Вопрос по комплексному плану</option>
                            <option value="other">Другое</option>
                        </select>
                    </p>
                    <p>
                    <div class="titles">Message:</div>
                    <textarea name="message" cols="22" rows="3"/></textarea></p>
                    <p><input id="submit" value="Отправить" type="submit"/></p>
                </form>
            </button>
        </div>
        <img class="section-slim_figure__img" src="assets/images/start-screen.png" alt="scales">
    </div>
</section>
</div>
<!-- /Slim figure -->
<!-- About -->
<section class="section-about">
    <div class="container">
        <img class="section-about__img" src="assets/images/about_girl.jfif" alt="about_girl">
        <div class="about-inner">
            <div class="about-inner__title">Сервис для похудения</div>
            <div class="about-inner__subtitle">📉 На выбор программы для БЫСТРОЙ потери веса и для тех, кому нужна
                ПОЛНАЯ ТРАНСФОРМАЦИЯ<br>
                📆 Начать можно В ЛЮБОЙ ДЕНЬ и не нужно ждать конкретной даты старта! Выбирайте подходящую программу и
                действуйте СЕГОДНЯ или ЗАВТРА<br>
                🥗 Получайте индивидуальный план питания, исходя из ваших данных и активности уже на старте, выбирайте
                трёх, четырёх или пятиразовое питание <br>
            </div>
            <div class="about-inner__text">📲 Список продуктов, вкусные и полезные рецепты, статьи, напоминалки и
                подсказки, ВСЕ В ОДНОМ МЕСТЕ<br>
                🐆 Ежедневные отчеты по питанию и активности - важная часть программы и их заполнение теперь занимает
                всего ПАРУ МИНУТ, благодаря возможностям Телеграм<br>
                ⚡️ Ваши отчёты проверяются МОЛНИЕНОСНО и вы получаете всю необходимую информацию о вашем питании и
                активности в течение нескольких секунд<br>
            </div>
        </div>
    </div>
</section>
<!-- /About -->
<!-- Training -->
<section class="section-weight_loss">
    <div class="container">
        <div class="section-weight_loss__title">Выберите подходящий <br>
            вариант тренировки
        </div>
        <div class="slider-container">
            <button class="training-slider__btn-left btn"><img src="assets/icons/arrow-left.svg"
                                                               alt="arrow-left"></button>
            <div class="training-slider">
                <div class="slider-track">
                    <div class="slider-item">
                        <img src="assets/images/cardio.jfif" id="1" alt="cardio" class="slider-item__img">
                        <div class="slider-item__nickname" id="item-1">Кардио</div>
                        <button class="slider-item__btn" data-pic-id="1" type="button"
                                data-content="text for cardio...">Подробнее
                        </button>
                    </div>
                    <div class="slider-item">
                        <img src="assets/images/strenght.jpg" id="2" alt="strenght" class="slider-item__img">
                        <div class="slider-item__nickname" id="item-2">Силовая</div>
                        <button class="slider-item__btn" data-pic-id="2" type="button"
                                data-content="text for strenght...">Подробнее
                        </button>
                    </div>
                    <div class="slider-item">
                        <img src="assets/images/combo.jfif" id="3" alt="combo" class="slider-item__img">
                        <div class="slider-item__nickname" id="item-3">Комбинированная</div>
                        <button class="slider-item__btn" data-pic-id="3" type="button"
                                data-content="text for combo...">Подробнее
                        </button>
                    </div>
                    <div class="slider-item">
                        <img src="assets/images/respiratory.jpg" id="4" alt="respiratory" class="slider-item__img">
                        <div class="slider-item__nickname" id="item-4">Дыхательная</div>
                        <button class="slider-item__btn" data-pic-id="4" type="button"
                                data-content="text for respiratory...">Подробнее
                        </button>
                    </div>
                    <div class="slider-item">
                        <img src="assets/images/yoga.png" id="5" alt="Yoga" class="slider-item__img">
                        <div class="slider-item__nickname" id="item-5">Йога</div>
                        <button class="slider-item__btn" data-pic-id="5" type="button"
                                data-content="text for Yoga...">Подробнее
                        </button>
                    </div>
                    <div class="slider-item">
                        <img src="assets/images/stretching.png" id="6" alt="Stretching" class="slider-item__img">
                        <div class="slider-item__nickname" id="item-6">Растяжка</div>
                        <button class="slider-item__btn" data-pic-id="6" type="button"
                                data-content="text for Stretching...">Подробнее
                        </button>
                    </div>
                    <div class="slider-item">
                        <img src="assets/images/pilates.png" id="7" alt="Pilates" class="slider-item__img">
                        <div class="slider-item__nickname" id="item-7">Пилатес</div>
                        <button class="slider-item__btn" data-pic-id="7" type="button"
                                data-content="text for Pilates...">Подробнее
                        </button>
                    </div>
                    <div class="slider-item">
                        <img src="assets/images/callanetics.png" id="8" alt="callanetics" class="slider-item__img">
                        <div class="slider-item__nickname" id="item-8">Калланетика</div>
                        <button class="slider-item__btn" data-pic-id="8" type="button"
                                data-content="text for callanetics...">Подробнее
                        </button>
                    </div>
                </div>
            </div>
            <button class="training-slider__btn-right btn"><img src="assets/icons/arrow-right.svg"
                                                                alt="arrow-right"></button>
        </div>
        <form action="training.php">
            <button class="section-weight_loss__btn">Все виды тренировок</button>
        </form>
    </div>
</section>
<!-- /Training -->
<!-- Than -->
<section class="section-than">
    <div class="container">
        <div class="section-than__title">На что обратить внимание</div>
        <div class="than-wrapper">
            <div class="than-wrapper__item">
                <img src="assets/icons/scales.svg" alt="scales" class="than-wrapper__img">
                <div class="than-wrapper__text">Взвешивание</div>
            </div>
            <div class="than-wrapper__item">
                <img src="assets/icons/plan.svg" alt="plan" class="than-wrapper__img">
                <div class="than-wrapper__text">План питания</div>
            </div>
            <div class="than-wrapper__item">
                <img src="assets/icons/measurements.svg" alt="measurements" class="than-wrapper__img">
                <div class="than-wrapper__text">Замеры</div>
            </div>
            <div class="than-wrapper__item">
                <img src="assets/icons/sport.svg" alt="sport" class="than-wrapper__img">
                <div class="than-wrapper__text">Тренировки</div>
            </div>
            <div class="than-wrapper__item">
                <img src="assets/icons/Fast_food.svg" alt="fast_food" class="than-wrapper__img">
                <div class="than-wrapper__text">Фаст-фуд</div>
            </div>
            <div class="than-wrapper__item">
                <img src="assets/icons/vitamins.svg" alt="Vitamins" class="than-wrapper__img">
                <div class="than-wrapper__text">Витамины</div>
            </div>
            <div class="than-wrapper__item">
                <img src="assets/icons/medicines.svg" alt="Medicines" class="than-wrapper__img">
                <div class="than-wrapper__text">Лекарства</div>
            </div>
        </div>
    </div>
</section>
<!-- /Than -->
<!-- In addition -->
<section class="section-addition">
    <div class="container">
        <img src="assets/images/diet_plan.jfif" alt="diet_plan" class="section-addition__img">
        <div class="addition-wrapper">
            <div class="addition-wrapper__title">Вы можете приобрести у нас план питания</div>
            <div class="addition-wrapper__subtitle">Название банка / ТИП банковского счёта</div>
            <a class="addition-card" href="">
                <img src="assets/icons/main-credit-card.svg" alt="card-icon" class="addition-card__icon">
                <div class="addition-card__number">8380 2880 8028 8791 7435</div>
            </a>
            <div class="addition-wrapper__text">Legal information and lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Maecenas a ipsum at libero sagittis dignissim sed ac diam. Praesent ultrices maximus tortor et
                vulputate. Interdum et malesuada fames ac ante ipsum primis in faucibus.
            </div>
        </div>
    </div>
</section>
<!-- /In addition -->
<?php
require_once("assets/templates/bottom.php");
?>