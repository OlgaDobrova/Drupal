/**
 * @file
 * Author: Synapse-studio.
 */

(function ($, Drupal, cookies) {
  "use strict";

  $(document).ready(function () {
    managerMenu();
  });

  /**
   * Manager menu.
   */
  function managerMenu() {
    let $menu = $("#manager-menu");
    if (!$menu.length) {
      return;
    }
    let $nav = $menu.find("nav");
    const POSITION = cookies.get("bl_sys_nav_pos");
    const EXPANDED = cookies.get("nav_expanded");

    if (EXPANDED == null || EXPANDED == undefined) {
      cookies.set("nav_expanded", 1, {
        path: "/",
      });
    }

    if (EXPANDED == 0) {
      $nav.hide();
    } else {
      $nav.show();
    }

    if (POSITION !== null && POSITION !== undefined) {
      $menu.css({
        left: POSITION.split("|")[0] + "px",
        top: POSITION.split("|")[1] + "px",
      });
    }

    $menu.draggable({
      containment: "body",
      stop: function (dragstop, ui) {
        cookies.set("bl_sys_nav_pos", ui.offset.left + "|" + ui.offset.top, {
          path: "/",
        });
      },
    });

    $menu.find(".toggle-manager").click(function () {
      $menu.css({
        height: "auto",
        width: "auto",
      });
      if ($nav.is(":hidden")) {
        $nav.slideDown();
        cookies.set("nav_expanded", 1, {
          path: "/",
        });
      } else {
        cookies.set("nav_expanded", 0, {
          path: "/",
        });
        $nav.slideUp();
      }
    });
  }
})(jQuery, Drupal, window.Cookies);
