$(document).ready(function(){
    new WOW().init();

    $('#banner_section #banner_section-data_text>p').typeIt({
        strings: [
            "- Создание систем управления предприятием",
            "- Оцифровка процессов компании",
            "- Автоматизация процессов компании",
            "- Сквозная аналитика предприятия в режиме онлайн",
            "- Визуальное отображение положения дел в компании",
            "- Контроль склада предприятия",
            "- Расчет ЗП сотрудников",
            "- Отображение всегда актуальных ключевых показателей в режиме онлайн",
            "- Контроль действий сотрудников",
            "- Контроль движения денег (в том числе и переводы через 'Мобильный Банк')",
            "- Создание сложных калькуляторов для расчета заказа, оценки договора и т.д.",
            "- Интеграция системы с кассой",
            "- Создание Telegram-ботов как часть системы"
        ],
        speed: 90,
        breakLines: false,
        autoStart: true,
        loop: true
    });

    $('button.navbar-toggler').click(function(){
       if( $(this).attr('aria-expanded') == 'true' ){
           $('#global_header').addClass('menu_opened');
       }
       else{
           $('#global_header').removeClass('menu_opened');
       }
    })

    const slider = $("#portfolio_section").owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            560:{
                items:2,
                margin: 20
            },
            1000:{
                items:3
            },
            1400:{
                items:5
            }
        },
        onInitialized: counter,
        onChanged: counter,
    });

    function counter(event) {
        if (!event.namespace) {
            return;
        }
        var slides = event.relatedTarget;
        $('#portfolio_section-slider_navs #slides_counter').text(slides.relative(slides.current()) + 1 + '/' + slides.items().length);
    }

    $('#portfolio_section-slider_navs .owl-prev').click(function() {
        slider.trigger('prev.owl.carousel');
    })

    $('#portfolio_section-slider_navs .owl-next').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        slider.trigger('next.owl.carousel', [300]);
    })
})