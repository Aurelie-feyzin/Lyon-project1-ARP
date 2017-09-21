$(document).ready(function () {
    //Show Burgers ingredients
    $(function () {
        $('.img_menu_burger').on('click', function () {
            $(this).find('h2:first').css({'display': 'none'});
            $(this).find('p:first').css({'display': 'block'});
            $(this).find('p:first').css({'color': 'black'});
            $(this).addClass('burger_highlighted');
        });
    });

    //Display FAS answers
    $(function () {
        $('.question').on('click', function () {
            $(this).find('.response:last-child').toggle(500);
        });
    });

//Oblige à cliquer pour activer le zoom de la carte
    $(function () {
        $('#city_map').click(function () {
            $(this).find('iframe').addClass('clicked')
        }).mouseleave(function () {
            $(this).find('iframe').removeClass('clicked')
        });
    });

});
