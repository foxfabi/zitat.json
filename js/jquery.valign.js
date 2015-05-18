/**
 * jQuery Plugin to vertically align an element
 *
 * Copyright 2014, Fabian Dennler https://fabforge.ch/
 * $('#container').valign();
 */

(function ($) {
  $.fn.valign = function() {
    // Get height of article.
    var ph = $(this).innerHeight();
    // Get height of parent containing the article.
    var wh = $(this).parent().height();
    // Calculate the delta for top margin.
    var dh = wh/2 - ph/2;
    $(this).css('top', dh);
  };
})(jQuery);