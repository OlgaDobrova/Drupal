/**
 * @file
 * Author: Synapse-studio.
 */

(function ($) {
  "use strict";

  const DRAGTHRESHOLD = window.innerWidth > 1024 ? 20 : 0;

  $(document).ready(function () {
    siteReady();
    projectSlider();
    calcWorkScopeItemsHeight();
    setTimeout(() => {
      formControlBehaviour();
    }, 10);
  });

  function projectSlider() {
    var slider = $(".paragraph--type--sliders .items");
    if (slider.length) {
      slider.flickity({
        cellAlign: "left",
        freeScroll: true,
        wrapAround: true,
        autoPlay: 4000,
        // prevNextButtons: false, //закрыта стр, чтобы видны были стрелки
        imagesLoaded: true,
        draggable: false,
        pageDots: false,
      });
      slider.on("dragStart.flickity", function (event, pointer) {
        $(this).addClass("is-dragging");
      });
      slider.on("dragEnd.flickity", function (event, pointer) {
        $(this).removeClass("is-dragging");
      });
    }
  }

  function calcWorkScopeItemsHeight() {
    setTimeout(() => {
      let workScopItems = $(".work-scope-items");
      workScopItems.each(function (index) {
        calcHeight($(this));
      });
    }, 300);
  }

  function calcHeight($container) {
    if ($container.length) {
      let pictures = $container.find(".work-scope-item");
      var heights = [];
      let i = 0;
      pictures.each(function () {
        heights[i] = $(this).height();
        i++;
      });
      let maxHeight = -1;
      heights.forEach((element) => {
        if (element > maxHeight) {
          maxHeight = element;
        }
      });
      pictures.each(function () {
        $(this).css("height", maxHeight);
      });
    }
  }

  function formControlBehaviour(target = null) {
    let forms = $(".checkout-form, .contact-message-form");
    if (target) {
      forms = $(target);
    }
    if (forms.length) {
      let formControls = forms.find("input, textarea");
      if (formControls.length) {
        formControls.each(function () {
          let controlWrapper = $(this).closest(
            ".form-item:not(.form-type-select):not(.form-type-managed-file)"
          );
          if (
            !$(this).attr("placeholder") &&
            ($(this).attr("value") == "" ||
              (($(this)[0].localName == "textarea" ||
                $(this).attr("type") == "password") &&
                $(this)[0].innerHTML == ""))
          ) {
            if (controlWrapper.length && $(this).val().length == 0) {
              controlWrapper.addClass("form-item--empty");
            }
          }
          $(this).on("change", function () {
            if ($(this).val().length > 0) {
              controlWrapper.removeClass("form-item--empty");
            } else {
              controlWrapper.addClass("form-item--empty");
            }
          });
        });
      }
    }
  }

  function siteReady() {
    const END = Date.now() + 3000;
    var body = document.body;

    var interval = setInterval(() => {
      if (body.classList.contains("site-is-ready")) {
        clearInterval(interval);
        return;
      }
      if (Date.now() > END) {
        body.classList.add("site-is-ready");
        clearInterval(interval);
      }
    }, 1000);

    window.onload = () => {
      body.classList.add("site-is-ready");
    };
  }

  function phoneInputMask($field) {
    let mask =
      drupalSettings.path.currentLanguage == "ru"
        ? "+7 (999) 999-99-99"
        : "+9 (999) 999-99-99";
    $field.inputmask(mask, {
      clearIncomplete: true,
      showMaskOnHover: false,
      clearMaskOnLostFocus: true,
      oncomplete: function () {
        $field.closest(".form-item").removeClass("form-item--empty");
      },
    });
    let $formSubmit = $field.closest("form").find(".form-submit");
    $formSubmit.on("mouseenter", function (e) {
      if (!$field.inputmask("isComplete")) {
        $field.val("");
      }
    });
  }

  function applyInputmask() {
    let $field_contact = $(document).find(".field--name-field-contact input");
    let $field_phone = $(document).find(".field--name-field-phone input");
    if ($field_contact.length) {
      phoneInputMask($field_contact);
    }
    if ($field_phone.length) {
      phoneInputMask($field_phone);
    }
  }

  if (typeof Drupal === "object") {
    Drupal.behaviors.adaptive = {
      attach: function (context) {
        if (
          $(context).hasClass("contact-message-form") ||
          $(context).children(".contact-message-form").length
        ) {
          formControlBehaviour("#" + $(context).attr("id"));
        }
        if (
          $(context).hasClass("modal") ||
          $(context).hasClass("contact-message-form") ||
          $(context).children(".contact-message-form").length
        ) {
          let $field_contact = $(context).find(
            ".field--name-field-contact input"
          );
          let $field_phone = $(context).find(".field--name-field-phone input");
          if ($field_contact.length) {
            phoneInputMask($field_contact);
          }
          if ($field_phone.length) {
            phoneInputMask($field_phone);
          }
        }
      },
    };
  }
})(this.jQuery);
