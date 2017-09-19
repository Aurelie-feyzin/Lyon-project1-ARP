$(document).ready(function () {
    $(function () {
        $('.img_menu_burger').on('click', function () {
            $(this).find('h2:first').css({'display': 'none'});
            $(this).find('p:first').css({'display': 'block'});
            $(this).addClass('burger_highlighted');
        });
    });
});