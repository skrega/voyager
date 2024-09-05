$(function () {
    $('.faq-question').on('click', function (){
        $(this).toggleClass('open')
        $(this).next().slideToggle()
    })
    // menu button
    $('.menu-btn').on('click', function () {
        $(this).toggleClass('open')
        $('.menu').toggleClass('open')
        $('.header__inner').toggleClass('open')
    })

    // вывод сообщения об успешной отправки
    document.addEventListener('wpcf7mailsent', function (event) {
        Fancybox.close();
        Fancybox.show([{
            src: "#success",
            type: "inline"
        }]);
    }, false);



    // Обработка клика на input внутри wpcf7-form-control-wrap
    $('.wpcf7-form .wpcf7-form-control-wrap input').on('focus', function () {
        const $parentWrap = $(this).closest('.wpcf7-form-control-wrap');

        // Добавляем класс 'focus' к родительскому элементу wpcf7-form-control-wrap
        $parentWrap.addClass('focus');

        // Удаляем класс 'focus' у всех других элементов wpcf7-form-control-wrap
        $('.wpcf7-form .wpcf7-form-control-wrap').not($parentWrap).removeClass('focus');
    });

    // Обработка ввода в input внутри wpcf7-form-control-wrap
    $('.wpcf7-form .wpcf7-form-control-wrap input').on('input', function () {
        const $parentWrap = $(this).closest('.wpcf7-form-control-wrap');

        // Если input заполнен, добавляем класс 'valid' к родителю wpcf7-form-control-wrap
        if ($(this).val()) {
            $parentWrap.addClass('valid');
        } else {
            // Если input пустой, удаляем класс 'valid' у родителя
            $parentWrap.removeClass('valid');
        }
    });

    // Убираем класс 'focus' при клике вне input
    $(document).on('click', function (e) {
        if (!$(e.target).closest('.wpcf7-form-control-wrap').length) {
            $('.wpcf7-form .wpcf7-form-control-wrap').removeClass('focus');
        }
    });


})