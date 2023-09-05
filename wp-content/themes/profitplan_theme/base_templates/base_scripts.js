$(document).ready(function(){
    new WOW().init();
    $('input[type="phone"]').mask('+7 (999) 999-99-99');

    const $header = $("body header#global_header")
    let prevScroll;
    let lastShowPos;

    $(window).on("scroll", function() {
        const scrolled = $(window).scrollTop();

        if (scrolled > 100 && scrolled > prevScroll) {
            $header.addClass("header-out");
            lastShowPos = scrolled;
        } else if (scrolled <= Math.max(lastShowPos - 250, 0)) {
            $header.removeClass("header-out");
        }
        prevScroll = scrolled;
    });

    $('#end_form_section-submit').click(function(){
        let phone = $('#footer-send_phone').val();
        let checkbox = $("#end_form_section #f_politic")[0].checked;

        if( phone.length < 18 ){
            $('#footer-send_phone-form').addClass('warning');
            $('#footer-send_phone-form').removeClass('success');
            return;
        }
        else{
            $('#footer-send_phone-form').removeClass('warning');
        }
        if( checkbox == false ){
            $('#end_form_section .f_politic label').addClass('warning');
            $('#footer-send_phone-form').removeClass('success');
            return;
        }
        else{
            $('#end_form_section .f_politic label').removeClass('warning');
        }
        let formData = new FormData();
        formData.append('_wpcf7',11);
        formData.append('_wpcf7_version',5.8);
        formData.append('_wpcf7_locale','ru_RU');
        formData.append('_wpcf7_unit_tag','wpcf7-f11-o1');
        formData.append('_wpcf7_container_post',0);
        formData.append('_wpcf7_posted_data_hash','');
        formData.append('tel-259',phone);
        formData.append('checkbox-177',checkbox);

        $.ajax({
            type:'POST',
            data: formData,
            url: '/wp-json/contact-form-7/v1/contact-forms/11/feedback',
            cache:false,
            processData: false,
            contentType: false,
            success: function(data){
                if( data.status == 'validation_failed' ){
                    if( data.invalid_fields[0].field == 'checkbox-177' ){
                        $('#end_form_section .f_politic label').addClass('warning');
                        $('#footer-send_phone-form').removeClass('success');
                        return;
                    }
                    else if( data.invalid_fields[0].field == 'tel-259' ){
                        $('#footer-send_phone-form').addClass('warning');
                        $('#footer-send_phone-form').removeClass('success');
                        return;
                    }
                }

                if( data.status == 'mail_sent' ){
                    $('#footer-send_phone').val('');
                    $("#end_form_section #f_politic")[0].checked = false;
                    $('#end_form_section .f_politic').removeClass('checked');

                    $('#footer-send_phone-form').addClass('success');
                }
                else{
                    console.log(data)
                    $('#footer-send_phone-form').addClass('error');
                    $('#footer-send_phone-form').removeClass('success');
                }
            },
            error: function(data){
                console.log(data)
                $('#footer-send_phone-form').addClass('error');
                $('#footer-send_phone-form').removeClass('success');
            },
        });

    })
    $('#end_form_section .f_politic label').click(function(){
        if( $('#end_form_section .f_politic').hasClass('checked') ){
            $('#end_form_section .f_politic').removeClass('checked');
            $("#end_form_section #f_politic")[0].checked = false;
        }
        else{
            $('#end_form_section .f_politic').addClass('checked');
            $("#end_form_section #f_politic")[0].checked = true;
        }
    })




    $('#modal_form_sent').click(function(){
        let name = $('#modal_form input[name="name"]').val();
        let phone = $('#modal_form input[name="phone"]').val();
        let checkbox = $("#modal_form input[name='politic']")[0].checked;

        if( name.length < 3 ){
            $('#modal_form').addClass('warning_name');
            $('#modal_form').removeClass('success');
            return;
        }
        else{
            $('#modal_form').removeClass('warning_name');
        }
        if( phone.length < 18 ){
            $('#modal_form').addClass('warning_phone');
            $('#modal_form').removeClass('success');
            return;
        }
        else{
            $('#modal_form').removeClass('warning_phone');
        }

        if( checkbox == false ){
            $('#modal_form .f_politic label').addClass('warning');
            $('#modal_form').removeClass('success');
            return;
        }
        else{
            $('#modal_form .f_politic label').removeClass('warning');
        }
        let formData = new FormData();
        formData.append('_wpcf7',11);
        formData.append('_wpcf7_version',5.8);
        formData.append('_wpcf7_locale','ru_RU');
        formData.append('_wpcf7_unit_tag','wpcf7-f29-o2');
        formData.append('_wpcf7_container_post',0);
        formData.append('_wpcf7_posted_data_hash','');
        formData.append('text-662',name);
        formData.append('tel-839',phone);
        formData.append('checkbox-801',checkbox);

        $.ajax({
            type:'POST',
            data: formData,
            url: '/wp-json/contact-form-7/v1/contact-forms/29/feedback',
            cache:false,
            processData: false,
            contentType: false,
            success: function(data){
                if( data.status == 'validation_failed' ){
                    if( data.invalid_fields[0].field == 'text-662' ){
                        $('#modal_form').addClass('warning_name');
                        $('#modal_form').removeClass('success');
                        return;
                    }
                    else if( data.invalid_fields[0].field == 'tel-839' ){
                        $('#modal_form').addClass('warning_phone');
                        $('#modal_form').removeClass('success');
                        return;
                    }
                    else if( data.invalid_fields[0].field == 'checkbox-801' ){
                        $('#modal_form .f_politic label').addClass('warning');
                        $('#modal_form').removeClass('success');
                        return;
                    }
                }

                if( data.status == 'mail_sent' ){
                    $('#modal_form input[name="name"]').val('');
                    $('#modal_form input[name="phone"]').val('');
                    $("#modal_form input[name='politic']")[0].checked = false;

                    $('#modal_form .f_politic').removeClass('checked');

                    $('#modal_form').addClass('success');
                }
                else{
                    console.log(data)
                    $('#modal_form').addClass('error');
                    $('#modal_form').removeClass('success');
                }
            },
            error: function(data){
                console.log(data)
                $('#modal_form').addClass('error');
                $('#modal_form').removeClass('success');
            },
        });
    })
    $('#modal_form .f_politic label').click(function(){
        if( $('#modal_form .f_politic').hasClass('checked') ){
            $('#modal_form .f_politic').removeClass('checked');
            $("#modal_form input[name='politic']")[0].checked = false;
        }
        else{
            $('#modal_form .f_politic').addClass('checked');
            $("#modal_form input[name='politic']")[0].checked = true;
        }
    })
})