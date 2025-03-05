/**
 * @file
 * Vue main app.
 */

window.addEventListener("DOMContentLoaded", function () {
  "use strict";
  const delimiters = ["${", "}"];
  const comments = true;
  const elements = document.querySelectorAll("test");
  const methods = {
    debug(text) {
      console.log(text);
    },
  };
  const each = Array.prototype.forEach;
  each.call(elements, (el, i) => {
    var app = Vue.createApp({delimiters, comments, methods});
    app.component("test", {
      data() {
        return {
          inCart: false,
          ready: false,
          loading: false,
          orderId: false,
          variationId: false,
          oldPrice: false,
          price: true,
          donation: false,
          attributeCount: false,
          activeIds: [],
          enableIds: [],
          quantity: 1,
          priceRequest: false,
        };
      },
      template: el,
      delimiters: delimiters,
    });
    app.mount('.drupal-app');
  });
});
