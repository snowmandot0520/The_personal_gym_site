!(function ($) {
  "use strict";

  let vh = window.innerHeight * 0.01;
  let vw = window.innerWidth * 0.01;
  console.log(window.innerWidth);
  document.documentElement.style.setProperty('--vh', `${vh}px`);
  document.documentElement.style.setProperty('--vw', `${vw}px`);

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 1000);
    return false;
  });

  // Toggle .header-scrolled
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }


  // Smooth scroll for the navigation menu and links with .scrollto classes
  var scrolltoOffset = $('#header').outerHeight() - 1;

  $(document).on('click', 'a', function (e) {

    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        e.preventDefault();

        var scrollto = target.offset().top - scrolltoOffset;

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }

        $('html, body').animate({
          scrollTop: scrollto
        }, 1000);

        if ($(this).parents('.nav-menu, .mobile-nav-menu').length) {
          $('.nav-menu .active, .mobile-nav-menu .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle').toggleClass('toggle-active');
          $('.mobile-nav-overly').fadeOut();
        }

        return false;
      }
    }
  });

  // Activate smooth scroll on page load with hash links in the url
  $(document).ready(function () {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top - scrolltoOffset;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1000);
      }
    }
  });

  // Mobile Navigation
  $('body').prepend('<button type="button" class="mobile-nav-toggle"><span class="toggle-icon"><span></span><span></span><span></span></span></button>');
  $('body').append('<div class="mobile-nav-overly"></div>');

  $(document).on('click', '.mobile-nav-toggle', function (e) {
    $('body').toggleClass('mobile-nav-active');
    $('.mobile-nav-toggle').toggleClass('toggle-active');
    $('.mobile-nav-overly').toggle();
  });

  $(document).on('click', '.mobile-nav-menu .drop-down > a', function (e) {
    e.preventDefault();
    $(this).next().slideToggle(300);
    $(this).parent().toggleClass('active');
  });

  $(document).click(function (e) {
    var container = $("#mobile-nav, .mobile-nav-toggle");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ($('body').hasClass('mobile-nav-active')) {
        $('body').removeClass('mobile-nav-active');
        $('.mobile-nav-toggle').toggleClass('toggle-active');
        $('.mobile-nav-overly').fadeOut();
      }
    }
  });


  // modal
  var $modal = $(".modal");

  $(document).on('click', '[data-toggle="modal"]', function (e) {
    var target = $(this).attr("href") ? $(this).attr("href") : $(this).attr("data-target");
    if (target.length !== 0 && $(document).has(target).length !== 0) {
      e.preventDefault();
      var $selecedModal = $(target);
      $('body').toggleClass('modal-open');
      $selecedModal.show();
      setTimeout(function () {
        $selecedModal.toggleClass('show');
      }, 100);
      return false;
    }
  });

  $(document).click(function (e) {
    var container = $(".modal .modal-content");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ($('body').hasClass('modal-open')) {
        $('body').removeClass('modal-open');
        $modal.removeClass('show');
        setTimeout(function () {
          $modal.hide();
        }, 300);
      }
    }
  });

  $(document).on('click', '.modal .close, [data-dismiss="modal"]', function (e) {
    $('body').removeClass('modal-open');
    $modal.removeClass('show');
    setTimeout(function () {
      $modal.hide();
    }, 300);
  });

  // accordion jquery
  $('.accordion-answer:first').show();
  $('.accordion-question:first').addClass('expanded');

  $(document).on('click', '.accordion-question', function (e) {
    var answer = $(this).next();

    $('.accordion-answer').not(answer).slideUp(400);
    $('.accordion-question').not(this).removeClass('expanded');
    $(this).toggleClass('expanded');
    answer.slideToggle(400);
  });

  // swiper
  var mainvisualSwiper = new Swiper(".mainvisual-swiper", {
    slidesPerView: 1,
    spaceBetween: 2,
    loop: true,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: ".mainvisual-swiper-pagination", // Corrected selector
    },
  });

  // var thumbsSwiper = new Swiper(".flow-thumbs-swiper", {
  //   slidesPerView: 1,
  //   spaceBetween: 10,
  //   loop: true,
  //   autoplay:
  //   {
  //     delay: 3000,
  //   },
  //   pagination: {
  //     el: ".swiper-pagination",
  //     clickable: true,
  //   },
  // });

  var newsSwiper = new Swiper(".top-news-swiper", {
    loop: true,
    slidesPerView: 3,
    centeredSlides: false,
    breakpoints: {
      1024: {
        slidesPerView: 3,
      },
      640: {
        slidesPerView: 1,
      },
    },
  });

  var workSwiper = new Swiper(".top-work-swiper", {
    loop: true,
    slidesPerView: 3,
    centeredSlides: false,
    breakpoints: {
      1024: {
        slidesPerView: 3,
      },
      640: {
        slidesPerView: 1,
      },
    },
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

  var workRelatedSwiper = new Swiper(".work-related-swiper", {
    loop: true,
    slidesPerView: 3,
    centeredSlides: false,
    breakpoints: {
      1024: {
        slidesPerView: 3,
      },
      640: {
        slidesPerView: 2,
      },
    },
  });

  var newsRelatedSwiper = new Swiper(".news-related-swiper", {
    loop: true,
    slidesPerView: 3,
    centeredSlides: false,
    breakpoints: {
      1024: {
        slidesPerView: 3,
      },
      640: {
        slidesPerView: 2,
      },
    },
  });

  var swiperThumbs = new Swiper(".swiper-thumbs", {
    loop: false,
    slidesPerView: 'auto',
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
      1024: {
        loop: false,
        centeredSlides: false,
        slidesPerView: 4,
      },
      640: {
        loop: false,
        centeredSlides: false,
        slidesPerView: 2.2,
      },
    },
  });

  var swiperMain = new Swiper(".swiper-main", {
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiperThumbs,
    },
  });

  var modal = document.getElementById("myModal");
  var img = document.getElementById("myImg");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function () {
    modal.style.display = "flex";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }

  var modal01 = document.getElementById("myModal01");
  var img01 = document.getElementById("myImg01");
  var modalImg01 = document.getElementById("img02");
  var captionText01 = document.getElementById("caption01");
  img01.onclick = function () {
    modal01.style.display = "flex";
    modalImg01.src = this.src;
    captionText01.innerHTML = this.alt;
  }

  var modal02 = document.getElementById("myModal02");
  var img02 = document.getElementById("myImg02");
  var modalImg02 = document.getElementById("img03");
  var captionText02 = document.getElementById("caption02");
  img02.onclick = function () {
    modal02.style.display = "flex";
    modalImg02.src = this.src;
    captionText02.innerHTML = this.alt;
  }

  var modal03 = document.getElementById("myModal03");
  var img03 = document.getElementById("myImg03");
  var modalImg03 = document.getElementById("img04");
  var captionText03 = document.getElementById("caption03");
  img03.onclick = function () {
    modal03.style.display = "flex";
    modalImg03.src = this.src;
    captionText03.innerHTML = this.alt;
  }

  var modal04 = document.getElementById("myModal04");
  var img04 = document.getElementById("myImg04");
  var modalImg04 = document.getElementById("img05");
  var captionText04 = document.getElementById("caption04");
  img04.onclick = function () {
    modal04.style.display = "flex";
    modalImg04.src = this.src;
    captionText04.innerHTML = this.alt;
  }

  var modal05 = document.getElementById("myModal05");
  var img05 = document.getElementById("myImg05");
  var modalImg05 = document.getElementById("img06");
  var captionText05 = document.getElementById("caption05");
  img05.onclick = function () {
    modal05.style.display = "flex";
    modalImg05.src = this.src;
    captionText05.innerHTML = this.alt;
  }

  var span = document.getElementsByClassName("close")[0];
  span.onclick = function () {
    modal.style.display = "none";
  }

})(jQuery);
