$(document).ready(function () {




    $('.toggle-form, .formwrap, .toggle-bg').delay(20000).queue(function () {
        $('.toggle-form, .formwrap, .toggle-bg').addClass('active');
        $('.toggle-form, .formwrap, .toggle-bg').dequeue();


    });






 
    $('.cta-open').on('mouseover', function () {
        $('.toggle-form, .formwrap, .toggle-bg').addClass('active');
        $('.icon-close').addClass('open');
    });
    $('.icon-close').on('click', function () {
        $('.toggle-form, .formwrap, .toggle-bg').removeClass('active');
        $('.icon-close').removeClass('open');
    });
});


