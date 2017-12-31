jQuery(document).ready(function () {

  jQuery('.multiple-slide').slick({
    speed: 1000,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    appendArrows: '.introducing-section-slider .pagination',
    prevArrow: '<button class="slick-arrow slick-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>',
    nextArrow: '<button class="slick-arrow slick-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>',
  });

  jQuery('.slider-videos-section .slides').slick({
    speed: 500,
    fade: true,
    appendArrows: '.slider-videos-section .pagination',
    prevArrow: '<button class="slick-arrow slick-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>',
    nextArrow: '<button class="slick-arrow slick-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>',
  });

  jQuery('.preview-slider').slick({
    infinite: true,
    speed: 1500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    appendArrows: false,
    autoplaySpeed: 3000,
  });

  jQuery('#popup-trigger').click(function (event) {
    event.preventDefault();

    jQuery('#popup').addClass('active');
    jQuery('#overlay').fadeIn();

    jQuery('#popup-close, #overlay').click(function (event) {
      event.preventDefault();
      jQuery('#popup').removeClass('active');
      jQuery('#overlay').fadeOut();
    });
  });
});


