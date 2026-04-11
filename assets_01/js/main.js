(function ($) {
  $(document).ready(function () {

     // sticky header active
     if ($("#header").length > 0) {
      $(window).on("scroll", function (event) {
        var scroll = $(window).scrollTop();
        if (scroll < 1) {
          $("#header").removeClass("sticky");
        } else {
          $("#header").addClass("sticky");
        }
      });
    }
    
    // pricing-plan-tab

    $("#ce-toggle").on('click', function(event){
      $(".plan-toggle-wrap").toggleClass("active");
    });
    $("#ce-toggle").change(function () {
    if ($(this).is(":checked")) {
    $(".tab-content #yearly").hide();
    $(".tab-content #monthly").show();
    } else {
        $(".tab-content #yearly").show();
        $(".tab-content #monthly").hide();
      }
    });

        $(".header-search-btn").on("click", function (e) {
          e.preventDefault();
          $(".header-search-form-wrapper").addClass("open");
          $('.header-search-form-wrapper input[type="search"]').focus();
          $('.body-overlay').addClass('active');
     });
     $(".tx-search-close").on("click", function (e) {
          e.preventDefault();
          $(".header-search-form-wrapper").removeClass("open");
          $("body").removeClass("active");
          $('.body-overlay').removeClass('active');
     });


                //testimonial 1
                $(".tes1-slider").slick({
                  margin: "30",
                  slidesToShow: 1,
                  arrows: true,
                  centerMode: true,
                  loop: true,
                  centerMode: false,
                  prevArrow: $(".testimonial-next-arrow"),
                  nextArrow: $(".testimonial-prev-arrow"),
                  draggable: true,
                  fade: false,
                  responsive: [
                    {
                      breakpoint: 769,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 1,
                      },
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 1,
                      },
                    },
                  ],
                });

                //testimonial 6
                $(".tes6-slider").slick({
                  margin: "30",
                  slidesToShow: 3,
                  arrows: true,
                  centerMode: true,
                  loop: true,
                  centerMode: false,
                  prevArrow: $(".tes6-next-arrow"),
                  nextArrow: $(".tes6-prev-arrow"),
                  draggable: true,
                  fade: false,
                  responsive: [
                    {
                      breakpoint: 769,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 1,
                      },
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 1,
                      },
                    },
                  ],
                });

                //testimonial 7
                $(".tes7-slider").slick({
                  margin: "30",
                  slidesToShow: 1,
                  arrows: true,
                  centerMode: true,
                  loop: true,
                  centerMode: false,
                  prevArrow: $(".tes7-next-arrow"),
                  nextArrow: $(".tes7-prev-arrow"),
                  draggable: true,
                  fade: false,
                  responsive: [
                    {
                      breakpoint: 769,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 1,
                      },
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 1,
                      },
                    },
                  ],
                });

                 //industris 9
                 $(".industris-slider1").slick({
                  margin: "30",
                  slidesToShow: 4,
                  arrows: true,
                  centerMode: true,
                  loop: true,
                  centerMode: false,
                  prevArrow: $(".tes7-next-arrow"),
                  nextArrow: $(".tes7-prev-arrow"),
                  draggable: true,
                  fade: false,
                  autoplay: true,
                  responsive: [
                    {
                      breakpoint: 769,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 2,
                      },
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 1,
                      },
                    },
                  ],
                });

                //industris 9
                $(".industris-slider2").slick({
                  margin: "30",
                  slidesToShow: 4,
                  arrows: true,
                  centerMode: true,
                  loop: true,
                  centerMode: false,
                  autoplay: true,
                  prevArrow: $(".tes7-next-arrow"),
                  nextArrow: $(".tes7-prev-arrow"),
                  draggable: true,
                  fade: false,
                  responsive: [
                    {
                      breakpoint: 769,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 2,
                      },
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 1,
                      },
                    },
                  ],
                });

                //case study
                $(".case9-slider").slick({
                  margin: "30",
                  slidesToShow: 3,
                  arrows: true,
                  centerMode: true,
                  loop: true,
                  centerMode: false,
                  autoplay: true,
                  prevArrow: $(".case9-next-arrow"),
                  nextArrow: $(".case9-prev-arrow"),
                  draggable: true,
                  fade: false,
                  responsive: [
                    {
                      breakpoint: 769,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 2,
                      },
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 1,
                      },
                    },
                  ],
                });

                //testimonial 9
                // $(".tes9-slider").slick({
                //   margin: "30",
                //   slidesToShow: 4,
                //   arrows: true,
                //   dots: true,
                //   centerMode: true,
                //   loop: true,
                //   centerMode: false,
                //   autoplay: true,
                //   prevArrow: $(".tes9-next-arrow"),
                //   nextArrow: $(".tes9-prev-arrow"),
                //   draggable: true,
                //   fade: false,
                //   responsive: [
                //     {
                //       breakpoint: 769,
                //       settings: {
                //         arrows: false,
                //         centerMode: false,
                //         centerPadding: "40px",
                //         slidesToShow: 2,
                //       },
                //     },
                //     {
                //       breakpoint: 480,
                //       settings: {
                //         arrows: false,
                //         centerMode: false,
                //         centerPadding: "40px",
                //         slidesToShow: 1,
                //       },
                //     },
                //   ],
                // });
