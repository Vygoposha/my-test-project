<?php
require 'components/header.php';
?>
<section class="contacts">
    <div class="container">
        <h1 class="contacts-title">Контакты</h1>
        <blockquote class="quote">
            <p>Нас сложно найти, легко потерять и невозможно забыть.</p>
            <cite class="author">— Джонсон Схетхем, CEO gloevk</cite>
        </blockquote>
        <!-- <img src="img/map.jpg" width="510" height="240" alt="Санкт-Петербург, улица Большая Конюшенная, 19/8"> -->
        <script type="text/javascript" charset="utf-8" async 
        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4c4297c89c0b15f2abafd8a301a41581dd6ee9e5486dd114caf19a3cf91e524e
        &amp;width=1102&amp;height=674&amp;lang=ru_RU&amp;scroll=true"></script>
        <br>
        <a class="map-link" href="https://yandex.ru/maps/63/irkutsk/?ll=104.280608%2C52.289590&z=12" target="_blank" title="Яндекс Карты — транспорт, навигация, поиск мест">© Яндекс Карты — транспорт, навигация, поиск мест
        <div class="contacts-info">
            <p class="contact-phone">+8 (800) 555-35-35</p>
            <p class="contact-address">Иркутск, улица Академика Курчатова, 3</p>
        </div>
    </div>
</section>
<?
require 'components/footer.php';
?>