<?php
require_once("assets/templates/top.php");
?>
<head>
    <link rel="stylesheet" href="assets/src/diets.css">
</head>
<!-- Diets -->
<section class="section-diets">
    <div class="container">
        <div class="section-diets__title">Диеты для<br/>
              приятного похудения</div>
        <div class="diets-slider">
            <div class="slider-item">
                <img src="assets/images/proper_nutrition.jpg" id="7" alt="Proper nutrition" class="slider-item__img">
                <div class="slider-item__nickname" id="item-7">Правильное питание</div>
                <button class="slider-item__btn" data-pic-id="7" type="button"
                            data-content="text for Proper nutrition...">Подробнее</button>
            </div>
            <div class="slider-item">
                <img src="assets/images/PFC.jpg" id="1" alt="PFC diet" class="slider-item__img">
                <div class="slider-item__nickname" id="item-1">БЖУ диета</div>
                <button class="slider-item__btn" data-pic-id="1" type="button"
				data-content="text for PFC diet...">Подробнее
				</button>
            </div>
            <div class="slider-item">
                <img src="assets/images/keto.jpg" id="2" alt="Keto Diet" class="slider-item__img">
                <div class="slider-item__nickname" id="item-2">Кето диета</div>
                <button class="slider-item__btn" data-pic-id="2" type="button"
                            data-content="text for Keto Diet...">Подробнее</button>
            </div>
            <div class="slider-item">
                <img src="../../assets/images/protein.jpg" id="3" alt="Protein diet" class="slider-item__img">
                <div class="slider-item__nickname" id="item-3">Белковая диета</div>
                <button class="slider-item__btn" data-pic-id="3" type="button"
                            data-content="text for Protein diet...">Подробнее</button>
            </div>
            <div class="slider-item">
                <img src="assets/images/kremlin.jpg" id="4" alt="The Kremlin Diet" class="slider-item__img">
                <div class="slider-item__nickname" id="item-4">Кремлевская диета</div>
                <button class="slider-item__btn" data-pic-id="4" type="button"
                            data-content="text for The Kremlin Diet...">Подробнее</button>
            </div>
            <div class="slider-item">
                <img src="assets/images/dukan.jpg" id="5" alt="The Dukan Diet" class="slider-item__img">
                <div class="slider-item__nickname" id="item-5">Диета Дюкана</div>
                <button class="slider-item__btn" data-pic-id="5" type="button"
				data-content="text for The Dukan Diet...">Подробнее</button>
            </div>
            <div class="slider-item">
                <img src="assets/images/Separate_meals.jpg" id="6" alt="Separate meals" class="slider-item__img">
                <div class="slider-item__nickname" id="item-6">Раздельное питание</div>
                <button class="slider-item__btn" data-pic-id="6" type="button"
				data-content="text for Separate meals...">Подробнее</button>
            </div>
            <div class="slider-item">
                <img src="assets/images/сounting_calories.png" id="8" alt="Counting calories" class="slider-item__img">
                <div class="slider-item__nickname" id="item-8">Подсчёт калорий</div>
                <button class="slider-item__btn" data-pic-id="8" type="button"
                            data-content="text for Counting calories...">Подробнее</button>
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
<!-- /Diets -->
<?php
require_once("assets/templates/bottom.php");
?>