<?php
require_once("assets/templates/top.php");
?>
<head>
    <link rel="stylesheet" href="assets/src/products.css">
</head>
<!-- products -->
<section class="section-products">
    <div class="container">
        <div class="section-products__title">Продукты для<br/>
             приятного похудения</div>
        <div class="products-slider">
            <div class="slider-item">
                <img src="assets/images/fructs.png" id="1" alt="fructs" class="slider-item__img">
                <div class="slider-item__nickname" id="item-1">Фрукты</div>
                <button class="slider-item__btn" data-pic-id="1" type="button"
                            data-content="text for fructs...">Подробнее</button>
            </div>
            <div class="slider-item">
                <img src="assets/images/vegetables.jfif" id="2" alt="vegetables" class="slider-item__img">
                <div class="slider-item__nickname" id="item-2">Овощи</div>
                <button class="slider-item__btn" data-pic-id="2" type="button"
                            data-content="text for vegetables...">Подробнее</button>
            </div>
            <div class="slider-item">
                <img src="assets/images/proteins.jpg" id="3" alt="proteins" class="slider-item__img">
                <div class="slider-item__nickname" id="item-3">Белки</div>
                <button class="slider-item__btn" data-pic-id="3" type="button"
                            data-content="text for proteins...">Подробнее</button>
            </div>
            <div class="slider-item">
                <img src="assets/images/fats.jfif" id="4" alt="fats" class="slider-item__img">
                <div class="slider-item__nickname" id="item-4">Жиры</div>
                <button class="slider-item__btn" data-pic-id="4" type="button"
                            data-content="text for fats...">Подробнее</button>
            </div>
            <div class="slider-item">
                <img src="assets/images/carbohydrates.jfif" id="5" alt="carbohydrates" class="slider-item__img">
                <div class="slider-item__nickname" id="item-5">Углеводы</div>
                <button class="slider-item__btn" data-pic-id="5" type="button"
					data-content="text for carbohydrates...">Подробнее</button>
            </div>
            <div class="slider-item">
                <img src="assets/images/crisp_bread.png" id="6" alt="bread crisp" class="slider-item__img">
                <div class="slider-item__nickname" id="item-6">Хлебцы</div>
                <button class="slider-item__btn" data-pic-id="6" type="button"
					data-content="text for bread crisp...">Подробнее</button>
            </div>
            <div class="slider-item">
                <img src="assets/images/sugar_substitutes.jpg" id="7" alt="Sugar substitutes" class="slider-item__img">
                <div class="slider-item__nickname" id="item-7">Заменители сахара</div>
                <button class="slider-item__btn" data-pic-id="7" type="button"
                            data-content="text for Sugar substitutes...">Подробнее</button>
            </div>
            <div class="slider-item">
                <img src="assets/images/jams.png" id="8" alt="jams" class="slider-item__img">
                <div class="slider-item__nickname" id="item-8">Джемы</div>
                <button class="slider-item__btn" data-pic-id="8" type="button"
                            data-content="text for jams...">Подробнее</button>
            </div>
        </div>
        <div class="slider-buttons">
            <button class="double-prev btn disable" type="button" disabled>&lt&lt</button>
            <button class="prev btn disable" type="button" disabled>&lt</button>
            <button class="page btn" type="button">1</button>
            <button class="next btn" type="button">&gt</button>
            <button class="double-next btn" type="button">&gt&gt</button>
        </div>
    </div>
</section>
<!-- /products -->
<?php
require_once("assets/templates/bottom.php");
?>
