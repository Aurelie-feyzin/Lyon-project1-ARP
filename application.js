$(document).ready(function(){
    $(function(){
        $('#tour_cities').on('click', 'li',function(){
            var city = $(this).find('.city').text();
            $('#city_map').find('iframe').attr('src', 'https://www.google.com/maps/embed/v1/place?key=AIzaSyAS7xYS2LXWpGbcPfDqFq23s_r2WhYpl4Y&q='+city+'');
            $(this).parent().find('li').addClass('place');
            $(this).parent().find('li').removeClass('selected');
            $(this).toggleClass('selected');
            $(this).toggleClass('place');
        });
    });
});