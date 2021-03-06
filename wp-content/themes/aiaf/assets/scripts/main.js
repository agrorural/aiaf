/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
        $.stellar({
          horizontalScrolling: false,
          verticalOffset: 350
        });
        $('#sl__inst').owlCarousel({
            loop:true,
            margin:15,
            autoplay: true,
            autoplayHoverPause: true,
            nav: false,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        });
        $(window).scroll(function (event) {
            var spotHeight = $('#spot').height();
            var scroll = $(window).scrollTop();
            console.log(spotHeight);
            console.log(scroll);
            if (scroll > spotHeight){
              $('#mainNav').addClass('showing');
              $('#mainNav').removeClass('hidding');
            }else{
              $('#mainNav').removeClass('showing');
            }
        });
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
        $('#s3').stellar({
          horizontalScrolling: false,
          verticalOffset: 0
        });
      }
    },
    // About us page, note the change from about-us to about_us.
    'comision_de_la_agricultura_familiar': {
      init: function() {
        // JavaScript to be fired on the about us page
        $(window).scroll(function (event) {
            var mainNavHeight = $('#mainNav').height();
            var massheadHeight = $('.masshead').height();
            var resultHeight = mainNavHeight + massheadHeight;

            var scroll = $(window).scrollTop();

            console.log(resultHeight);
            console.log(scroll);

            if (scroll > resultHeight){
              $('#institutionsNav').addClass('container navbar-fixed-top');
              $('#institutionsNav').removeClass('navbar-static-top');
            }else{
              $('#institutionsNav').addClass('navbar-static-top');
              $('#institutionsNav').removeClass('container navbar-fixed-top');
            }
        });
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
