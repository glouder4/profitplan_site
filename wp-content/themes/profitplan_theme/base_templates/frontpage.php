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
            <h1>Создание и внедрение систем управления предприятием</h1>
            <p>Полноценное ПО для управления предприятием и принятия качественных и своевременных управленческих решений. Возможность видеть реальное положение дел компании в режиме онлайн</p>
        </div>
        <div class="section_img wow bounceInUp" data-wow-offset="140">
            <img src="<?=get_template_directory_uri();?>/base_assets/tablet_anim.gif" alt="Анимация ноутбука">
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2>H2 Что такое система управления придприятем?</h2>
        <p>1 абзац</p>
        <p>2 абзац</p>
        <h3>H3 Обязательный дополнительный заголовок</h3>
        <p>Завершающий абзац</p>
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
                    <h4>Система управления именно для Вас, если нужна: </h4>
                </div>
                <div class="service_list mt-2">
                    <ul>
                        <li><b>Автоматизация процесса работы</b> компании</li>
                        <li>Сквозная <b>аналитика предприятия</b> в режиме онлайн</li>
                        <li><b>Интеграция кассы</b> с системой</li>
                        <li><b>Оцифровка процессов бизнеса</b></li>
                    </ul>
                </div>
            </div>

            <div class="service_item col-12 mt-3 wow fadeInRight" data-wow-offset="120">
                <div class="service_img">
                    <img src="<?=get_template_directory_uri();?>/base_assets/Laptop.png" alt="Profit plan | Зачем это нужно">
                </div>
                <div class="service_title">
                    <h4>Что система управления даст вашему бизнесу?</h4>
                </div>
                <div class="service_list mt-2">
                    <ul>
                        <li>Отображение положения дел компании в инфографике</li>
                        <li><b>Контроль склада</b> предприятия</li>
                        <li><b>Расчет ЗП сотрудников</b></li>
                        <li>Отображение всегда актуальных <b>ключевых показателей эффективности предприятия</b> в режиме онлайн</li>
                        <li><b>Контроль действий сотрудников</b></li>
                        <li>Контроль движения денег (в том числе и переводы через "Мобильный Банк")</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="steps_of_work" class="mt-3">
    <div class="section_title pt-4 pb-4 bg_fixed" style="background-image: url('<?=get_template_directory_uri();?>/base_assets/steps_of_work.jpg');">
        <div class="container">
            <h3 class="text-white bg_title">Основные этапы разработки и внедрения систем управления</h3>
        </div>
    </div>
    <div class="container">
        <div class="row ms-0 me-0" id="steps">
            <div class="col-12 step_item mt-2">
                <div class="step_item-title">
                    <h4>01. Автоматизируем процессы работы</h4>
                </div>
                <div class="step_item-desc">
                    <p>Очень увлекательный текст</p>
                </div>

                <svg width="26" height="26" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <rect fill="none" id="canvas_background" height="402" width="582" y="-1" x="-1"/>
                    </g>
                    <g>
                        <path transform="rotate(-90 13.000000000000002,13) " id="svg_1" fill="#27273c" d="m0,0l0,13l13,0l0,13l13,0l0,-26l-26,0z"/>
                    </g>
                </svg>
            </div>

            <div class="col-12 step_item mt-2">
                <div class="step_item-title">
                    <h4>02. Настроим сквозную аналитику</h4>
                </div>
                <div class="step_item-desc">
                    <p>Очень увлекательный текст</p>
                </div>

                <svg width="26" height="26" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <rect fill="none" id="canvas_background" height="402" width="582" y="-1" x="-1"/>
                    </g>
                    <g>
                        <path transform="rotate(-90 13.000000000000002,13) " id="svg_1" fill="#27273c" d="m0,0l0,13l13,0l0,13l13,0l0,-26l-26,0z"/>
                    </g>
                </svg>
            </div>

            <div class="col-12 step_item mt-2">
                <div class="step_item-title">
                    <h4>03. Интегрируем систему с кассой</h4>
                </div>
                <div class="step_item-desc">
                    <p>Очень увлекательный текст</p>
                </div>

                <svg width="26" height="26" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <rect fill="none" id="canvas_background" height="402" width="582" y="-1" x="-1"/>
                    </g>
                    <g>
                        <path transform="rotate(-90 13.000000000000002,13) " id="svg_1" fill="#27273c" d="m0,0l0,13l13,0l0,13l13,0l0,-26l-26,0z"/>
                    </g>
                </svg>
            </div>

            <div class="col-12 step_item mt-2">
                <div class="step_item-title">
                    <h4>04. Оцифруем бизнес процессы</h4>
                </div>
                <div class="step_item-desc">
                    <p>Очень увлекательный текст</p>
                </div>

                <svg width="26" height="26" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <rect fill="none" id="canvas_background" height="402" width="582" y="-1" x="-1"/>
                    </g>
                    <g>
                        <path transform="rotate(-90 13.000000000000002,13) " id="svg_1" fill="#27273c" d="m0,0l0,13l13,0l0,13l13,0l0,-26l-26,0z"/>
                    </g>
                </svg>
            </div>

            <div class="col-12 step_item mt-2">
                <div class="step_item-title">
                    <h4>05. Отобразим положение дел компании в инфографике</h4>
                </div>
                <div class="step_item-desc">
                    <p>Очень увлекательный текст</p>
                </div>

                <svg width="26" height="26" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <rect fill="none" id="canvas_background" height="402" width="582" y="-1" x="-1"/>
                    </g>
                    <g>
                        <path transform="rotate(-90 13.000000000000002,13) " id="svg_1" fill="#27273c" d="m0,0l0,13l13,0l0,13l13,0l0,-26l-26,0z"/>
                    </g>
                </svg>
            </div>

            <div class="col-12 step_item mt-2">
                <div class="step_item-title">
                    <h4>06. Проконтролируем склад предприятия</h4>
                </div>
                <div class="step_item-desc">
                    <p>Очень увлекательный текст</p>
                </div>

                <svg width="26" height="26" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <rect fill="none" id="canvas_background" height="402" width="582" y="-1" x="-1"/>
                    </g>
                    <g>
                        <path transform="rotate(-90 13.000000000000002,13) " id="svg_1" fill="#27273c" d="m0,0l0,13l13,0l0,13l13,0l0,-26l-26,0z"/>
                    </g>
                </svg>
            </div>

            <div class="col-12 step_item mt-2">
                <div class="step_item-title">
                    <h4>07. Рассчитаем ЗП сотрудникам</h4>
                </div>
                <div class="step_item-desc">
                    <p>Очень увлекательный текст</p>
                </div>

                <svg width="26" height="26" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <rect fill="none" id="canvas_background" height="402" width="582" y="-1" x="-1"/>
                    </g>
                    <g>
                        <path transform="rotate(-90 13.000000000000002,13) " id="svg_1" fill="#27273c" d="m0,0l0,13l13,0l0,13l13,0l0,-26l-26,0z"/>
                    </g>
                </svg>
            </div>

            <div class="col-12 step_item mt-2">
                <div class="step_item-title">
                    <h4>08. Отобразим ключевые показатели эффективности предприятия</h4>
                </div>
                <div class="step_item-desc">
                    <p>Очень увлекательный текст</p>
                </div>

                <svg width="26" height="26" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <rect fill="none" id="canvas_background" height="402" width="582" y="-1" x="-1"/>
                    </g>
                    <g>
                        <path transform="rotate(-90 13.000000000000002,13) " id="svg_1" fill="#27273c" d="m0,0l0,13l13,0l0,13l13,0l0,-26l-26,0z"/>
                    </g>
                </svg>
            </div>

            <div class="col-12 step_item mt-2">
                <div class="step_item-title">
                    <h4>09. Проконтролируем действия сотрудников</h4>
                </div>
                <div class="step_item-desc">
                    <p>Очень увлекательный текст</p>
                </div>

                <svg width="26" height="26" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <rect fill="none" id="canvas_background" height="402" width="582" y="-1" x="-1"/>
                    </g>
                    <g>
                        <path transform="rotate(-90 13.000000000000002,13) " id="svg_1" fill="#27273c" d="m0,0l0,13l13,0l0,13l13,0l0,-26l-26,0z"/>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</section>
<section id="we_are_best" class="mt-3">
    <div class="container">
        <div class="section_title">
            <h4>Наш опыт в разработке и во внедрении систем управления предприятием</h4>
        </div>
        <div class="section_description">
            <p>Небольшой абзац про то, какие мы хорошие</p>
        </div>
        <div id="portfolio_section">
            <div class="row ms-0 me-0">
                <div class="col-12 p-0">
                    <div class="col-md-4">
                        <div class="card portfolio_item" style="width: 18rem;">
                            <img src="https://i.imgur.com/ZTkt4I5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Название проекта</h5>
                                <p class="card-text">Крактое описание проекта</p>
                                <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Подробнее </a>
                                <a href="#" class="btn "><i class="fab fa-github"></i> Демо</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
