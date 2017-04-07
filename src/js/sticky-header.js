/**
 * This file creates the sticky functionality for the header/menu so that it scrolls up and down.
 * To make it change colors add .sticky to the _header.scss and enjoy
 * @author Jess McClary <jess.mcclary@tricomb2b.com>
 */
(function ($) {
  'use strict';

  // Adding background color to header for scrolling
  $(window).on("scroll", function(){
        if($(window).scrollTop() > 100) {
            $("#header").addClass("sticky");
        } else {
            $("#header").removeClass("sticky");
        }
    });
})(jQuery);