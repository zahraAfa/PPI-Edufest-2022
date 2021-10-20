$(document).ready(function(){
    $('.carousel-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        centerMode: false,
    });

    $('.responsive-slider').slick({
        // dots: true,
        infinite: true,
        speed: 400,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow:"<a class='custom-arrow slick-prev pull-left'><span class='material-icons-round'>arrow_back_ios</span></i></a>",
        nextArrow:"<a class='custom-arrow slick-next pull-right'><span class='material-icons-round'>arrow_forward_ios</span></a>",
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 938,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 738,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
});           