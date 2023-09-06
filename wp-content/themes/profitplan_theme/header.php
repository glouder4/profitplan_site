<?php
    $social_links = get_field('социальная_сеть',13);
    $phones = get_field('телефоны',13);
    $contacts = get_field('контакты',13);
?>
<?php
    $main_menu = wp_get_nav_menu_object( get_nav_menu_locations()[ 'primary' ] );
    $main_menu_items = wp_get_nav_menu_items( $main_menu->term_id, array( 'order' => 'DESC' ) );
?>

<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body class="theme-<?=$_COOKIE['theme_color'];?>">
<?php wp_body_open(); ?>

<header id="global_header" class="col-12">
    <div class="container h-100 ps-1 pe-1 col-12">
        <nav class="navbar navbar-expand-lg h-100 bg-transparent col-12">
            <div id="global_header-mobile_menu" class="row ms-0 me-0 h-100 d-lg-none col-12">
                <div class="col-5 h-100">
                    <a id="global_header-logo_link" href="/">
                        <img id="global_header-logo_img" src="<?=get_template_directory_uri();?>/base_assets/logo_light.png" alt="Profit Plan Логотип">
                    </a>
                </div>
                <div class="col-7 h-100 p-0">
                    <div class="col-12 h-100 ms-auto">
                        <div id="global_header-mobile_menu-links" class="d-flex flex-row h-100 justify-content-end">

                            <a class="hml_call h-100" href="tel:<?=$phones[0]['для_ссылки']?>">
                                <svg class="h-100" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><circle opacity="0.2" cx="18" cy="18" r="17.5" stroke="white"></circle><path d="M26.807 22.6511C26.137 21.3842 23.8102 20.0106 23.7077 19.9505C23.4087 19.7803 23.0967 19.6902 22.8048 19.6902C22.3706 19.6902 22.0153 19.8891 21.8 20.2509C21.4597 20.658 21.0376 21.1339 20.9351 21.2077C20.1423 21.7457 19.5216 21.6846 18.8349 20.9978L15.0022 17.1642C14.3198 16.4817 14.257 15.8533 14.7913 15.0646C14.866 14.9615 15.3419 14.539 15.749 14.1983C16.0086 14.0437 16.1868 13.8141 16.2648 13.5325C16.3686 13.1577 16.2922 12.7168 16.0473 12.2873C15.9895 12.1885 14.6154 9.86104 13.3494 9.19123C13.1132 9.06608 12.8469 9 12.5799 9C12.1401 9 11.7264 9.17154 11.4154 9.48225L10.5685 10.3289C9.22904 11.6682 8.74419 13.1864 9.1266 14.841C9.4456 16.22 10.3753 17.6875 11.8902 19.2023L16.7971 24.1099C18.7144 26.0275 20.5424 27 22.2302 27C22.2302 27 22.2302 27 22.2305 27C23.4718 27 24.629 26.4724 25.6691 25.4321L26.5157 24.5854C27.0303 24.0711 27.147 23.2935 26.807 22.6511Z" fill="white"></path></svg>
                            </a>
                            <div id="fixed_header-social_links">
                                <?php
                                foreach ($social_links as $social_link){
                                    if( $social_link['активность'] == 1 ){
                                        ?>
                                        <a target="_blank" href="<?=$social_link['ссылка'];?>">
                                            <?=$social_link['иконка'];?>
                                        </a>
                                    <?php    }
                                }
                                ?>
                            </div>

                            <button class="navbar-toggler h-100" type="button" data-bs-toggle="collapse" data-bs-target="#mobile_navigation_bar" aria-controls="mobile_navigation_bar" aria-expanded="false" aria-label="Toggle navigation">
                                <svg class="burger_icon" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                                    <path class="top" d="m 30,33 h 40 c 0,0 8.5,-0.68551 8.5,10.375 0,8.292653 -6.122707,9.002293 -8.5,6.625 l -11.071429,-11.071429" />
                                    <path class="middle" d="m 70,50 h -40" />
                                    <path class="bottom" d="m 30,67 h 40 c 0,0 8.5,0.68551 8.5,-10.375 0,-8.292653 -6.122707,-9.002293 -8.5,-6.625 l -11.071429,11.071429" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="mobile_navigation_bar">
                <div class="hmb_menu">
                    <div class="hmb_inner_menu container">
                        <nav class="hmb_nav mt-5">
                            <div class="h4 nav_title">Навигация</div>
                            <ul class="mt-3">
                                <?php
                                foreach ($main_menu_items as $menu_item){ ?>
                                    <li><a href="<?=$menu_item->url;?>"><?=$menu_item->post_title;?></a></li>
                                <?php    }
                                ?>
                            </ul>
                        </nav>
                        <div class="hmb_cols">
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
                            <div class="hmb_col">
                                <div class="hmb_col_title">Адрес</div>
                                <div class="hmb_col_list"><?=$contacts['адрес'];?></div>
                            </div>
                            <div class="hmb_col">
                                <div class="hmb_col_title">Режим работы</div>
                                <div class="hmb_col_list">
                                    <?=$contacts['режим_работы'];?>
                                </div>
                            </div>
                            <div class="hmb_col">
                                <div class="hmb_col_title">Социальные сети</div>
                                <div class="hmb_col_list">
                                    <?php
                                    foreach ($social_links as $social_link){
                                        if( $social_link['активность'] == 1 ){
                                            ?>
                                            <a target="_blank" href="<?=$social_link['ссылка'];?>" rel="nofollow"><?=$social_link['название'];?></a>
                                        <?php    }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hmb_btns container mt-5">
                        <div class="hmb_btn" data-bs-toggle="modal" data-bs-target="#modalForm">Заказать звонок</div>
                    </div>
                </div>
            </div>


            <div id="global_header-main_menu" class="row ms-0 me-0 h-100 d-none d-lg-flex col-12">
                <div class="col-lg-3 h-100">
                    <a id="global_header-main_menu-logo_link" href="/">
                        <img id="global_header-logo_img" src="<?=get_template_directory_uri();?>/base_assets/logo_light.png" alt="Profit Plan Логотип">
                    </a>
                </div>
                <div class="col-lg-9 h-100 p-0">
                    <div class="col-12 h-100 ms-auto" id="main_menu">
                        <div id="main_menu-links">
                            <ul>
                                <?php
                                    foreach ($main_menu_items as $menu_item){ ?>
                                        <li><a href="<?=$menu_item->url;?>"><?=$menu_item->post_title;?></a></li>
                                <?php    }
                                ?>
                            </ul>
                        </div>
                        <div id="global_header-main_menu-mobile_menu-links" class="d-flex flex-row h-100 justify-content-end">

                            <button type="button" data-bs-toggle="modal" data-bs-target="#modalForm">
                                <div class="hmb_btn" data-bs-toggle="modal" data-bs-target="#modalForm">Заказать звонок</div>
                            </button>
                            <div id="fixed_header-main_menu-social_links">
                                <?php
                                    foreach ($social_links as $social_link){
                                        if( $social_link['активность'] == 1 ){
                                        ?>
                                        <a target="_blank" href="<?=$social_link['ссылка'];?>">
                                            <?=$social_link['иконка'];?>
                                        </a>
                                <?php    }
                                    }
                                ?>
                            </div>

                            <button class="navbar-toggler h-100" type="button" data-bs-toggle="collapse" data-bs-target="#mobile_navigation_bar" aria-controls="mobile_navigation_bar" aria-expanded="false" aria-label="Toggle navigation">
                                <svg class="burger_icon" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                                    <path class="top" d="m 30,33 h 40 c 0,0 8.5,-0.68551 8.5,10.375 0,8.292653 -6.122707,9.002293 -8.5,6.625 l -11.071429,-11.071429" />
                                    <path class="middle" d="m 70,50 h -40" />
                                    <path class="bottom" d="m 30,67 h 40 c 0,0 8.5,0.68551 8.5,-10.375 0,-8.292653 -6.122707,-9.002293 -8.5,-6.625 l -11.071429,11.071429" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
