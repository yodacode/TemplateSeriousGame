// Dependancies
window.jQuery = $ = require('jquery');
var bootstrap = require('bootstrap');

// Modules
var NotifMenuClass = require('./modules/NotifMenuClass.js');
var FeedClass = require('./modules/FeedClass.js');
var WizardClass = require('./modules/Wizard/WizardClass.js');
var WidgetClass = require('./modules/Widget/WidgetClass.js');
var WidgetTimelineClass = require('./modules/TimelineWidget/TimelineWidgetClass.js');


// INIT ELEMENTS
var notifMenu = new NotifMenuClass().init();
var feed = new FeedClass();
var wizard = new WizardClass();

// INIT WIDGETS
var widgetTips = new WidgetClass($('[data-widget-tips]'));
var widgetPitch = new WidgetClass($('[data-widget-pitch]'));
var widgetTimeline = new WidgetTimelineClass($('[data-widget-timeline]')).drawTimeline();

console.log(widgetPitch);
console.log(widgetTips);

$(window).on({
  load : function() {
    feed.init();
  }
});



