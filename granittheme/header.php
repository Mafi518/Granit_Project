<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Granit</title>
</head>
<body>
        <div id="filter" onclick="show('none')"></div>
            <div id="ModalForm">
                 <form action="">
                    <p>Обратный звонок</p>
                    <input type="text" id="name" name="Name" placeholder="Ваше имя" id="">
                    <input type="text" id="mail" name="E-mail" placeholder="Ваш E-mail" id="">
                    <input type="text" id="phone" name="Phone" placeholder="Телефон" id="" >
                    <button>Отправить</button>
                </form>
            </div>
    <a name="Head"></a>
    <div class="Head">
        <div class="header_wrap">
            <div class="Logo"><img src="<?php bloginfo( 'template_directory' ) ?>/img/Black_Logo.png" alt=""><p><strong><?php bloginfo( 'name' )?></strong><br><?php bloginfo( 'description' )?></p>
                </div>
                <a href="#" class="m-menu-link">
                        <i class="fa fa-bars"></i>
                    </a>
            <div class="Info"><p><strong>8 800 342-13-33</strong><br>Бесплатный звонок по России</p><button onclick="show('block')">Обратный звонок</button>
            </div>
        </div>
    </div>
    <div class="Menu">
        <a href="#Head">Главная</a>
        <a href="#Catalog">Каталог</a>
        <a href="#Services">Услуги</a>
        <a href="#Delivery">Доставка</a>
        <a href="#About_Company">О компании</a>
        <a href="#Contacts">Контакты</a>
    </div>
    <ul class="m-menu">
        <li class="close-menu">&times;</li>
        <li><a href="#Head" class="menu-link">Главная</a></li>
        <li><a href="#Catalog" class="menu-link">Каталог</a></li>
        <li><a href="#Services" class="menu-link">Услуги</a></li>
        <li><a href="#Delivery" class="menu-link">Доставка</a></li>
        <li><a href="#About_Company" class="menu-link">О компании</a></li>
        <li><a href="#Contacts" class="menu-link">Контакты</a></li>
    </ul>