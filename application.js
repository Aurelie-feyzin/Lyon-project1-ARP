$(document).ready(function () {
    $(function () {
        $('.img_menu_burger').on('click', function () {
            $(this).find('h2:first').css({'display': 'none'});
            $(this).find('p:first').css({'display': 'block'});
            $(this).find('p:first').css({'color': 'black'});
            $(this).addClass('burger_highlighted');
        });
    });
    $(function () {
        $('.question').on('click', function () {
            $(this).find('.response:last-child').toggle(500);
        });
    });
});