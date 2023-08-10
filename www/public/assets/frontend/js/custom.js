// $(window).scroll(function(){
//     if ($(window).scrollTop() >= 100) {
//      $('header').addClass('sticky');
//      $('header').addClass('transition');
//  }
//  else {
//      $('header').removeClass('sticky');
//      $('header').removeClass('transition');
//  }
// });







if($(window))
{
    new WOW().init();
}













  $(window).on('load', function(){

    $("#preloader").removeClass("loader_show");

    $("#preloader").addClass("loaded");

    $(".loader").addClass("fadeout");

  });








    /*=====================================*/
/* Header Sticky : Start */
var lastScroll = 0;
var headheight = jQuery("header.header_main").outerHeight();
jQuery(window).scroll(function () {
    var scroll1 = jQuery(window).scrollTop();
    if (scroll1 >= headheight) {
        if (scroll1 > lastScroll) {
            jQuery("header.header_main").addClass("is-hidden");
            console.log(headheight);
            setTimeout(function () {
                jQuery("header.header_main").addClass("is-fixed");
            }, 1);
        } else if (scroll1 < lastScroll) {
            jQuery("header.header_main").removeClass("is-hidden");
        }
    } else if (scroll1 < headheight) {
        jQuery("header.header_main").removeClass("is-hidden");
    }
    //console.log(scroll);
    if (scroll1 < 1) {
        jQuery("header.header_main").removeClass("is-fixed");
    }

    lastScroll = scroll1;

});
/* Header Sticky : End */
/*=====================================*/








jQuery(".insta-video").on('click', function(event) {
    //event.preventDefault();
    var reel_class = "."+$(this).attr('id');
    $(this).parent('div').find(reel_class).toggle();
});





$(".insta-play-icon").on("click",function(e){
    e.preventDefault();

    var videoId = '#'+$(this).data("reel");
    var videoObj = document.querySelector(videoId);
    if (videoObj.paused || videoObj.ended) {
        videoObj.play();
        $(this).css('opacity', 0);
    } else {
        videoObj.pause();

        $(this).css('opacity', 1);
    }

});

