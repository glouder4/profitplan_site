<?php
/*
    Template Name: Главная страница
    Template Post Type: page
*/
get_header();
?>
<?php
    $social_links = get_field('социальная_сеть',13);
    $phones = get_field('телефоны',13);
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

            <div class="d-none d-lg-flex flex-column" id="desc_first_banner">
                <div class="section_title">
                    <div class="title"><?=get_bloginfo( 'name' );?></div>
                    <p class="desc"><?=get_bloginfo( 'description' );?></p>
                </div>
                <div class="section_btns">
                    <div class="hmb_btns mt-5 col-12">
                        <a href="#about_us" rel="nofollow">
                            <div class="hmb_btn" onclick="">О нас</div>
                        </a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#modalForm">
                            <div class="hmb_btn" data-bs-toggle="modal" data-bs-target="#modalForm">Заказать звонок</div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column d-lg-none" id="mobile_first_banner">
                <div id="banner_section-data_dynamic">
                    <div id="banner_section-data_logo">
                        <img id="global_header-logo_img" src="<?=wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0];?>" alt="Profit Plan Логотип">
                    </div>
                    <div id="banner_section-data_text">
                        <p></p>
                    </div>
                </div>

                <div id="banner_section-data_static" class="container">
                    <div class="hmb_col">
                        <div class="hmb_col_title">Телефоны</div>
                        <div class="hmb_col_list d-flex flex-column mt-2">
                            <?php
                            foreach ($phones as $phone){ ?>
                                <a href="tel:<?=$phone['для_ссылки'];?>" rel="nofollow"><?=$phone['отображение'];?></a>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="hmb_col">
                        <div class="hmb_col_title">Социальные сети</div>
                        <div class="hmb_col_list d-flex flex-row flex-wrap gap-3 mt-2">
                            <?php
                            foreach ($social_links as $social_link){
                                if( $social_link['активность'] == 1 ){
                                    ?>
                                    <a target="_blank" href="<?=$social_link['ссылка'];?>" rel="nofollow"><?=$social_link['иконка'];?></a>
                                <?php    }
                            }
                            ?>
                        </div>
                    </div>

                    <div class="hmb_btns mt-5 col-12">
                        <div class="hmb_btn" data-bs-toggle="modal" data-bs-target="#modalForm">Заказать звонок</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-3 mt-md-5">
    <div class="container">
        <div class="section_title wow fadeInLeft" data-wow-offset="120">
            <h1>Создание и внедрение систем управления предприятием</h1>
            <p>Полноценное ПО для управления предприятием и принятия качественных и своевременных управленческих решений. Возможность видеть реальное положение дел компании в режиме онлайн</p>
        </div>
        <div class="section_img wow bounceInUp" data-wow-offset="140">
        </div>
    </div>
</section>

<section class="mt-3 mt-md-5" id="about_us">
    <img class="block_shape" src="<?=get_template_directory_uri();?>/assets/images/shape.svg" alt="">
    <div class="w-100" style="background-color: #ebebeb;">
        <div class="container pt-5 pb-5">
            <div class="section_title">
                <h2>Что такое Profit Plan?</h2>
            </div>
            <div class="section_data row ms-0 me-0 mt-5">
                <div class="col-12 col-lg-8 p-0">
                    <p>Profit Plan — это комплексный цифровой сервис управленческого учета с отчетами в реальном времени, который включает юридическое и финансовое сопровождение вашего бизнеса.</p>
                    <p>Мы помогаем консолидировать все важные финансовые и управленческие метрики вашего бизнеса в удобные автоматические real-time отчеты и оказываем экспертную помощь в финансовом и юридическом управлении компанией.</p>
                    <p>Дополнительно мы создаем точную цифровую модель вашего бизнеса для детального просчета рисков и прогнозирования точек роста компании</p>
                </div>
                <div class="col-12 col-lg-4">
                    <img src="<?=get_template_directory_uri();?>/base_assets/Artboard.png" alt="Анимация ноутбука">
                </div>
            </div>
        </div>
    </div>
    <img class="block_shape shape_down" src="<?=get_template_directory_uri();?>/assets/images/shape.svg" alt="">
</section>

<section class="mt-3 mt-lg-5">
    <div class="container">
        <h2>H2 Что такое система управления придприятем?</h2>
        <p>1 абзац</p>
        <p>2 абзац</p>
        <h3 class="mt-3">H3 Обязательный дополнительный заголовок</h3>
        <p>Завершающий абзац</p>
    </div>
</section>

<section id="service_for" class="mt-5">
    <div class="container">
        <div id="services" class="row ms-0 me-0">
            <div class="service_item col-12 col-lg-6 wow fadeInLeft" data-wow-offset="120">
                <div class="service_img">
                    <img src="<?=get_template_directory_uri();?>/base_assets/case.png" alt="<?=get_bloginfo( 'name' );?>n | Вам это нужно">
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

            <div class="service_item col-12 col-lg-6 mt-3 mt-lg-0 wow fadeInRight" data-wow-offset="120">
                <div class="service_img">
                    <img src="<?=get_template_directory_uri();?>/base_assets/Laptop.png" alt="<?=get_bloginfo( 'name' );?> | Зачем это нужно">
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
<section id="steps_of_work" class="mt-5">
    <div class="section_title pt-4 pb-4 bg_fixed" style="background-image: url('<?=get_template_directory_uri();?>/base_assets/steps_of_work.jpg');">
        <div class="container">
            <h3 class="text-white bg_title">Основные этапы разработки и внедрения систем управления</h3>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row ms-0 me-0" id="steps">
            <div class="col-12 col-lg-6">
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
            </div>
            <div class="col-12 col-lg-6">

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
    </div>
</section>

<section class="mt-3 mt-md-0" id="suitable">
    <img class="block_shape" src="<?=get_template_directory_uri();?>/assets/images/shape.svg" alt="">
    <div class="w-100" style="background-color: #ebebeb;">
        <div class="container pt-5 pb-5">
            <div class="section_title col-12">
                <h4>Кому подходит Profit Plan?</h4>
            </div>
            <div class="row ms-0 me-0 mt-5">
                <div class="col-12 col-lg-6 suitable-item">
                    <div class="d-flex flex-row title">
                        <div class="suitable-item_ico">
                            <img class="suitable-item_ico-img" src="<?=get_template_directory_uri();?>/base_assets/re.svg" alt="">
                        </div>
                        <div class="suitable-item_title">
                            <h6 class="m-0">БИЗНЕСУ</h6>
                            <p class="m-0">С ОБОРОТОМ ДО 300 МЛН ₽ В ГОД</p>
                        </div>
                    </div>
                    <div class="data mt-3">
                        <p>Проведем аудит компании, выявим слабые и сильные места, автоматизируем сбор ключевых показателей. Спрогнозируем и снизим издержки, повысим эффективность управления, приведем все цифры в понятный для аналитики вид</p>
                    </div>
                </div>

                <div class="col-12 col-lg-6 suitable-item mt-5 mt-lg-0">
                    <div class="d-flex flex-row title">
                        <div class="suitable-item_ico">
                            <img class="suitable-item_ico-img" src="<?=get_template_directory_uri();?>/base_assets/iconmonstr-product-6.svg" alt="">
                        </div>
                        <div class="suitable-item_title">
                            <h6 class="m-0">СТАРТАПАМ</h6>
                            <p class="m-0">ИЛИ НОВОМУ БИЗНЕСУ</p>
                        </div>
                    </div>
                    <div class="data mt-3">
                        <p>Внедрим управленческий учет на старте. Создадим финансовую модель компании и настроим стратегическое планирование. Поможем с маркетингом и повысим выживаемость стартапа</p>
                    </div>
                </div>
            </div>

            <div class="hmb_btns mt-5 col-12">
                <div class="hmb_btn" data-bs-toggle="modal" data-bs-target="#modalForm">Получить бесплатную консультацию</div>
            </div>
        </div>
    </div>
    <img class="block_shape shape_down" src="<?=get_template_directory_uri();?>/assets/images/shape.svg" alt="">
</section>
<section id="we_are_best" class="mt-5">
    <div class="container">
        <div class="section_title">
            <h4>Наш опыт в разработке и во внедрении систем управления предприятием</h4>
        </div>
        <div class="section_description">
            <p>Небольшой абзац про то, какие мы хорошие</p>
        </div>
        <div id="portfolio_section" class="owl-carousel mt-3">
            <?php
                $cases = get_posts([
                    'post_type' => 'cases',
                    'post_status' => 'publish',
                    'numberposts' => -1
                    // 'order'    => 'ASC'
                ]);
            ?>
            <?php
                foreach ($cases as $case){ ?>
                    <div class="card portfolio_item">
                        <img src="<?=get_the_post_thumbnail_url($case);?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=get_the_title($case);?></h5>
                            <p class="card-text"><?=get_field('краткое_описание',$case);?></p>
                            <a href="<?=get_permalink($case);?>" class="btn" rel="index"><i class="fas fa-link"></i> Подробнее </a>
                            <a href="<?=get_field('демо_ссылка',$case);?>" class="btn mt-1"><i class="fab fa-github"></i> Демо</a>
                        </div>
                    </div>
            <?php    }
            ?>
        </div>
        <div id="portfolio_section-slider_navs">
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle r="24.5" transform="matrix(-1 0 0 1 25 25)" stroke="#DDDDDD"></circle><path d="M30 25H20M20 25L24 21M20 25L24 29" stroke="#3D3D3D" stroke-width="2"></path></svg>
                </button>
                <div id="slides_counter"></div>
                <button type="button" role="presentation" class="owl-next">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="25" cy="25" r="24.5" stroke="#DDDDDD"></circle><path d="M20 25H30M30 25L26 21M30 25L26 29" stroke="#3D3D3D" stroke-width="2"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>
<section id="quick_questions" class="mt-5">
    <div class="container">
        <h5>Быстрые ответы</h5>
        <div class="accordion mt-3" id="accordionExample">
            <div class="accordion-item">
                <div class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Вопрос #1
                    </button>
                </div>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Вопрос #2
                    </button>
                </div>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Вопрос #3
                    </button>
                </div>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
