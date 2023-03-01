
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
        fade: true
      });      

      $('.vitrine').slick({
        slidesToShow: 7,
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
              centerMode: true                     
            }
          }
        ]
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
              dots: false
            }
          }
        ]
      });
  
   
      /* fancybox */
      /*$('[data-fancybox="gallery"]').fancybox({
        buttons: ['close'],
        loop: false,
        protect: true,
      });*/
  
      /* botão do menu */
      /*$('.menuBtn').click(function () {
        $(this).toggleClass('act');
        if ($(this).hasClass('act')) {
          $('.mainMenu').addClass('act');
        } else {
          $('.mainMenu').removeClass('act');
        }
      });*/

  
      if (mobile) {
        $('.depoimentos').slick({
          slidesToShow: 1,
          slidesToScroll: 1,              
          dots: false,              
          autoplay: false,              
          infinite: true,
          arrows: true,
          adaptiveHeight: true          
        });
      }
    });
  
  