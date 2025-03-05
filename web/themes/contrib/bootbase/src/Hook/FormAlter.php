<?php

namespace Drupal\bootbase\Hook;

use Drupal\Core\Form\FormStateInterface;

/**
 * @file
 * Contains \Drupal\bootbase\Hook.
 */

/**
 * Hook FormAlter.
 */
class FormAlter {

  /**
   * Hook.
   */
  public static function hook(&$form, FormStateInterface $form_state, $form_id) {
    // Fix page jumps after form submission.
    if (!empty($form['actions']['submit']['#ajax'])) {
      $form['actions']['submit']['#ajax']['disable-refocus'] = TRUE;
    }
  }

}
