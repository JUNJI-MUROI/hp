$(function(){
    $('h1').fadeIn(1000);
    $('h2').fadeIn(3000);
    $(window).on("scroll", function() {
        $('.mato,.matome,.containerr,.work,.niba').each(function(index, el) {
            if($(window).scrollTop() > ($(el).offset().top - $(window).height() / 2 )){
                $(el).addClass('is-over');
            }
        });
    });
});