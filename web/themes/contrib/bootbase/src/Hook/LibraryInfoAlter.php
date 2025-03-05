<?php

namespace Drupal\bootbase\Hook;

use Drupal\user\Entity\User;

/**
 * @file
 * Contains \Drupal\bootbase\Hook.
 */

/**
 * Hook LibraryInfoAlter.
 */
class LibraryInfoAlter {

  /**
   * Hook.
   */
  public static function hook(&$libraries, $extension) {
    if ($extension == 'bootbase' && isset($libraries['vue'])) {
      $config = \Drupal::config('system.performance');
      $prod = $config->get('js')['preprocess'];
      $is_admin = self::isAdmin();
      if ($is_admin) {
        $libraries['vue']['dependencies'] = ['bootbase/vue-dev'];
      }
      elseif ($prod) {
        $libraries['vue']['dependencies'] = ['bootbase/vue-prod'];
      } else {
        $libraries['vue']['dependencies'] = ['bootbase/vue-dev'];
      }
    }
  }

  public static function isAdmin() {
    $user = \Drupal::currentUser();
    if ($user->isAnonymous()) {
      return FALSE;
    }
    $uid = $user->id();
    $user = User::load($uid); 
    if ($user->hasRole('administrator')) {
      return TRUE;
    }
    return FALSE;
  }

}