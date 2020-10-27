$(function(){

    $(window).on("scroll", function() {
        $('.containerr,.work,.niba,.main-detail,.yokubou-text,.member').each(function(index, el) {
            if($(window).scrollTop() > ($(el).offset().top - $(window).height() / 1.5)){
                $(el).addClass('is-over');
            }
        });
    });

    $(window).load(function() {
        var img = $("#slideshow").children("img"), 
            num = img.length, 
            count = 0, 
            interval = 3000;
        
        img.eq(0).addClass("show");
        
        setTimeout(slide, interval);
        
        function slide() {
            img.eq(count).removeClass("show");
            count++;
            if(count >= num) {
                count = 0;
            }
            img.eq(count).addClass("show");
            setTimeout(slide, interval);
        }
    });
    
    $('.hamburger').click(function() {
        $(this).toggleClass('active');
 
        if ($(this).hasClass('active')) {
            $('.globalMenuSp').addClass('active');
        } else {
            $('.globalMenuSp').removeClass('active');
        }
    });

    $(window).on('load scroll', function() {
        if($(this).scrollTop() > $('.yokubou').outerHeight()) {
            $('.header').addClass('fixed');
        } else {
            $('.header').removeClass('fixed');
        }
    });
});