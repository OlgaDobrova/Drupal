<?php

namespace Drupal\bootbase\Hook;

/**
 * @file
 * Contains \Drupal\bootbase\Hook.
 */

/**
 * Hook PreprocessMenu.
 */
class PreprocessMenu {

  /**
   * Hook.
   */
  public static function hook(&$variables) {
    $menu_name = $variables['menu_name'];
    if ($menu_name == 'main' || $menu_name == 'account') {
      foreach ($variables['items'] as &$item) {
        $item = self::replaceIcon($item);
      }
    }
  }

  /**
   * Set icon.
   */
  public static function replaceIcon($item) {
    if (strpos($item['title'], 'fa:')) {
      $icon = explode(':', $item['title'])[2];
      $item['title'] = '';
      $item['attributes']->setAttribute('icon', $icon);
    }
    if (!empty($item['below'])) {
      foreach ($item['below'] as $key => $item_bellow) {
        $item['below'][$key] = self::replaceIcon($item_bellow);
      }
    }
    return $item;
  }

}
