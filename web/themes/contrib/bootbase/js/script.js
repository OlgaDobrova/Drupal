/**
 * @file
 * Author: Synapse-studio.
 */

(function ($) {
  'use strict';

  $(document).ready(function () {
    mobileNav();
  });

  /**
   * Mobile click helper.
   */
  function mobileNav() {
    $('#small-menu .menu-dropdown-trigger').click(function () {
      $(this).siblings('.menu').slideToggle('250').toggleClass('menu--is-open');
      $(this).parent('.menu-item').toggleClass('menu-item--is-open');
    });
  }

})(this.jQuery);
