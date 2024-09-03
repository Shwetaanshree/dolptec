(function ($) {
    'use strict';

    /*=============================================
	=    		 Preloader			      =
=============================================*/
    $('#preloader').delay(0).fadeOut();
    // }
    var loader = document.getElementById('preloader');
    window.addEventListener('load', function () {
        loader.style.display = 'none';
    });

    /*=============================================
	=    		 Wow Active  	         =
=============================================*/
    function wowAnimation() {
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: false,
            live: true,
        });
        wow.init();
    }

    /*=============================================
	=    		Mobile Menu			      =
=============================================*/

    //SubMenu Dropdown Toggle
    if ($('.menu-area li.menu-item-has-children ul').length) {
        $('.menu-area .navigation li.menu-item-has-children').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');
    }
    //Mobile Nav Hide Show
    if ($('.mobile-menu').length) {
        var mobileMenuContent = $('.menu-area .main-menu').html();
        $('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);

        //Dropdown Button
        $('.mobile-menu li.menu-item-has-children .dropdown-btn').on('click', function () {
            $(this).toggleClass('open');
            $(this).prev('ul').slideToggle(300);
        });
        //Menu Toggle Btn
        $('.mobile-nav-toggler').on('click', function () {
            $('body').addClass('mobile-menu-visible');
        });

        //Menu Toggle Btn
        $('.menu-backdrop, .mobile-menu .close-btn').on('click', function () {
            $('body').removeClass('mobile-menu-visible');
        });
    }

    /*=============================================
	=     Menu sticky & Scroll to top      =
=============================================*/
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $('#sticky-header').removeClass('sticky-menu');
            $('.scroll-to-target').removeClass('open');
        } else {
            $('#sticky-header').addClass('sticky-menu');
            $('.scroll-to-target').addClass('open');
        }
    });

    /*=============================================
	=    		 Scroll Up  	         =
=============================================*/
    if ($('.scroll-to-target').length) {
        $('.scroll-to-target').on('click', function () {
            var target = $(this).attr('data-target');
            // animate
            $('html, body').animate(
                {
                    scrollTop: $(target).offset().top,
                },
                1000
            );
        });
    }

    //====== Progress Bar
    if ($('.count-bar').length) {
        $('.count-bar').appear(
            function () {
                var el = $(this);
                var percent = el.data('percent');
                $(el).css('width', percent).addClass('counted');
            },
            {
                accY: -50,
            }
        );
    }

    //====== Magnific Popup
    if ($('.play-btn').length) {
        $('.play-btn').magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: true,
            fixedContentPos: false,
        });
    }

    /*=============================================
	=    		Odometer Active  	       =
=============================================*/
    $('.odometer').appear(function (e) {
        var odo = $('.odometer');
        odo.each(function () {
            var countNumber = $(this).attr('data-count');
            $(this).html(countNumber);
        });
    });

    /*=============================================
	=    		 		      =
=============================================*/

    $(window).on('load', function () {
        wowAnimation();
        thmSwiperInit();
    });
    ///////////////////////////////////////////////////
    // accordion Js

    $('.accordion-title').click(function () {
        $('.accordion-title').not(this).removeClass('open');
        $('.accordion-title').not(this).next().slideUp(300);
        $(this).toggleClass('open');
        $(this).next().slideToggle(300);
    });
    ///////////////////////////////////////////////////
    // hero-slider Js
    $('.hero-slider').owlCarousel({
        //add owl carousel in activation class
        loop: true,
        autoplay: false,
        margin: 0,
        items: 4,
        nav: true,
        navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-right-arrow'></i>"],
        dots: true,
        dotsEach: 1,
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
        responsive: {
            0: {
                items: 1,
            },
            767: {
                items: 1,
            },
            992: {
                items: 1,
            },
            1200: {
                items: 1,
            },
        },
    });

    ///////////////////////////////////////////////////
    // project-slider Js
    $('.project-slider').owlCarousel({
        //add owl carousel in activation class
        loop: true,
        autoplay: false,
        margin: 30,
        items: 4,
        nav: true,
        navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-right-arrow'></i>"],
        dots: true,
        dotsEach: 1,
        responsive: {
            0: {
                items: 1,
            },
            767: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3,
            },
        },
    });
    ///////////////////////////////////////////////////
    // project-slider2 Js
    $('.project-slider2').owlCarousel({
        //add owl carousel in activation class
        loop: true,
        autoplay: false,
        margin: 30,
        items: 4,
        nav: true,
        navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-right-arrow'></i>"],
        dots: false,
        dotsEach: 1,
        responsive: {
            0: {
                items: 1,
            },
            767: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3,
            },
        },
    });

    ///////////////////////////////////////////////////
    // brand-slider Js
    $('.brand-slider').owlCarousel({
        //add owl carousel in activation class
        loop: true,
        autoplay: true,
        margin: 30,
        items: 4,
        nav: false,
        dots: true,
        dotsEach: 1,
        responsive: {
            0: {
                items: 2,
            },
            767: {
                items: 3,
            },
            992: {
                items: 5,
            },
            1200: {
                items: 5,
            },
        },
    });
    ///////////////////////////////////////////////////
    // testimonial-slider Js
    $('.testimonial-slider').owlCarousel({
        //add owl carousel in activation class
        loop: true,
        autoplay: true,
        margin: 30,
        items: 4,
        nav: true,
        dots: true,
        dotsEach: 1,
        responsive: {
            0: {
                items: 1,
            },
            767: {
                items: 2,
            },
            992: {
                items: 2,
            },
            1200: {
                items: 3,
            },
        },
    });
    ///////////////////////////////////////////////////
    // testimonial-slider2 Js
    $('.testimonial-slider2').owlCarousel({
        //add owl carousel in activation class
        loop: true,
        autoplay: true,
        margin: 30,
        items: 4,
        nav: true,
        navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-right-arrow'></i>"],
        dots: false,
        dotsEach: 1,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            767: {
                items: 1,
            },
            992: {
                items: 1,
            },
            1200: {
                items: 1,
            },
        },
    });
    ///////////////////////////////////////////////////
    // testimonial-slider3 Js
    $('.testimonial-slider3').owlCarousel({
        //add owl carousel in activation class
        loop: true,
        autoplay: true,
        margin: 30,
        items: 4,
        nav: true,
        dots: true,
        dotsEach: 1,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            767: {
                items: 1,
            },
            992: {
                items: 2,
            },
            1200: {
                items: 2,
            },
        },
    });

    ///////////////////////////////////////////////////
    // team-slider Js
    $('.team-slider').owlCarousel({
        //add owl carousel in activation class
        loop: true,
        autoplay: false,
        margin: 30,
        items: 4,
        nav: true,
        navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-right-arrow'></i>"],
        dots: false,
        dotsEach: 1,
        responsive: {
            0: {
                items: 1,
            },
            767: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3,
            },
        },
    });

    $(document).ready(function () {
        $('select:not(.ignore)').niceSelect();
    });
})(jQuery);