// Testimonial 9
// $(".tes9-slider").slick({
//   margin: "30",
//   slidesToShow: 5,
//   arrows: true,
//   dots: true,
//   centerMode: false,
//   loop: true,
//   autoplay: false, // Auto slide बंद कर दिया
//   prevArrow: $(".tes9-next-arrow"),
//   nextArrow: $(".tes9-prev-arrow"),
//   draggable: true,
//   fade: false,
//   responsive: [
//     {
//       breakpoint: 769,
//       settings: {
//         arrows: false,
//         centerMode: false,
//         centerPadding: "40px",
//         slidesToShow: 2,
//       },
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         arrows: false,
//         centerMode: false,
//         centerPadding: "40px",
//         slidesToShow: 1,
//       },
//     },
//   ],
// });
$(".tes9-slider").slick({
  margin: "30",
  slidesToShow: 5,
  arrows: true,
  dots: true,
  centerMode: false,
  loop: false, // Loop बंद कर दिया
  autoplay: false, // Auto slide बंद
  autoplaySpeed: 0, // Auto slide की स्पीड 0 कर दी
  prevArrow: $(".tes9-next-arrow"),
  nextArrow: $(".tes9-prev-arrow"),
  draggable: true,
  fade: false,
  responsive: [
    {
      breakpoint: 1200, // Max 1200px
      settings: {
        slidesToShow: 4, // 1000px - 1200px → 4 slides दिखेंगी
      },
    },
    {
      breakpoint: 756, // Max 756px
      settings: {
        slidesToShow: 3, // 576px - 756px → 3 slides दिखेंगी
      },
    },
    {
      breakpoint: 576, // Max 576px
      settings: {
        slidesToShow: 2, // 480px - 576px → 3 slides दिखेंगी
      },
    },
    {
      breakpoint: 480, // Max 480px
      settings: {
        slidesToShow: 1, // 0px - 480px → 1 slide दिखेगी
      },
    },
  ],
});



               // Service 10
