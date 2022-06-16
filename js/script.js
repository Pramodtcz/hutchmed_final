// Sidebar overlay script
$(".navbar-toggler").click(function(){
  $(".screen-overlay").addClass("show");
});


$(".screen-overlay").click(function(event){
        var clickover = $(event.target);
        var _opened = $(".navbar-collapse").hasClass("navbar-collapse");
        if (_opened === true && !clickover.hasClass("navbar-toggler")) {
        $("button.navbar-toggler").click();
        $(".screen-overlay").removeClass("show");
    }
});



// Bact to Top Script Start
jQuery(document).ready(function ($) {
    "use strict";
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#backToTop').fadeIn('slow');
        } else {
            $('#backToTop').fadeOut('slow');
        }
    });
    $('#backToTop').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
// Bact to Top Script End

  // Sticky Header Script Start
$(window).scroll(function () {
    if ($(window).scrollTop() >= 100) {
        $('header').addClass('fixed-header');
    } else {
        $('header').removeClass('fixed-header');
    }
});
// Sticky Header Script End

$('#slide-one').owlCarousel({
    loop: true,
    margin:40,
    nav: false,
    navText: [
      "<i class='fas fa-chevron-left'></i>",
      "<i class='fas fa-chevron-right'></i>"
    ],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 4
      }
    }
  })



// Onload Modal Show Hide Script
  $(document).ready(function(){       
    $('#staticBackdrop').modal('show');
     }); 
  
     $(".tcz-btn-voilet").click(function(){
      $("#staticBackdrop").modal('hide');
  });


  $("a.nav-link").click(function(){
    $("a.nav-link").removeClass("active");
     $(this).addClass('active');
 });