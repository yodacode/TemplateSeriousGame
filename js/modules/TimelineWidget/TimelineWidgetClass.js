var $ = require('jquery');
var WidgetClass = require('../Widget/WidgetClass.js');
var ProgressBar = require('progressbar.js');

var WidgetTimelineClass = function (widget) {
  this.widget = widget;
  this.build();
  this.progressContainer = this.widget.find('[data-widget-remaining-progress]').get(0);
};

WidgetTimelineClass.prototype = new WidgetClass();

WidgetTimelineClass.prototype.drawTimeline = function () {
  var progress = new ProgressBar.Circle(this.progressContainer, {
    duration: 200,
    color: "#FCB03C",
    strokeWidth: 4,
    trailColor: "#ddd",
    text: {
      value: 'Phase 2',
      className: 'remaining-label',
    }
  });
  // var second = new Date().getSeconds();
  // console.log(second / 60);
  progress.animate(0.8, function() {});

  return this;
};

module.exports = WidgetTimelineClass;