// testimonial One Carousel Onefunction by = owl.js **************************************************
 //testimonials 
 $('.testimonial_owlCarousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-right-arrow'></i>"],
    autoplay:false,   
    smartSpeed: 3000, 
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})






function togglePopup() { 
			const overlay = document.getElementById('popupOverlay'); 
			overlay.classList.toggle('show'); 
		} 



// Horizontal Tabs Functionality
 // Horizontal Tabs Functionality
 function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        tabcontent[i].classList.remove("active");
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }
    var tabContentElement = document.getElementById(cityName);
    tabContentElement.style.display = "block";
    setTimeout(function() {
        tabContentElement.classList.add("active");
    }, 10); // Slight delay to trigger the transition
    evt.currentTarget.classList.add("active");
}

// Make the first horizontal tab active on page load
document.addEventListener("DOMContentLoaded", function() {
    var firstTab = document.getElementsByClassName("tablinks")[0];
    firstTab.classList.add("active");
    var firstTabContent = document.getElementById("FinOps");
    firstTabContent.style.display = "block";
    setTimeout(function() {
        firstTabContent.classList.add("active");
    }, 10);
});


  //VERTICAL TABS SCRIPT

  function openCityVertical(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent-v");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks-v");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.classList.add("active");
}

// Make the first vertical tab active on page load
document.addEventListener("DOMContentLoaded", function() {
    var firstTabVertical = document.getElementsByClassName("tablinks-v")[0];
    firstTabVertical.classList.add("active");
    document.getElementById("non-native").style.display = "block";
});


///Accordian
document.addEventListener("DOMContentLoaded", function() {
          const container = document.querySelector(".container"); // Assuming .container is the parent element
      
          const accordions = document.querySelectorAll(".accordion");
      
          accordions.forEach((accordion, index) => {
            const header = accordion.querySelector(".accordion__header");
            const content = accordion.querySelector(".accordion__content");
            const icon = accordion.querySelector("#accordion-icon");
      
            // Initially set the first accordion as active
            if (index === 0) {
              content.style.height = `${content.scrollHeight}px`;
              icon.classList.add("ri-subtract-fill");
            }
      
            header.addEventListener("click", () => {
              const isOpen = content.style.height === `${content.scrollHeight}px`;
      
              // Reset all accordions
              accordions.forEach((a, i) => {
                const c = a.querySelector(".accordion__content");
                const ic = a.querySelector("#accordion-icon");
      
                if (i === index) {
                  // Toggle current accordion
                  c.style.height = isOpen ? "0px" : `${c.scrollHeight}px`;
                  ic.classList.toggle("ri-add-line", isOpen);
                  ic.classList.toggle("ri-subtract-fill", !isOpen);
      
                  // Scroll to accordion header
                  if (!isOpen) {
                    // Calculate offset to header
                    const offsetTop = header.getBoundingClientRect().top;
                    const scrollOffset = window.pageYOffset + offsetTop - 20; // Adjust this value as needed
      
                    // Scroll smoothly to header
                    window.scrollTo({ top: scrollOffset, behavior: "smooth" });
                  }
                } else {
                  // Close other accordions
                  c.style.height = "0px";
                  ic.classList.remove("ri-subtract-fill");
                  ic.classList.add("ri-add-line");
                }
              });
            });
          });
        });
     
