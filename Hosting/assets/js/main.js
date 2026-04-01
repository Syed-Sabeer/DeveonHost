(function ($) {
	"use strict";


/*===========================================
	=            Windows Load          =
=============================================*/
$(window).on('load', function () {
    preloader();
    wowAnimation();
    aosAnimation();
});


/*===========================================
	=            Preloader          =
=============================================*/
function preloader() {
	$('#preloader').delay(0).fadeOut();
};


/*===========================================
	=    		Mobile Menu			      =
=============================================*/
//SubMenu Dropdown Toggle
if ($('.tgmenu__wrap li.menu-item-has-children ul').length) {
	$('.tgmenu__wrap .navigation li.menu-item-has-children').append('<div class="dropdown-btn"><span class="plus-line"></span></div>');
}

//Mobile Nav Hide Show
if ($('.tgmobile__menu').length) {

	var mobileMenuContent = $('.tgmenu__wrap .tgmenu__main-menu').html();
	$('.tgmobile__menu .tgmobile__menu-box .tgmobile__menu-outer').append(mobileMenuContent);

	//Dropdown Button
	$('.tgmobile__menu li.menu-item-has-children .dropdown-btn').on('click', function () {
		$(this).toggleClass('open');
		$(this).prev('ul, .tg-mega-menu-wrap').slideToggle(300);
	});
	//Menu Toggle Btn
	$('.mobile-nav-toggler').on('click', function () {
		$('body').addClass('mobile-menu-visible');
	});

	//Menu Toggle Btn
	$('.tgmobile__menu-backdrop, .tgmobile__menu .close-btn').on('click', function () {
		$('body').removeClass('mobile-menu-visible');
	});
};


/*===========================================
	=     Menu sticky & Scroll to top      =
=============================================*/
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 245) {
		$("#sticky-header").removeClass("sticky-menu");
		$('.scroll-to-target').removeClass('open');
        $("#header-fixed-height").removeClass("active-height");

	} else {
		$("#sticky-header").addClass("sticky-menu");
		$('.scroll-to-target').addClass('open');
        $("#header-fixed-height").addClass("active-height");
	}
});


/*===========================================
	=           Scroll Up  	         =
=============================================*/
if ($('.scroll-to-target').length) {
  $(".scroll-to-target").on('click', function () {
    var target = $(this).attr('data-target');
    // animate
    $('html, body').animate({
      scrollTop: $(target).offset().top
    }, 0);

  });
}



/*===========================================
	=          Data Background    =
=============================================*/
$("[data-background]").each(function () {
	$(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
});

$("[data-bg-color]").each(function () {
	$(this).css("background-color", $(this).attr("data-bg-color"));
});


/*=============================================
	=            Header Top            =
=============================================*/
$(".tg-header__top-close").on("click", function () {
    $(".tg-header__top").toggleClass("active");
});

/*=============================================
	=        Brand Active		      =
=============================================*/
var brandSwiper = new Swiper('.brand-active', {
    // Optional parameters
    slidesPerView: 5,
    spaceBetween: 24,
    loop: true,
    autoplay: {
        delay: 5000,
    },
    breakpoints: {
        '1500': {
            slidesPerView: 6,
        },
        '1200': {
            slidesPerView: 6,
        },
        '992': {
            slidesPerView: 5,
        },
        '768': {
            slidesPerView: 4,
        },
        '576': {
            slidesPerView: 3,
        },
        '0': {
            slidesPerView: 2,
        },
    },
});


/*=============================================
	=        hosting Active		      =
=============================================*/
var brandSwiper = new Swiper('.hosting-active', {
    // Optional parameters
    slidesPerView: 5,
    spaceBetween: 24,
    loop: true,
    breakpoints: {
        '1500': {
            slidesPerView: 5,
        },
        '1200': {
            slidesPerView: 5,
        },
        '992': {
            slidesPerView: 4,
        },
        '768': {
            slidesPerView: 3,
        },
        '576': {
            slidesPerView: 3,
        },
        '0': {
            slidesPerView: 2,
        },
    },
    navigation: {
        nextEl: ".hosting-button-next",
        prevEl: ".hosting-button-prev"
    },
});


/*=============================================
	=        Testimonial Active		      =
=============================================*/
var brandSwiper = new Swiper('.testimonial-active-two', {
    // Optional parameters
    slidesPerView: 4,
    spaceBetween: 24,
    loop: true,
    breakpoints: {
        '1500': {
            slidesPerView: 4,
        },
        '1200': {
            slidesPerView: 4,
        },
        '992': {
            slidesPerView: 3,
        },
        '768': {
            slidesPerView: 3,
        },
        '576': {
            slidesPerView: 2,
        },
        '0': {
            slidesPerView: 1,
        },
    },
    // And if we need scrollbar
    navigation: {
        nextEl: ".testimonial-button-next",
        prevEl: ".testimonial-button-prev"
    },
});



/*=============================================
	=    		Testimonial Active			      =
=============================================*/
$('.testimonial-active').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
	nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
	appendArrows: ".testimonial__nav",
    fade: true,
    dots: false,
    asNavFor: '.testimonial-nav'
});
    $('.testimonial-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.testimonial-active',
    centerMode: true,
    focusOnSelect: true,
    dots: false,
    arrows: false,
});

