var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 10,
    // init: false,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      '@0.00': {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      '@0.75': {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      '@1.00': {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      '@1.50': {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    }
  });

  
 
    $(function(){
          $(".anahaberSliderBaslikmetini").pKisalt({limit: 50, goster: false});
          $(".mansethaberSliderBaslikmetini").pKisalt({limit: 50, goster: false});
          $(".downNewsaciklama").pKisalt({limit: 120, goster: false});
          $(".haberTitleKisalt").pKisalt({limit: 50, goster: false});
  
          $(".newsNewstitle").pKisalt({limit: 155, goster: false});
          $(".title").pKisalt({limit: 155, goster: false});
          // $(".downfullNewsTitle").pKisalt({limit: 55, goster: false});
          // $(".downfullNewsTitle").pKisalt({limit: 55, goster: false});
    });
     $(function() {
       $('.lazy').lazy({
         effect: "fadeIn",
         effectTime: 300,
         threshold: 0
       });
    });


  var swiper = new Swiper('.swiper-container', {
    speed:1000,
    slidesPerView: 4,
    spaceBetween: 10,
    direction: 'horizontal',
    navigation: 
		{
		  nextEl: '.swiper-button-next',
		  prevEl: '.swiper-button-prev',
		}, autoplay: 
    {
      delay: 2000,
    },
    breakpoints: {
      '@0.00': {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      '@0.75': {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      '@1.00': {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      '@1.50': {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    }
  });

   $(document).ready(function() {
    
     /* Every time the window is scrolled ... */
     $(window).scroll( function(){
    
         /* Check the location of each desired element */
        $('.hideme').each( function(_i){
            
             var bottom_of_object = $(this).offset().top + $(this).outerHeight();
           
             var bottom_of_window = $(window).scrollTop() + $(window).height();
             
             /* If the object is completely visible in the window, fade it it */
             if( bottom_of_window > bottom_of_object ){
              console.log("bottom_of_object : "+" "+bottom_of_object);
              console.log("bottom_of_window : "+" "+bottom_of_window);
                 $(this).css('opacity','1');
                 $(this).css('top','0');
             }
        }); 
     });
 });

