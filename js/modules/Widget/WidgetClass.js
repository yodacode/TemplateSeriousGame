var $ = require('jquery');
var widgetTemplate = require('./WidgetTemplate.js');

var WidgetClass = function (widget) {  
  
  if (widget instanceof jQuery) {
    this.widget = widget;  
    this.scroll = scroll;
    this.build();
  }

};


WidgetClass.prototype.build = function () {

  var content = this.widget.find('[data-widget-content]').clone();

  this.widget.find('[data-widget-content]').remove();
  
  this.data = {
    color: this.widget.attr('data-widget-color'),
    title: this.widget.attr('data-widget-title'),
    icon: this.widget.attr('data-widget-icon'),
    content: content.html(),
    scroll: this.widget.attr('data-widget-scroll') == 'true' ? true : false,
    className: this.widget.attr('data-widget-class')
  };
  
  this.template = this.widget.append(widgetTemplate(this.data));

};

module.exports = WidgetClass;