//text highligt
 // Get the element with the class "highlight"
 var element = document.querySelector('.highlight');

 // Get the text content of the element
 var text = element.textContent;

 // Create a new HTML content with each character wrapped in a span
 var htmlContent = text.split('').map(function(char, index) {
   // Calculate animation delay for each span
   var animationDelay = (index + 1) * 0.1;
   // Wrap each character in a span with animation-delay
   return '<span style="animation-delay: ' + animationDelay.toFixed(1) + 's;">' + char + '</span>';
 }).join('');

 // Set the new HTML content back to the element
 element.innerHTML = htmlContent;



 //new tabs sec
/* jquery-circle-progress - jQuery Plugin to draw animated circular progress bars - URL: http://kottenator.github.io/jquery-circle-progress/ - Author: Rostyslav Bryzgunov - License: MIT */
!function (t) {"use strict";function i(t) {this.init(t);}i.prototype = { value: 0, size: 100, startAngle: -Math.PI, thickness: "2", fill: { gradient: ["#3aeabb", "#fdd250"] }, emptyFill: "rgba(150, 150, 150, .5)", animation: { duration: 1200, easing: "circleProgressEasing" }, animationStartValue: 0, reverse: !1, lineCap: "butt", constructor: i, el: null, canvas: null, ctx: null, radius: 0, arcFill: null, lastFrameValue: 0, init: function (i) {t.extend(this, i), this.radius = this.size / 2, this.initWidget(), this.initFill(), this.draw();}, initWidget: function () {var i = this.canvas = this.canvas || t("<canvas>").prependTo(this.el)[0];i.width = this.size, i.height = this.size, this.ctx = i.getContext("2d");}, initFill: function () {function i() {var i = t("<canvas>")[0];i.width = e.size, i.height = e.size, i.getContext("2d").drawImage(f, 0, 0, n, n), e.arcFill = e.ctx.createPattern(i, "no-repeat"), e.drawFrame(e.lastFrameValue);}var e = this,a = this.fill,r = this.ctx,n = this.size;if (!a) throw Error("The fill is not specified!");if (a.color && (this.arcFill = a.color), a.gradient) {var s = a.gradient;if (1 == s.length) this.arcFill = s[0];else if (s.length > 1) {for (var o = a.gradientAngle || 0, l = a.gradientDirection || [n / 2 * (1 - Math.cos(o)), n / 2 * (1 + Math.sin(o)), n / 2 * (1 + Math.cos(o)), n / 2 * (1 - Math.sin(o))], c = r.createLinearGradient.apply(r, l), h = 0; h < s.length; h++) {if (window.CP.shouldStopExecution(0)) break;var u = s[h],d = h / (s.length - 1);t.isArray(u) && (d = u[1], u = u[0]), c.addColorStop(d, u);}window.CP.exitedLoop(0);this.arcFill = c;}}if (a.image) {var f;a.image instanceof Image ? f = a.image : (f = new Image(), f.src = a.image), f.complete ? i() : f.onload = i;}}, draw: function () {this.animation ? this.drawAnimated(this.value) : this.drawFrame(this.value);}, drawFrame: function (t) {this.lastFrameValue = t, this.ctx.clearRect(0, 0, this.size, this.size), this.drawEmptyArc(t), this.drawArc(t);}, drawArc: function (t) {var i = this.ctx,e = this.radius,a = this.getThickness(),r = this.startAngle;i.save(), i.beginPath(), this.reverse ? i.arc(e, e, e - a / 2, r - 2 * Math.PI * t, r) : i.arc(e, e, e - a / 2, r, r + 2 * Math.PI * t), i.lineWidth = a, i.lineCap = this.lineCap, i.strokeStyle = this.arcFill, i.stroke(), i.restore();}, drawEmptyArc: function (t) {var i = this.ctx,e = this.radius,a = this.getThickness(),r = this.startAngle;1 > t && (i.save(), i.beginPath(), 0 >= t ? i.arc(e, e, e - a / 2, 0, 2 * Math.PI) : this.reverse ? i.arc(e, e, e - a / 2, r, r - 2 * Math.PI * t) : i.arc(e, e, e - a / 2, r + 2 * Math.PI * t, r), i.lineWidth = a, i.strokeStyle = this.emptyFill, i.stroke(), i.restore());}, drawAnimated: function (i) {var e = this,a = this.el,r = t(this.canvas);r.stop(!0, !1), a.trigger("circle-animation-start"), r.css({ animationProgress: 0 }).animate({ animationProgress: 1 }, t.extend({}, this.animation, { step: function (t) {var r = e.animationStartValue * (1 - t) + i * t;e.drawFrame(r), a.trigger("circle-animation-progress", [t, r]);} })).promise().always(function () {a.trigger("circle-animation-end");});}, getThickness: function () {return t.isNumeric(this.thickness) ? this.thickness : this.size / 14;}, getValue: function () {return this.value;}, setValue: function (t) {this.animation && (this.animationStartValue = this.lastFrameValue), this.value = t, this.draw();} }, t.circleProgress = { defaults: i.prototype }, t.easing.circleProgressEasing = function (t, i, e, a, r) {return (i /= r / 2) < 1 ? a / 2 * i * i * i + e : a / 2 * ((i -= 2) * i * i + 2) + e;}, t.fn.circleProgress = function (e, a) {var r = "circle-progress",n = this.data(r);if ("widget" == e) {if (!n) throw Error('Calling "widget" method on not initialized instance is forbidden');return n.canvas;}if ("value" == e) {if (!n) throw Error('Calling "value" method on not initialized instance is forbidden');if ("undefined" == typeof a) return n.getValue();var s = arguments[1];return this.each(function () {t(this).data(r).setValue(s);});}return this.each(function () {var a = t(this),n = a.data(r),s = t.isPlainObject(e) ? e : {};if (n) n.init(s);else {var o = t.extend({}, a.data());"string" == typeof o.fill && (o.fill = JSON.parse(o.fill)), "string" == typeof o.animation && (o.animation = JSON.parse(o.animation)), s = t.extend(o, s), s.el = a, n = new i(s), a.data(r, n);}});};}(jQuery), function (t) {function i(i) {return t(i).filter(function () {return t(this).is(":appeared");});}function e() {s = !1;for (var t = 0, e = r.length; e > t; t++) {if (window.CP.shouldStopExecution(1)) break;var a = i(r[t]);if (a.trigger("appear", [a]), c[t]) {var n = c[t].not(a);n.trigger("disappear", [n]);}c[t] = a;}window.CP.exitedLoop(1);}function a(t) {r.push(t), c.push();}var r = [],n = !1,s = !1,o = { interval: 250, force_process: !1 },l = t(window),c = [];t.expr[":"].appeared = function (i) {var e = t(i);if (!e.is(":visible")) return !1;var a = l.scrollLeft(),r = l.scrollTop(),n = e.offset(),s = n.left,o = n.top;return o + e.height() >= r && o - (e.data("appear-top-offset") || 0) <= r + l.height() && s + e.width() >= a && s - (e.data("appear-left-offset") || 0) <= a + l.width() ? !0 : !1;}, t.fn.extend({ appear: function (i) {var r = t.extend({}, o, i || {}),l = this.selector || this;if (!n) {var c = function () {s || (s = !0, setTimeout(e, r.interval));};t(window).scroll(c).resize(c), n = !0;}return r.force_process && setTimeout(e, r.interval), a(l), t(l);} }), t.extend({ force_appear: function () {return n ? (e(), !0) : !1;} });}(function () {return "undefined" != typeof module ? require("jquery") : jQuery;}());



/*==========  CIRCLE CHART  ==========*/
var el = $('.circle'),
inited = false;
el.appear({ force_process: true });
el.on('appear', function () {
  if (!inited) {
    el.circleProgress();
    inited = true;
  }
});

if ($('.circle').length > 0) {
  $('.circle').circleProgress({
    size: 105,
    fill: { color: "#536dfe" },
    emptyFill: '#eee',
    startAngle: 300,
    lineCap: 'round',
    animation: { duration: 1800 } }).

  on('circle-animation-progress', function (event, progress, stepValue) {
    $(this).find('span').text((stepValue * 100).toFixed(1));
  });
}

// presets 2
if ($('.circle-red').length > 0) {
  $('.circle-red').circleProgress({
    fill: { color: "#f3474b" } });

}
//# sourceURL=pen.js




$(document).ready(function() {
    $('.tabs-nav li').hover(function() {
        var tabId = $(this).find('a').attr('href');
        
        $('.tabs-nav li').removeClass('active');
        $(this).addClass('active');
        
        $('.tab-content .tab-pane').removeClass('active');
        $(tabId).addClass('active');
    });
});
