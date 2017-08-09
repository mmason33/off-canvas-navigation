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

    'common': {
      init: function() {

        $(document).ready(function(){
            var body = $("body"),
                 navOverlay = $(".overlay"),
                 nav = $("nav#off-canvas-nav"),
                 navIcon = $("#nav-icon"),
                 subMenu = $("li.menu-item-has-children > a");
            navIcon.click(function(e) {
                e.preventDefault();
                $(this).toggleClass("open");
                body.toggleClass("nav-open");
                nav.toggleClass("open");
            });
            navOverlay.click(function() {
                navIcon.removeClass("open");
                body.removeClass("nav-open");
                nav.removeClass("open");
            });
            subMenu.click(function(drop) {
                drop.preventDefault();
                $(this).parent().toggleClass("open");
            });

            if($('#hero').length === 0) {
              $('header.header').addClass('blue');
            }

            $(window).scroll(function(){
              if ($('#hero').length !== 0) {
                  if($(window).scrollTop() >= 200) {
                    $('header.header').addClass('blue');
                  } else {
                    $('header.header').removeClass('blue');
                  }
              }
            });

            $('.column-content').matchHeight();
            $('.tile-wrap').matchHeight();
            $('.value-item').matchHeight();

            $(window).scroll(function(){
              $("#hero").css({
                "opacity": 1 - $(window).scrollTop() / 600,
                "z-index" : 0,
                "top": 1 - $(window).scrollTop() / 10
              });
            });


            AOS.init({
              offset: 200,
              duration: 800,
              easing: 'ease',
              delay: 200,
              disable: window.innerWidth < 1024
            });

            $('.icon-item').matchHeight();

          });//end doc.ready

      },
      finalize: function() {

      }
    },

    'page_template_leadership': {
      init: function() {

        $(document).ready(function(){
          function getWidth( ele, w){
            if ( w >= 575 ){
              $(ele).css('background','#ebebeb');
            }else{
              $(ele).css('background','#fff');
            }
          }
          getWidth('.leadership-grid .col-lg-9:odd,.leadership-grid .col-lg-3:odd', $(window).width());
          $('.leadership-bio:odd').css('padding-left', '6.4rem');


          $('.leadership-grid').matchHeight();


        });

      },
      finalize: function() {

      }
    },

    'page_template_our_team': {
      init: function() {
        $(function() {
          $('.staff-member').matchHeight();
        });
      }
    },

    'page_template_facilities': {
      init: function() {
        $(function() {
          $("#imageGallery").lightGallery();
        });
      }
    },

    'page_template_contact': {
      init: function() {
        $(function() {
          $('.col-md-5.head').matchHeight();
        });
      }
    },

    'page_template_page_with_sidebar': {
      init: function() {

      }
    },

    'home': {
      init: function() {
        $(document).ready( function () {
          $(window).scroll(function(){
            if ($('#hero').length !== 0) {
                if($(window).scrollTop() >= 200) {
                  $('header.header').addClass('blue');
                } else {
                  $('header.header').removeClass('blue');
                }
            }
          });
        });
      }
    },

    'home_2': {
      init: function() {
        $(document).ready( function () {
          $(window).scroll(function(){
            if ($('#hero').length !== 0) {
                if($(window).scrollTop() >= 200) {
                  $('header.header').addClass('light-blue');
                } else {
                  $('header.header').removeClass('light-blue');
                }
            }
          });
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
