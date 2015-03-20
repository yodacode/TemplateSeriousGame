var Isotope = require('isotope-layout');

var FeedClass = function () {
  this.selector = '[data-feed]',

  this.init = function () {
    new Isotope('[data-feed]', {});
  };
};

module.exports = FeedClass;
