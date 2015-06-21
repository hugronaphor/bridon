(function($) {

  'use strict';

  /**
   * A simple Drupal behavior example.
   */
  Drupal.behaviors.moreLikeThis = {
    attach: function(context) {

      $('.more-like-this-button').on("click", function() {
        var btn = $(this);
        var parentWrapper = btn.parents('article');

        btn.slideUp(0, function() {
          parentWrapper.find('.expand-entities').slideDown(200);
        });
        return false;
      });

      $('.entity-wrapp-label').on("click", function() {
        var parentWrapper = $(this).parents('.term-search');
        parentWrapper.find('.entity-wrapp-expand').slideDown(200);
        return false;
      });

    }
  };

})(jQuery);
