<?php

namespace Drupal\bootbase;

/**
 * @file
 * Contains \Drupal\bootbase\GetContactForm.
 */

/**
 * Multi contact forms.
 */
class GetContactForm {

  /**
   * Form.
   */
  public static function form($form_name = 'callback', $count = 1) {
    $forms = [];
    for ($i = 0; $i < $count; $i++) {
      $key = $i + 1;
      $entity = \Drupal::entityTypeManager()
        ->getStorage('contact_form')
        ->load($form_name);
      $message = \Drupal::entityTypeManager()
        ->getStorage('contact_message')
        ->create(['contact_form' => $entity->id()]);
      $form = \Drupal::service('entity.form_builder')->getForm($message);
      $form_id = "{$form['#form_id']}_{$key}";
      $form['#prefix'] = "<div id='{$form_id}'>";
      $form['#suffix'] = '</div>';
      // B: $form['actions']['submit']['#value'] = $button;!
      $form['adaptive-hidden-form-key'] = [
        '#type' => 'hidden',
        '#value' => $form_id,
        '#name' => 'element_id',
      ];
      $forms["{$form_name}{$key}"] = $form;
    }
    return $forms;
  }

}
