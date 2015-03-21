var $ = require('jquery');
var WidgetClass = require('../Widget/WidgetClass.js');
var ProgressBar = require('progressbar.js');

var WidgetTimelineClass = function (widget, scroll) {
  WidgetClass.call(this, widget);
  this.progressContainer = this.widget.find('[data-widget-remaining-progress]').get(0);
  this.drawTimeline();
};

WidgetTimelineClass.prototype = new WidgetClass();

WidgetTimelineClass.prototype.drawTimeline = function () {
  var progress = new ProgressBar.Circle(this.progressContainer, {
    duration: 200,
    color: "#1A85D1",
    strokeWidth: 4,
    trailColor: "#ddd",
    text: {
      value: 'Phase 2',
      className: 'remaining-label',
    }
  });
  
  progress.animate(0.8, function() {});

  return this;
};

module.exports = WidgetTimelineClass;


