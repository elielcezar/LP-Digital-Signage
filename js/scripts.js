$(document).ready(function () {
  const w = window.innerWidth;
  const h = window.innerHeight;
  const mobile = w < h;
  const desktop = h < w;
  const menuMobile = document.querySelector('.menu-mobile .mainMenu');

  $('.fancybox').fancybox();

  $('.fancybox-media').attr('rel', 'media-gallery').fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',
					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

  /* CARROSSEL */
  $('.fade').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    dots: true,
    infinite: true,
    arrows: false,
    adaptiveHeight: true,
    fade: true,
  });

  $('.vitrine').slick({
    slidesToShow: 8,
    slidesToScroll: 1,
    autoplay: false,
    dots: false,
    infinite: true,
    arrows: true,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          dots: false,
          centerMode: true,
        },
      },
    ],
  });

  $('.depoimentos').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          dots: false,
          centerMode: true,
        },
      },
    ],
  });

  $('.solucoes').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    dots: true,
    infinite: true,
    arrows: true,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
        },
      },
    ],
  });

  var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11
      ? '(00) 00000-0000'
      : '(00) 0000-00009';
  },
  spOptions = {
    onKeyPress: function (val, e, field, options) {
      field.mask(SPMaskBehavior.apply({}, arguments), options);
    },
  };
  $('#phone').mask(
    SPMaskBehavior,
    spOptions,
  );

  /* fancybox */
  /*$('[data-fancybox="gallery"]').fancybox({
        buttons: ['close'],
        loop: false,
        protect: true,
      });*/

 
});
