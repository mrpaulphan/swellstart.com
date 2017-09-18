var $ = require('jquery');
var Slick = require('slick-carousel');

module.exports = (function() {
  return {
    init: function() {
      // Photography
      $('.gallery__slider-for').each(function(key, item) {
        var sliderFor = '#gallery__slider-for--' + key;
        var sliderNav = '#gallery__slider-nav--' + key;
        var upArrow = '.gallery__arrow-top--' + key;
        var downArrow = '.gallery__arrow-bottom--' + key;

        $(sliderFor).slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: false,
          asNavFor: sliderNav,
          adaptiveHeight: true,
          dots: true,
          pauseOnHover: false,
        });

        $(sliderNav).slick({
          slidesToShow: 5,
          slidesToScroll: 1,
          asNavFor: sliderFor,
          dots: false,
          infinite: true,
          adaptiveHeight: true,
          centerMode: false,
          prevArrow: upArrow,
          nextArrow: downArrow,
          focusOnSelect: true,
          vertical: true,
          responsive: [{
              breakpoint: 750,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                prevArrow: upArrow,
                nextArrow: downArrow,
                vertical: false,

              }
            },
            {
              breakpoint: 500,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: upArrow,
                nextArrow: downArrow,
                vertical: false,

              }
            }
          ]
        });

        // $(this).on('afterChange', function(event, slick, currentSlide, nextSlide) {
        //   $('.slick-active').first().addClass('firsttttslkfjlsajflsjfljs');
        //   $('.slick-active').last().addClass('firsttttslkfjlsajflsjfljs');
        //
        // });
      });


      // Post Detail
      $('.post__gallery').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        infinite: true,
        dots: true,
        prevArrow: '.post__arrow--back',
        nextArrow: '.post__arrow--next',
      });

      //Splash Page
      $('.splash__carousel').slick({
        autoplay: true,
        autoplaySpeed: 13000,
        infinite: true,
        fade: true,
        cssEase: 'linear',
        pauseOnHover: false,
      });

      var i = 0;
      $('.splash__carousel').on('afterChange', function(event, slick, currentSlide, nextSlide) {
        i++;
        if (i != currentSlide) {
        //  $('.splash__carousel').hide().slick('unslick');
        //  $('.splash__carousel').slick('unslick').addClass('finished');
        }

      });
    } // init
  };
})();