/*=============================================
	=        marquee slider Active		      =
=============================================*/
var swiper = new Swiper(".tg-marquee-active", {
    loop: true,
    freemode: true,
    slidesPerView: 'auto',
    spaceBetween: 0,
    centeredSlides: true,
    allowTouchMove: false,
    speed: 5000,
    autoplay: {
        delay: 1,
        disableOnInteraction: false,
    },
});


$('.tg-marquee-active').hover(function(){
    swiper.autoplay.stop();
}, function(){
    swiper.autoplay.start();
});

/*===========================================
      =      Nice Select Js    =
=============================================*/
$('.select').niceSelect();


/*=============================================
	=    		pricing Active  	       =
=============================================*/
$(".pricing-tab-switcher, .tab-btn").on("click", function () {
	$(".pricing-tab-switcher, .tab-btn").toggleClass("active"),
	$(".pricing-tab").toggleClass("seleceted"),
	$(".pricing__price").toggleClass("change-subs-duration");
});

/*=============================================
	=    		Intersection Observer 	       =
=============================================*/
if (!!window.IntersectionObserver) {
let observer = new IntersectionObserver((entries, observer) => {
	entries.forEach(entry => {
	if (entry.isIntersecting) {
		entry.target.classList.add("active-animation");
		//entry.target.src = entry.target.dataset.src;
		observer.unobserve(entry.target);
	}
	});
}, {
	rootMargin: "0px 0px -100px 0px"
});
document.querySelectorAll('.has-animation').forEach(block => {
	observer.observe(block)
});
} else {
document.querySelectorAll('.has-animation').forEach(block => {
	block.classList.remove('has-animation')
});
}

/*=============================================
	=        Faq Active 	       =
=============================================*/
$(".accordion-header").on('click', function () {
	$(".accordion-item").removeClass("active"),
		$(this).parent().addClass("active")
});



/*=============================================
	=        Tooltip Active 	       =
=============================================*/
$(".tooltip-item").on('click', function () {
	$(".tooltip-item").removeClass("active"),
		$(this).addClass("active")
});

/*=============================================
	=       Pricing Active	       =
=============================================*/
$(".pricing__select").on('click', function () {
	$(this).parent().toggleClass("active")
});



/*=============================================
	=        Counter Up 	       =
=============================================*/
$(".counter-number").counterUp({
    delay: 10,
    time: 1000,
});


/*===========================================
=         Marquee Active         =
=============================================*/
if ($(".marquee_mode").length) {
    $('.marquee_mode').marquee({
        speed: 50,
        gap: 0,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: true,
        pauseOnHover: true,
        startVisible:true,
    });
}

/*=============================================
	=    		 Jarallax Active  	         =
=============================================*/
$('.jarallax').jarallax({
	speed: 0.2,
});

/*===========================================
	=        Magnific Popup    =
=============================================*/
$('.popup-image').magnificPopup({
	type: 'image',
	gallery: {
		enabled: true
	}
});

/* magnificPopup video view */
$('.popup-video').magnificPopup({
	type: 'iframe'
});

/*===========================================
      =       Odometer Active    =
=============================================*/
$('.odometer').appear(function (e) {
	var odo = $(".odometer");
	odo.each(function () {
		var countNumber = $(this).attr("data-count");
		$(this).html(countNumber);
	});
});


/*===========================================
	=        Wow Active      =
=============================================*/
function wowAnimation() {
	var wow = new WOW({
		boxClass: 'wow',
		animateClass: 'animated',
		offset: 0,
		mobile: false,
		live: true
	});
	wow.init();
}


/*===========================================
	=           Aos Active       =
=============================================*/
function aosAnimation() {
	AOS.init({
		duration: 1000,
		mirror: true,
		once: true,
		disable: 'mobile',
	});
}


})(jQuery);