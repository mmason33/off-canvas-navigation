$(document).ready(function(){
    var body = $("body"),
         menuOverlay = $(".menu-overlay"),
         menu = $("nav#site-navigation"),
         menuIcon = $("#menu-icon"),
         subTrigger = $("li.menu-item-has-children > a");
    menuIcon.click(function(e) {
        e.preventDefault();
        $(this).toggleClass("active");
        body.toggleClass("menu-open");
        menu.toggleClass("active");
    });
    menuOverlay.click(function() {
        menuIcon.removeClass("active");
        body.removeClass("menu-open");
        menu.removeClass("active");
    });
    subTrigger.click(function(drop) {
        drop.preventDefault();
        $(this).parent().toggleClass("active");
    });
  });
