var $ = require('jquery');
var WidgetClass = require('../Widget/WidgetClass.js');
var Rangeslider = require('rangeslider.js');

var WidgetInvestClass = function (widget, scroll) {
  this.widget = widget;
  this.build();
  
  this.rangeslider = this.widget.find($('[data-widget-invest-rangeslider]'));  
  this.bindRangeSlider(this.rangeslider);
};

WidgetInvestClass.prototype = new WidgetClass();

WidgetInvestClass.prototype.bindRangeSlider = function () {
  // console.log('bindRangeSlider');
  this.rangeslider.hide();
};

module.exports = WidgetInvestClass;


