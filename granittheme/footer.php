<div class="footer">
        <div class="footer_wrap">
                <div class="White_Logo"><img src="<?php bloginfo( 'template_directory' ) ?>/img/White_Logo.png" alt=""><p><strong>Granit</strong><br>Доставка нерудных материалов</p></div>
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
            <script src="<?php bloginfo( 'template_directory' ) ?>/js/main.js"></script>
            <script src="<?php bloginfo( 'template_directory' ) ?>/js/jquery.maskedinput.js"></script>
            <script>
                $(document).ready(function () {
                    $("#phone").mask("+9 (999) 999-99-99");
                    $("name").mask("#hhhhhhhhhhhhhhhhhhh");
                });
            </script>
</body>
</html>