<?php

namespace Drupal\bootbase\Hook;

/**
 * @file
 * Contains \Drupal\bootbase\Hook.
 */

/**
 * Hook PreprocessHtml.
 */
class PreprocessHtml {

  /**
   * Hook.
   */
  public static function hook(&$variables) {

    $route = \Drupal::routeMatch()->getRouteName();
    if ($route == 'entity.node.canonical') {
      $class = 'page-node-view';
    }
    elseif ($route == 'entity.node.edit_form') {
      $class = 'page-node-edit';
    }
    else {
      $class = 'page-' . str_replace('.', '-', $route);
    }
    $variables['attributes']['class'][] = $class;

    $variables['attributes']['class'][] = !$variables['root_path'] ? 'front' : 'not-front';
    if (is_object($node = \Drupal::request()->attributes->get('node'))) {
      $variables['attributes']['class'][] = 'page-node-' . $node->nid->value;
    }
    if (!empty($variables['page']['sidebar'])) {
      $variables['attributes']['class'][] = 'sidebar';
    }
  }

}
