/**
 * This file creates the sticky functionality for the header/menu so that it scrolls up and down.
 * To make it change colors add .sticky to the _header.scss and enjoy
 * @author Jess McClary <jess.mcclary@tricomb2b.com>
 */
(function ($) {
  'use strict';

  // Adding background color to header for scrolling
  $(window).on('scroll', function(){
    var topHeight = 100; 
    if($(window).scrollTop() > topHeight) {
      $('#header').addClass('sticky');
    } else {
      $('#header').removeClass('sticky');
    }
  });
})(jQuery);