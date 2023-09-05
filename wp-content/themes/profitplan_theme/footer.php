<?php
    $social_links = get_field('социальная_сеть',13);
    $phones = get_field('телефоны',13);
?>
<footer id="main_footer" class="full_screen_section pb-5 mt-3">
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

        <div id="contacts_section-data" class="col-12">
            <div class="container mt-5">
                <div class="h4 text-white">Контакты</div>
                <div class="hmb_cols row">
                    <div class="hmb_col">
                        <div class="hmb_col_title">Телефоны</div>
                        <div class="hmb_col_list">
                            <?php
                            foreach ($phones as $phone){ ?>
                                <a href="tel:<?=$phone['для_ссылки'];?>" rel="nofollow"><?=$phone['отображение'];?></a>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="hmb_col mt-5 mt-sm-0">
                        <div class="hmb_col_title">Адрес</div>
                        <div class="hmb_col_list">Волшебный адрес</div>
                    </div>
                    <div class="hmb_col mt-5 mt-md-0">
                        <div class="hmb_col_title">Режим работы</div>
                        <div class="hmb_col_list">
                            В любое время
                        </div>
                    </div>
                    <div class="hmb_col col-12 mt-5 mt-lg-0">
                        <div class="hmb_col_title">Социальные сети</div>
                        <div class="hmb_col_list d-flex flex-row">
                            <?php
                            foreach ($social_links as $key => $social_link){
                                if( $social_link['активность'] == 1 ){
                                    ?>
                                    <a target="_blank" rel="nofollow" class="<?=($key > 0) ? 'mt-0 ms-2' : ''?>" href="<?=$social_link['ссылка'];?>">
                                        <?=$social_link['иконка'];?>
                                    </a>
                                <?php    }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div id="footer_end_of_site">
                    <div id="end_form_section" class="d-flex">
                        <div id="about_data">
                            <img id="global_header-logo_img" src="<?=get_template_directory_uri();?>/base_assets/logo_light.png" alt="Profit Plan Логотип">
                            <div class="d-flex mt-3 gap-2">
                                <span>©<?=date('Y');?></span>
                                <a href="<?=get_the_privacy_policy_link();?>" rel="nofollow">Политика конфиденциальности</a>
                            </div>
                        </div>
                        <div class="d-none d-md-flex flex-column">
                            <div class="f_row_cont">
                                <div class="f_inp_group" id="footer-send_phone-form">
                                    <label for="footer-send_phone" class="w-100 text-white">Оставить заявку</label>
                                    <input type="phone" id="footer-send_phone" name="f_inp_phone" placeholder="Номер телефона">
                                    <div class="f_subm_btn" id="end_form_section-submit">
                                        <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="25" cy="25" r="25" fill="#FF0C00"></circle>
                                            <path d="M20 25H30M30 25L26 21M30 25L26 29" stroke="white" stroke-width="2"></path>
                                        </svg>
                                    </div>
                                    <div class="w-100 input_warning">
                                        <p class="m-0">Неправильно введён номер</p>
                                    </div>
                                    <div class="w-100 input_error">
                                        <p class="m-0">Ошибка при отправке формы. Попробуйте позже.</p>
                                    </div>
                                    <div class="w-100 input_success">
                                        <p class="m-0">Форма успешно отправлена</p>
                                    </div>
                                </div>
                                <div class="f_politic">
                                    <input id="f_politic" type="checkbox" name="politic">
                                    <label for="f_politic">
                                        <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.5" y="0.5" width="17" height="17" fill="white" stroke="#DDDDDD"></rect>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 6.41372L7.37966 14L3 9.63992L4.35205 8.22619L7.37966 11.2403L13.6479 5L15 6.41372Z" fill="#3D3D3D"></path>
                                        </svg>
                                    </label>
                                    <p>
                                        Нажимая кнопку, я даю свое согласие на <a href="<?=get_the_privacy_policy_link();?>" rel="nofollow">обработку
                                            моих персональных данных</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="d-none">
                        <?=do_shortcode('[contact-form-7 id="3da25d2" title="Форма номера в футере"]');?>
                    </div>
                    <div class="hmb_btns d-md-none mt-4">
                        <div class="hmb_btn d-md-none" data-bs-toggle="modal" data-bs-target="#modalForm">Заказать звонок</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="modalFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column text-center">
                    <div class="h2 modal-title">Заказ обратного звонка</div>
                    <p class="h6">Оставьте ваш номер телефона в этой форме, и мы оперативно с вами свяжемся</p>
                </div>
                <div id="modal_form" class="mt-5">
                    <div class="input-group input-group-lg">
                        <input type="text" name="name" class="form-control" aria-label="" placeholder="Имя" aria-describedby="inputGroup-sizing-lg">
                        <div class="w-100 input_warning_name">
                            <p class="m-0">Не указано имя</p>
                        </div>
                    </div>
                    <div class="input-group input-group-lg">
                        <input type="phone" name="phone" class="form-control" aria-label="" placeholder="Телефон" aria-describedby="inputGroup-sizing-lg">
                        <div class="w-100 input_warning_phone">
                            <p class="m-0">Неправильно введён номер</p>
                        </div>
                    </div>

                    <div class="f_politic">
                        <input type="checkbox" name="politic">
                        <label for="f_politic">
                            <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="17" height="17" fill="white" stroke="#DDDDDD"></rect>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15 6.41372L7.37966 14L3 9.63992L4.35205 8.22619L7.37966 11.2403L13.6479 5L15 6.41372Z" fill="#3D3D3D"></path>
                            </svg>
                        </label>
                        <p>
                            Отправляя форму, я даю свое согласие на <a href="<?=get_the_privacy_policy_link();?>" rel="nofollow">обработку
                                моих персональных данных</a>
                        </p>
                    </div>

                    <div class="w-100 input_error">
                        <p class="m-0">Ошибка при отправке формы. Попробуйте позже.</p>
                    </div>
                    <div class="w-100 input_success">
                        <p class="m-0">Форма успешно отправлена</p>
                    </div>

                    <div class="hmb_btns mt-5 col-12">
                        <div class="hmb_btn mx-auto" id="modal_form_sent" data-bs-toggle="modal" data-bs-target="#modalForm">Заказать звонок</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-none">
        <?=do_shortcode('[contact-form-7 id="1d57431" title="Форма в модальном окне"]');?>
    </div>
</div>

<div id="scroll_up" onclick="document.body.scrollTop = document.documentElement.scrollTop = 0;">
    <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle r="25" transform="matrix(1.19249e-08 -1 -1 -1.19249e-08 25 25)" fill="#FF0C00"></circle>
        <circle r="24.5" transform="matrix(1.19249e-08 -1 -1 -1.19249e-08 25 25)" stroke="#fff" stroke-opacity="0.2"></circle>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M29.707 23.2929L24.9999 18.5858L20.2928 23.2929L21.707 24.7071L23.9999 22.4142L23.9999 30L25.9999 30L25.9999 22.4142L28.2928 24.7071L29.707 23.2929Z" fill="white"></path>
    </svg>
</div>

<?php wp_footer(); ?>

</body>
</html>
