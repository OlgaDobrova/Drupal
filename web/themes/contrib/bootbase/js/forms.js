/**
 * @file
 * Author: Synapse-studio.
 */

(function ($) {
  'use strict';

  $(document).ajaxStart(function (e) {
    var $input = $(e.currentTarget.activeElement);
    if ($input.is('body')) {
      $input = $('.contact-message-form input');
    }
    else if ($input.hasClass('modal')) {
      $input = $input.find('.contact-message-form input');
    }
    else if ($input.parents('.views-exposed-form').length) {
      return;
    }

    let $form = $input.parents('.contact-message-form');
    $form.find('.form-control, .button').prop('disabled', true);
  });

  $(document).ajaxComplete(function (e) {
    let $form = $('.contact-message-form');
    $form.find('.form-control, .button').prop('disabled', false);
  });

})(this.jQuery);
