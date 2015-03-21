var $ = require('jquery');
var WidgetClass = require('../Widget/WidgetClass.js');
var Rangeslider = require('rangeslider.js');
var InvestWidgetTemplate = require('./InvestWidgetTemplate.js');

var WidgetInvestClass = function (widget, scroll) {
  WidgetClass.call(this, widget);

  this.rangeslider = this.widget.find($('[data-widget-invest-rangeslider]'));
  this.buildContent();
  this.bindRangeSlider(this.rangeslider);
};

WidgetInvestClass.prototype = new WidgetClass();


WidgetInvestClass.prototype.buildContent = function () {
  var data = {
    gems: this.widget.attr('data-widget-invest-gems'),
    mygems: this.widget.attr('data-widget-invest-mygems')
  };
  this.template = this.widget.find('[data-widget-body]').append(InvestWidgetTemplate(data));
};

WidgetInvestClass.prototype.bindRangeSlider = function () {
    
  var that = this,
    rangeslider = this.template.find($('[data-widget-invest-rangeslider]')),
    myGemsCounter = this.template.find($('[data-mygems-counter]')),
    initialValueMyGems = rangeslider.attr('max'),
    investedGemsCounter = this.template.find($('[data-gems-counter]')),
    initialValueInvestedGems = investedGemsCounter.text();

  rangeslider.rangeslider({
      polyfill: false,

      onSlide: function(position, value) {        
        
        myGemsCounter.text(parseInt(initialValueMyGems, 10) - rangeslider.val());
        investedGemsCounter.text(parseInt(rangeslider.val(), 10) + parseInt(initialValueInvestedGems, 10));
      }
  });
};

module.exports = WidgetInvestClass;


