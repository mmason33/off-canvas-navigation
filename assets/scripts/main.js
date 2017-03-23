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

              AOS.init({
                offset: 200,
                duration: 600,
                easing: 'ease-in-sine',
                delay: 100,
              });

              $(window).scroll(function(){
                if ($(this).scrollTop() > 0){
                  $('#nav-header').css('margin-top', 0);
                }else{
                  $('#nav-header').css('margin-top', 25);
                }
              });
          });


      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // LEADERSHIP TEMPLATE
    'page_template_leadership': {
      init: function() {
        // JavaScript to be fired on the home page
        $(document).ready(function(){
          function getWidth( ele, w){
            if ( w >= 575 ){
              $(ele).css('background','#ebebeb');
            }else{
              $(ele).css('background','#fff');
            }
          }
          getWidth('.leadership-grid .col-lg-9:odd,.leadership-grid .col-lg-3:odd', $(window).width() );

          $('.leadership-bio:odd').css('padding-left', 64);


        });
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // Our Team us page, note the change from our-team to our_team.
    'page_id_20305': {
      init: function() {
        // JavaScript to be fired on the our team us page
        $(document).ready(function(){
          !function($){

            var defaults = {
              sectionContainer: "> section",
              angle: 50,
              opacity: true,
              scale: true,
              outAnimation: true
          	};


            $.fn.tiltedpage_scroll = function(options){
              var settings = $.extend({}, defaults, options),
                  el = $(this);

              el.find(settings.sectionContainer).addClass("tps-section");

              el.find('.tps-section').each(function(){
                var el2 = $(this);
                el2.wrapInner("<div class='tps-wrapper'></div>");
              });

              function isElementInViewport (el3) {
                var docViewTop = $(window).scrollTop(),
                    docViewBottom = docViewTop + $(window).height(),
                    elemTop = el3.offset().top,
                    elemBottom = elemTop + el3.outerHeight(true);

                return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom) );
              }

              function elementVisibilityMayChange (el4) {

                if ( isElementInViewport(el4) ) {
                  el4.addClass("tps-inview")
                } else {
                  el4.removeClass("tps-inview")
                }
              }



              $(window).on('DOMContentLoaded load resize scroll', function() {
                el.find(settings.sectionContainer).each(function(){
                  elementVisibilityMayChange($(this));
                });


                el.find('.tps-section.tps-inview > .tps-wrapper').each(function(index){
                  var el2 = $(this),
                      opacity = 0,
                      st = $(window).scrollTop(),
                      deg = ((el2.parent().offset().top - el2.parent().height()) - st) / $(window).height() * (settings.angle * 3),
                      scale = ((st + $(window).height() - (el2.parent().offset().top - el2.parent().height())) / ($(window).height() )) ;
                      if(scale > 1) scale = 1;
                      if(deg < 0) deg = 0;

                  if(st > el2.parent().offset().top) {

                    if (settings.outAnimation == false) {
                      opacity = 1;
                      if(opacity < 0) opacity = 0;
                      if (deg < 0) deg = 0;
                    } else {
                      opacity = ((el2.parent().offset().top + ($(window).height() * 1.2) - st)) / ($(window).height());
                      opacity = Math.pow(opacity,25);
                      deg = (el2.parent().offset().top - st) / $(window).height() * (settings.angle * 3);
                      scale = ((st + $(window).height() - el2.parent().offset().top ) / ($(window).height() )) ;
                    }


                  } else {
                  	if(index != 0) {
                    	var opacity = ((st + $(window).height() - el2.parent().offset().top + (el2.height()/2))/ $(window).height());

                  		if(opacity > 1) { opacity = 1; }

                  	} else {
                  		opacity = 1;
                      deg = 0;
                      scale = 1;
                  	}
                  }

                  if (settings.scale == false) scale = 1;
                  if (settings.angle == false) deg = 0;
                  if (settings.opacity == false) opacity = 1;

                  el2.css({
                    'transform': 'rotateX(' + deg + 'deg) scale('+scale+', '+scale+')',
                    opacity: opacity
                  });
                });
              });

            }


          }(window.jQuery);

          $("#our-team").tiltedpage_scroll();
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
