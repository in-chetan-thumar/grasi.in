// function switchStyle() {
//     if (document.getElementById('styleSwitch').checked) {
//         document.getElementById('gallery').classList.add("custom");
//         document.getElementById('exampleModal').classList.add("custom");
//     } else {
//         document.getElementById('gallery').classList.remove("custom");
//         document.getElementById('exampleModal').classList.remove("custom");
//     }
// }

function openDrawer() {

    document.getElementById("drawer").style.width = "250px";

    document.getElementById("overlay").style.width = "100%";

  }



  function closeDrawer() {

    document.getElementById("drawer").style.width = "0";

    document.getElementById("overlay").style.width = "0";

    document.getElementById("submenu").style.display = "none";

    document.getElementById("servicesMenu").classList.remove("submenu-open");

  }



  function toggleSubmenu() {

    const submenu = document.getElementById("submenu");

    const container = document.getElementById("servicesMenu");

    const isVisible = submenu.style.display === "block";



    submenu.style.display = isVisible ? "none" : "block";

    container.classList.toggle("submenu-open", !isVisible);

  }
  
function reveal() {
    for (var e = document.querySelectorAll(".reveal"), s = 0; s < e.length; s++) {
        var o,
            r = window.innerHeight;
        e[s].getBoundingClientRect().top < r - 150 ? e[s].classList.add("active") : e[s].classList.remove("active");
    }
}

$(document).ready(function () {
    $(".sliderproducts").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        rows: 1,
        autoplay: !0,
        infinite: !0,
        autoplaySpeed: 1e4,
        dots: !1,
        // prevArrow: '<img src="../images/arrowr.svg" class="nav-of-slider nav-next-testimonial-prev">',
        // nextArrow: '<img src="../images/arrowl.svg" class="nav-of-slider nav-next-testimonial-next">',
        prevArrow: '<label class="nav-of-slider nav-next-testimonial-prev"><i class="bi bi-arrow-left-circle fs-2"></i></label>',
        nextArrow: '<label class="nav-of-slider nav-next-testimonial-next"><i class="bi bi-arrow-right-circle fs-2"></i></label>',
        responsive: [
            { breakpoint: 992, settings: { slidesToShow: 2 } },
            { breakpoint: 600, settings: { slidesToShow: 1, rows: 1, dots: !1 } },
        ],
    });
})

$(document).ready(function () {
    $(".slidervideo").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        rows: 1,
        autoplay: !0,
        infinite: !0,
        autoplaySpeed: 1e4,
        dots: !1,
        prevArrow: '<label class="nav-of-slider nav-next-testimonial-prev-mob"><i class="bi bi-arrow-left-circle fs-2"></i></label>',
        nextArrow: '<label class="nav-of-slider nav-next-testimonial-next-mob"><i class="bi bi-arrow-right-circle fs-2"></i></label>',
        responsive: [
            { breakpoint: 992, settings: { slidesToShow: 2 } },
            { breakpoint: 600, settings: { slidesToShow: 1, rows: 1, dots: !1 } },
        ],
    });
})

window.addEventListener("scroll", reveal);

let mybutton = document.getElementById("btn-back-to-top");

window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

scrollFunction();
