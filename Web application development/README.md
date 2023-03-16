# Web application development.
> Basic information about Web applications, Web services. Architecture of Web applications of Web services. Designing Web applications. Design of site management systems. Database design for Web applications and Web services. Features of writing Web application code. Introduction to the XML language, the basic mechanisms of the language. The structure and content of the XML document. Namespace. XSL, XSLT as a means to represent and transform data in XML format.Fundamentals of security in the development of Web sites. Features of the use of frameworks in the development of site management systems.

[OLD PROJECT](https://bobahbj4.github.io/BSUIR/Web%20Page%20Layout/Health/Index.html)
_____________________

# Технологии 
**JS, PHP, CSS**

# Информация по установке
- git clone https://github.com/BOBAHbJ4/BSUIR/tree/main/Web%20Page%20Layout/Health

# Autors
**MincevichVV**

![Illustration for the project](https://github.com/BOBAHbJ4/BSUIR/blob/main/Web%20application%20development/view.gif)
________________
#### PHP code example (top template)
```php
<?php
require_once("assets/config/config.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <title>health</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

    <script src="assets/src/jquery.js"></script>
    <script src="assets/src/main.js"></script>
    <script src="assets/src/script.js"></script>
</head>

<body>
<!-- Header -->
<div class="wrapper">
    <header class="section-header">
        <div class="container">
            <form action="Index.php">
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
                    <a class="nav-link" href="Index.php"><img src="assets/icons/home.svg"><span
                                class="icon">Главная</span></a>
                    <a class="nav-link" href="products.php"><img src="assets/icons/products.svg"><span
                                class="icon">Продукты</span></a>
                    <a class="nav-link" href="recipes.php"><img src="assets/icons/receipts.svg"><span
                                class="icon">Рецепты</span></a>
                    <a class="nav-link" href="diets.php"><img src="assets/icons/diets.svg"><span
                                class="icon">Диеты</span></a>
                    <a class="nav-link" href="training.php"><img src="assets/icons/trainings.svg"><span class="icon">Тренировки</span></a>
                </div>
            </nav>
        </div>
    </header>
    <!-- /Header -->
```
