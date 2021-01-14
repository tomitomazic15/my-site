$(document).ready(function(){
  $('#my_carousel').slick({
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: false,
    responsive: [
      {
        breakpoint: 600,
        settings: {
          prevArrow: false,
          nextArrow: false
        }
      }
    ]
  });
});

$(document).scroll(function () {
  var $nav = $(".my_nav");
  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
});

AOS.init({
  duration: 1200,
})

