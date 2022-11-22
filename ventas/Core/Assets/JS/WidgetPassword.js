/*!
 Software diseñado para Identidad, todos los derechos reservados
 */

$(document).ready(function () {
    $(document).on('click', '.edit-psw', function(){
        let input = $(this).parent().parent().find('input[type="text"]');

        if ($(input).hasClass('fs-psw')) {
            $(input).removeClass('fs-psw');
        } else {
            $(input).addClass('fs-psw');
        }
    });

    $(document).on('mouseenter mouseleave', '.list-psw', function(){
        let psw = $(this).parent().find('.pass');

        if ($(psw).hasClass('fs-psw')) {
            $(psw).removeClass('fs-psw');
        } else {
            $(psw).addClass('fs-psw');
        }
    });
});