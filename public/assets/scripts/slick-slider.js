$(document).ready(function(){
    $('.carousel-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        centerMode: false,
        infinite: true,
    });

    $('.responsive-slider').slick({
        dots: false,
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
            }
          },
          {
            breakpoint: 938,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
            }
          },
          {
            breakpoint: 738,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
            }
          }
        ]
      });

      $('.sponsor-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        centerMode: true,
        infinite: true,
      });
      $('.partner-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        centerMode: true,
        infinite: true,
      });
});           