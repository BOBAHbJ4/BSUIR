@extends('layouts.base')
@section('content')
    <head>
        <link rel="stylesheet" href="assets/src/recipes.css">
    </head>
    <!-- Recipes -->
    <section class="section-training">
        <div class="container">
            <div class="section-training__title">Рецепты блюд<br/>
                для приятного похудения
            </div>
            <div class="training-slider">
                <div class="slider-item">
                    <img src="assets/images/first_dishes.jpg" id="1" alt="first dishes" class="slider-item__img">
                    <div class="slider-item__nickname" id="item-1">Первые блюда</div>
                    <button class="slider-item__btn" data-pic-id="1" type="button"
                            data-content="text for first dishes...">Подробнее
                    </button>
                </div>
                <div class="slider-item">
                    <img src="assets/images/second_dishes.jpg" id="2" alt="second dishes" class="slider-item__img">
                    <div class="slider-item__nickname" id="item-2">Вторые блюда</div>
                    <button class="slider-item__btn" data-pic-id="2" type="button"
                            data-content="text for second dishes...">Подробнее
                    </button>
                </div>
                <div class="slider-item">
                    <img src="assets/images/hot_dishes.jpg" id="3" alt="hot dishes" class="slider-item__img">
                    <div class="slider-item__nickname" id="item-3">Горячие блюда</div>
                    <button class="slider-item__btn" data-pic-id="3" type="button"
                            data-content="text for hot dishes...">Подробнее
                    </button>
                </div>
                <div class="slider-item">
                    <img src="assets/images/side_dishes.jpg" id="4" alt="side dishes" class="slider-item__img">
                    <div class="slider-item__nickname" id="item-4">Гарниры</div>
                    <button class="slider-item__btn" data-pic-id="4" type="button"
                            data-content="text for side dishes...">Подробнее
                    </button>
                </div>
                <div class="slider-item">
                    <img src="assets/images/salads.jpg" id="5" alt="salads" class="slider-item__img">
                    <div class="slider-item__nickname" id="item-5">Салаты</div>
                    <button class="slider-item__btn" data-pic-id="5" type="button"
                            data-content="text for salads...">Подробнее
                    </button>
                </div>
                <div class="slider-item">
                    <img src="assets/images/snacks.jpg" id="6" alt="snacks" class="slider-item__img">
                    <div class="slider-item__nickname" id="item-6">Закуски</div>
                    <button class="slider-item__btn" data-pic-id="6" type="button"
                            data-content="text for snacks...">
                        Подробнее
                    </button>
                </div>
                <div class="slider-item">
                    <img src="assets/images/Desserts_without_baking.jpg" id="7" alt="Desserts_without_baking"
                         class="slider-item__img">
                    <div class="slider-item__nickname" id="item-7">Десерты без выпекания</div>
                    <button class="slider-item__btn" data-pic-id="7" type="button"
                            data-content="text for Desserts without baking...">Подробнее
                    </button>
                </div>
                <div class="slider-item">
                    <img src="assets/images/Desserts_with_baking.jpg" id="8" alt="Desserts with baking"
                         class="slider-item__img">
                    <div class="slider-item__nickname" id="item-8">Десерты с выпеканием</div>
                    <button class="slider-item__btn" data-pic-id="8" type="button"
                            data-content="text for Desserts with baking...">Подробнее
                    </button>
                </div>
            </div>
            <!-- <div class="slider-buttons">
                <button class="double-prev btn disable" type="button" disabled>&lt&lt</button>
                <button class="prev btn disable" type="button" disabled>&lt</button>
                <button class="page btn" type="button">1</button>
                <button class="next btn" type="button">&gt</button>
                <button class="double-next btn" type="button">&gt&gt</button>
            </div> -->
        </div>
    </section>
    <!-- /Recipes -->
@endsection
