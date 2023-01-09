@extends('layouts.base')
@section('content')
    <head>
        <link rel="stylesheet" href="assets/src/training.css">
    </head>
    <!-- Training -->
    <section class="section-training">
        <div class="container">
            <div class="section-training__title">Тренировки для снижения<br/>
                веса и не только
            </div>
            <div class="training-slider">
                <div class="slider-item">
                    <img src="assets/images/cardio.jfif" id="1" alt="CARDIO" class="slider-item__img">
                    <div class="slider-item__nickname" id="item-1">Кардио</div>
                    <button class="slider-item__btn" data-pic-id="1" type="button"
                            data-content='text for'>Подробнее
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
                    <img src="assets/images/respiratory.jpg" id="4" alt="Respiratory" class="slider-item__img">
                    <div class="slider-item__nickname" id="item-4">Дыхательная</div>
                    <button class="slider-item__btn" data-pic-id="4" type="button"
                            data-content="text for Respiratory...">Подробнее
                    </button>
                </div>
                <div class="slider-item">
                    <img src="assets/images/yoga.png" id="5" alt="Yoga" class="slider-item__img">
                    <div class="slider-item__nickname" id="item-5">Йога</div>
                    <button class="slider-item__btn" data-pic-id="5" type="button"
                            data-content="text for Йога...">Подробнее
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
            <!-- <div class="slider-buttons">
                <button class="double-prev btn disable" type="button" disabled>&lt&lt</button>
                <button class="prev btn disable" type="button" disabled>&lt</button>
                <button class="page btn" type="button">1</button>
                <button class="next btn" type="button">&gt</button>
                <button class="double-next btn" type="button">&gt&gt</button>
            </div>-->
        </div>
    </section>
    <!-- /Training -->
@endsection
