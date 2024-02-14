$(window).scroll(function(){
    if ($(window).scrollTop() >= 500) {
     $('header').addClass('sticky');
     $('header').addClass('transition');
 }
 else {
     $('header').removeClass('sticky');
     $('header').removeClass('transition');
 }
});


$(document).ready(function ($) {
//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 500 ||
    document.documentElement.scrollTop > 500
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
});





//LOADER

  $(window).on('load', function(){
    
    $("#preloader").removeClass("loader_show");

    $("#preloader").addClass("hide");

    $(".loader").addClass("fadeout");

  });





if($(window))
{
    new WOW().init();
}



