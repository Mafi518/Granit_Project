<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
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
            <div class="Logo"><img src="img/Black_Logo.png" alt=""><p><strong>Granit</strong><br>Доставка нерудных материалов</p>
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
    <a name="Delivery"></a>
    <div class="Delivery">
        <div class="Delivery_wrap">
            <h1>Быстрая доставка</h1>
            <p>бетона, щебня, песка</p>
            <p>и других нерудных материалов</p>
            <p>по Москве и Московской области</p>
            <a href="#Delivery1">Подробнее о доставке</a>
        </div>
    </div>
    <a name="Catalog"></a>
    <div class="Sell_Block">
        <h2>Всегда в наличии</h2>
        <div class="Card_Wrap">
            <div class="Card">
                <img src="img/Sand.png" alt="">
                <strong>Песок речной</strong>
                <p>Мелкий речной песок повышает прочность, долговечность и морозоустойчивость растворов, в состав которых он входит.</p>
                <span>от 330 р./т</span>
                <a href="#">Подробнее</a>
            </div>
            <div class="Card">
                <img src="img/Macadam.png" alt="">
                <strong>Щебень</strong>
                <p>Мелкий речной песок повышает прочность, долговечность и морозоустойчивость растворов, в состав которых он входит.</p>
                <span>от 330 р./т</span>
                <a href="#">Подробнее</a>
            </div>
            <div class="Card">
                <img src="img/Priming.png" alt="">
                <strong>Грунт</strong>
                <p>Мелкий речной песок повышает прочность, долговечность и морозоустойчивость растворов, в состав которых он входит.</p>
                <span>от 330 р./т</span>
                <a href="#">Подробнее</a>
            </div>
        </div>
        <a name="Delivery1"></a>
    </div>

    <div class="Adventage">
        <h3>Наши преимущества</h3>
        <div class="Advantage_Card_Wrap">
            <div class="Advantage_Card">
                <img src="img/Moneybox.png" alt="">
                <strong>Низкая цена</strong>
                <p>Мы сотрудничаем напрямую с производителем, поэтому можем гарантировать самую низкую цену.</p>
            </div>
            <div class="Advantage_Card">
                <img src="img/Delivery.png" alt="">
                <strong>Быстрая доставка</strong>
                <p>Весь товар уже находится на нашем складе. Нам остается только погрузить его и в путь!</p>
            </div>
            <div class="Advantage_Card">
                <img src="img/Truck.png" alt="">
                <strong>Индивидуальный подход</strong>
                <p>Вам нужны бесперебойные поставки или большая партия товара со скидкой? Мы найдем решение! </p>
            </div>
        </div>
    </div>

    <div class="Popular_Products">
        <h4>Популярные товары</h4>
        <div class="Product_Card_Wrap">
                    <div class="Product_Card">
                            <img src="img/P_1.png" alt="">
                            <p>Гранитный щебень 5-20 мм</p><br>
                            <span>1 350 р./т</span> 
                            <a href="#">Купить</a>  
                    </div>
                    <div class="Product_Card">
                        <img src="img/P_2.png" alt="">
                        <p>Гранитный щебень 5-20 мм</p><br>
                        <span>1 350 р./т</span> 
                        <a href="#">Купить</a>  
                    </div>
                    <div class="Product_Card">
                        <img src="img/P_3.png" alt="">
                        <p>Гранитный щебень 5-20 мм <br>(отсев)</p>
                        <span>1 350 р./т</span> 
                        <a href="#">Купить</a>  
                    </div>
                    <div class="Product_Card">
                        <img src="img/P_4.png" alt="">
                        <p>Гранитный щебень 5-20 мм</p><br>
                        <span>1 350 р./т</span> 
                        <a href="#">Купить</a>  
                    </div>
        </div>
        <a name="Services"></a>
    </div> 
    <div class="Our_Services">
        <h5>Наши услуги</h5>
        <div class="Services_Wrap">
            <div class="Service"><img src="img/Services_Car.png" alt="">
                <p>Аренда самосвала</p></div>
            <div class="Service"><img src="img/Services_Car_2.png" alt="">
                <p>Аренда спецтехники</p></div>
            <div class="Service"><img src="img/Services_Car_3.png" alt="">
                <p>Рытье траншеи</p></div>
        </div> 
    </div>
    <a name="Contacts"></a>
    <div class="Contacts">
        <div class="Contacts_wrap">
            <div class="test2">
                <h6>Контакты</h6>
                <div class="test">
                    <img src="img/Phone.png" alt="">
                    <p>8 800 034-23-34 <br>
                    8 495 034-23-34</p></div>
                <div class="test">
                    <img src="img/Location_pin.png" alt="">
                    <p>Московская обл. г.Балашиха,<br>
                    ер. Столовой, д.23, кор. 34</p></div>
                <div class="test">
                    <img src="img/Mail.png" alt="">
                    <p>Info@stroika.ru</p></div></div>
        </div>
    </div>

    <div class="footer">
        <div class="footer_wrap">
                <div class="White_Logo"><img src="img/White_Logo.png" alt=""><p><strong>Granit</strong><br>Доставка нерудных материалов</p></div>
                <div class="Footer_Info"><p><strong>8 800 342-13-33</strong><br>Бесплатный звонок по России</p></div>
           </div>
            <div class="MyContacts_wrap">
                <p>Разработка - <a href="https://vk.com/id177907494" target="_blank">Кликабельно*</a></p>
                <button onclick="show('block')">Обратный звонок</button>
            </div>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script>
            $(function() {
                var link = $('.m-menu-link');
                var close = $('.close-menu');
                var menu = $('.m-menu');
                var menu_link = $('.menu-link');
                link.on('click', function(event) {
                    event.preventDefault();
                    menu.toggleClass('m-menu__active');
                });
                close.on('click', function(event) {
                    event.preventDefault();
                    menu.toggleClass('m-menu__active');
                });
                menu_link.on('click', function(event) {
                    event.preventDefault();
                    menu.removeClass('m-menu__active');
                });
                
            });    
            </script>
            <script src="js/main.js"></script>
            <script src="js/jquery.maskedinput.js"></script>
            <script>
                $(document).ready(function () {
                    $("#phone").mask("+9 (999) 999-99-99");
                    $("name").mask("#hhhhhhhhhhhhhhhhhhh");
                });
            </script>
</body>
</html>