$(".service10-slider").slick({
  margin: "30",
  slidesToShow: 4,
  arrows: true,
  dots: false,
  centerMode: true,
  loop: true,
  centerMode: false,
  autoplay: true,
  prevArrow: $(".service10-next-arrow"),
  nextArrow: $(".service10-prev-arrow"),
  draggable: true,
  fade: false,
  responsive: [
    {
      breakpoint: 1200, // From 768px to 1199px
      settings: {
        slidesToShow: 3,
        arrows: true,
        centerMode: false,
        centerPadding: "40px",
      },
    },
    {
      breakpoint: 769,
      settings: {
        arrows: false,
        centerMode: false,
        centerPadding: "40px",
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: false,
        centerPadding: "40px",
        slidesToShow: 1,
      },
    },
  ],
});


              
                // Initialize Slick slider
                $(".service12-slider").slick({
                  margin: "30",
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  arrows: true,
                  dots: false,
                  autoplay: true,
                  autoplaySpeed: 3000,
                  speed: 1000,
                  easing: "ease-in-out",
                  prevArrow: $(".service12-next-arrow"),
                  nextArrow: $(".service12-prev-arrow"),
                  draggable: true,
                  fade: false,
                  responsive: [
                    {
                      breakpoint: 769,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows: false,
                        centerMode: false,
                      },
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        centerMode: false,
                      },
                    },
                  ],
                });
              
                // Change background image of ::before after slide transition
                $(".service12-slider").on("afterChange", function (event, slick, currentSlide) {
                  let newBgImage = "";
              
                  // Hard-code background images based on the slide group
                  if (currentSlide >= 0 && currentSlide < 3) {
                    newBgImage = "url('../img/home/fregomatrics_pg.png')";
                  } else if (currentSlide >= 3 && currentSlide < 6) {
                    newBgImage = "url('../img/home/Delta_pg.png')";
                  } else if (currentSlide >= 6 && currentSlide < 9) {
                    newBgImage = "url('../img/home/Sukanya_pg.png')";
                  } else if (currentSlide >= 9 && currentSlide < 12) {
                    newBgImage = "url('../img/home/Aakriti_pg.png')";
                  }else if (currentSlide >= 12 && currentSlide < 15) {
                    newBgImage = "url('../img/home/Jagdamba_pg.png')";
                  }else if (currentSlide >= 15 && currentSlide < 18) {
                    newBgImage = "url('../img/home/Pedssmart_pg.png')";
                  }
              
                  // Update the background image of the ::before pseudo-element by adding it directly via inline CSS
                  $(".service12").css({
                    "--before-bg": newBgImage, // Custom property to set the background of ::before
                  });
                });
           
              
              
              
                        
                         
                //Service 11
                $(".service11-slider").slick({
                  margin: "30",
                  slidesToShow: 3,
                  arrows: true,
                  dots: false,
                  centerMode: true,
                  loop: true,
                  centerMode: false,
                  autoplay: true,
                  prevArrow: $(".service11-next-arrow"),
                  nextArrow: $(".service11-prev-arrow"),
                  draggable: true,
                  fade: false,
                  responsive: [
                    {
                      breakpoint: 769,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 2,
                      },
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 1,
                      },
                    },
                  ],
                });

               
                //tes 10
                $(".tes10-slider").slick({
                  margin: "30",
                  slidesToShow: 1,
                  arrows: true,
                  dots: false,
                  centerMode: true,
                  loop: true,
                  centerMode: false,
                  autoplay: true,
                  prevArrow: $(".tes10-next-arrow"),
                  nextArrow: $(".tes10-prev-arrow"),
                  draggable: true,
                  fade: false,
                  responsive: [
                    {
                      breakpoint: 769,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 1,
                      },
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 1,
                      },
                    },
                  ],
                });


                 // project slider 6
                 $(".project6-slider").slick({
                  margin: "30",
                  slidesToShow: 3,
                  arrows: false,
                  centerMode: true,
                  loop: true,
                  centerMode: false,
                  draggable: true,
                  fade: false,
                  dots: true,
                  responsive: [
                    {
                      breakpoint: 769,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 1,
                      },
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "40px",
                        slidesToShow: 1,
                      },
                    },
                  ],
                });

                //-- project slider --
                $(".project-slider").owlCarousel({
                  loop: true,
                  nav: true,
                  center: true,
                  dots: false,
                  // autoplay: true,
                  // autoplayTimeout: 3000,
                  items: 3,
                  autoplay: true,
                  autoplayTimeout: 5000,
                  smartSpeed: 1000,
                  slideSpeed: 600,
                  navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
                  responsive: {
                    0: {
                      items: 1,
                    },
                    900: {
                      items: 3,
                    },
                  },
                });

                $('.tes5-slider').owlCarousel({
                  loop:true,
                  margin:10,
                  responsiveClass:true,
                  nav: false,
                  autoplay: 1000,
                  responsive:{
                      0:{
                          items:1,
                          nav:false
                      },
                      600:{
                          items:3,
                          nav:false
                      },
                      1000:{
                          items:3,
                          nav:false,
                          loop:false
                      }
                  }
              });


                //=== logo slider ===

                $(".logo-slider").owlCarousel({
                  loop: true,
                  nav: false,
                  center: false,
                  dots: false,
                  // autoplay: true,
                  // autoplayTimeout: 3000,
                  items: 3,
                  autoplay: true,
                  autoplayTimeout: 5000,
                  smartSpeed: 1000,
                  slideSpeed: 600,
                  navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],

                  responsive: {
                    0: {
                      items: 2,
                    },
                    426: {
                      items: 4,
                    },
                    900: {
                      items: 4,
                    },
                  },
                });

                //==== home2 solider =====

                $(".tes2-slider").owlCarousel({
                  loop: true,
                  nav: false,
                  center: true,
                  dots: true,
                  autoplay: true,
                  autoplayTimeout: 3000,
                  items: 3,
                  autoplay: true,
                  autoplayTimeout: 5000,
                  smartSpeed: 1000,
                  slideSpeed: 600,

                  responsive: {
                    0: {
                      items: 1,
                    },
                    900: {
                      items: 3,
                    },
                  },

                });

                //-- brands6 slider --

                $(".brands6-slider").owlCarousel({
                  loop: true,
                  nav: false,
                  center: true,
                  dots: true,
                  autoplay: true,
                  autoplayTimeout: 3000,
                  items: 3,
                  autoplay: true,
                  autoplayTimeout: 5000,
                  smartSpeed: 1000,
                  slideSpeed: 600,

                  responsive: {
                    0: {
                      items: 2,
                    },
                    500: {
                      items: 3,
                    },
                    900: {
                      items: 5,
                    },
                  },

                });


   //testimonial slider
    $(".testimonial-nav").slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      asNavFor: ".slider-testimonial",
      dots: false,
      loop: true,
      centerMode: true,
      focusOnSelect: true,
      arrows: false,
    });

    $(".slider-testimonial").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      prevArrow: $(".testimonial-prev-arrow"),
      nextArrow: $(".testimonial-next-arrow"),
      fade: true,
      loop: true,
      asNavFor: ".testimonial-nav",
    });



  //Aos animation active

    AOS.init({
      offset: 100,
      duration: 400,
      easing: "ease-in-out",
      anchorPlacement: "top-bottom",
      disable: "mobile",
    });


    //Video poppup
    if ($(".play-btn").length > 0) {
      $(".play-btn").magnificPopup({
        type: "iframe",
      });
    }
    
        // page-progress
        var progressPath = document.querySelector(".progress-wrap path");
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition =
          "none";
        progressPath.style.strokeDasharray = pathLength + " " + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition =
          "stroke-dashoffset 10ms linear";
        var updateProgress = function () {
          var scroll = $(window).scrollTop();
          var height = $(document).height() - $(window).height();
          var progress = pathLength - (scroll * pathLength) / height;
          progressPath.style.strokeDashoffset = progress;
        };
        updateProgress();
        $(window).scroll(updateProgress);
        var offset = 50;
        var duration = 550;
        jQuery(window).on("scroll", function () {
          if (jQuery(this).scrollTop() > offset) {
            jQuery(".progress-wrap").addClass("active-progress");
          } else {
            jQuery(".progress-wrap").removeClass("active-progress");
          }
        });
        jQuery(".progress-wrap").on("click", function (event) {
          event.preventDefault();
          jQuery("html, body").animate({ scrollTop: 0 }, duration);
          return false;
        });
    
        
        //--- hover action ----
        $('.cs_hover_active').on('mouseenter', function() {
          $(this).addClass('active').siblings().removeClass('active');
         }).on('mouseleave', function() {
          $(this).removeClass('active');
        });
    });

    //preloader
    // $(window).on("load", function (event) {
    //   setTimeout(function () {
    //     $(".preloader-area").fadeToggle();
    //   }, 500);
    // });

         //preloader
        $(window).on("load", function (event) {

          setTimeout(function() {
            $('#ctn-preloader').addClass('loaded');
            // Una vez haya terminado el preloader aparezca el scroll
            $('body').removeClass('no-scroll-y');
        
            if ($('#ctn-preloader').hasClass('loaded')) {
              // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
              $('#preloader').delay(1000).queue(function() {
                $(this).remove();
              });
            }
          }, 1000);

          // $('.tlt').textillate();

  });

    //accordion1 active class
    const colors = $(".accordion1 .accordion-item");

    colors.on("click", function () {
      $(".accordion1 .accordion-item").removeClass("active");
      $(this).addClass("active");
     });

        //accordion2 active class
        const colors2 = $(".accordion2 .accordion-item");

        colors2.on("click", function () {
        $(".accordion2 .accordion-item").removeClass("active");
        $(this).addClass("active");
        });

        
})(jQuery);


	////brand-slider-2
	var slider = new Swiper('.tp-slider-active', {
		speed: 500,
		slidesPerView: 1,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
		loop: true,
		effect:'fade',
		breakpoints: {
			'1400': {
				slidesPerView: 1,
			},
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		a11y: false,
		// Navigation arrows
		navigation: {
			prevEl: '.slider-prev',
			nextEl: '.slider-next',
		},

	});