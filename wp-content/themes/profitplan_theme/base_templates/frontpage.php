<?php
/*
    Template Name: Главная страница
    Template Post Type: page
*/
get_header();
?>
<section id="banner_section" class="full_screen_section">
    <div class="waveWrapper waveAnimation">
        <div class="waveWrapperInner bgTop">
            <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
        </div>
        <div class="waveWrapperInner bgMiddle">
            <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
        </div>
        <div class="waveWrapperInner bgBottom">
            <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
        </div>

        <div id="banner_section-data">
            <div id="banner_section-data_logo">
                <img id="global_header-logo_img" src="<?=get_template_directory_uri();?>/base_assets/logo_light.png" alt="Profit Plan Логотип">
            </div>
            <div id="banner_section-data_text">
                <p></p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="section_title wow fadeInLeft" data-wow-offset="120">
            <h1>Создание и интеграция систем управления предприятием</h1>
            <p>Полноценное ПО для управления предприятием и принятия качественных и своевременных управленческих решений. Возможность видеть реальное положение дел компании в режиме онлайн</p>
        </div>
        <div class="section_img wow bounceInUp" data-wow-offset="140">
            <img src="<?=get_template_directory_uri();?>/base_assets/tablet_anim.gif" alt="Анимация ноутбука">
        </div>
    </div>
</section>

<section id="service_for" class="mt-3">
    <div class="container">
        <div id="services" class="row ms-0 me-0">
            <div class="service_item col-12 wow fadeInLeft" data-wow-offset="120">
                <div class="service_img">
                    <img src="<?=get_template_directory_uri();?>/base_assets/case.png" alt="Profit plan | Вам это нужно">
                </div>
                <div class="service_title">
                    <h6>Система управления именно для Вас, если нужна: </h6>
                </div>
                <div class="service_list mt-2">
                    <ul>
                        <li>Автоматизация процессов компании</li>
                        <li>Сквозная аналитика предприятия в режиме онлайн</li>
                        <li>Интеграция системы с кассой</li>
                        <li>Оцифровка процессов компании</li>
                    </ul>
                </div>
            </div>

            <div class="service_item col-12 mt-3 wow fadeInRight" data-wow-offset="120">
                <div class="service_img">
                    <img src="<?=get_template_directory_uri();?>/base_assets/Laptop.png" alt="Profit plan | Зачем это нужно">
                </div>
                <div class="service_title">
                    <h6>Что это даст вашему бизнесу?</h6>
                </div>
                <div class="service_list mt-2">
                    <ul>
                        <li>Визуальное отображение положения дел в компании</li>
                        <li>Контроль склада предприятия</li>
                        <li>Расчет ЗП сотрудников</li>
                        <li>Отображение всегда актуальных ключевых показателей в режиме онлайн</li>
                        <li>Контроль действий сотрудников</li>
                        <li>Контроль движения денег (в том числе и переводы через "Мобильный Банк")</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
