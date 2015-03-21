// Dependancies
window.jQuery = $ = require('jquery');
var bootstrap = require('bootstrap');

// Modules
var NotifMenuClass = require('./modules/NotifMenuClass.js');
var FeedClass = require('./modules/FeedClass.js');
var WizardClass = require('./modules/Wizard/WizardClass.js');
var WidgetClass = require('./modules/Widget/WidgetClass.js');
var WidgetTimelineClass = require('./modules/TimelineWidget/TimelineWidgetClass.js');
var WidgetInvestClass = require('./modules/InvestWidget/InvestWidgetClass.js');


// INIT ELEMENTS
var notifMenu = new NotifMenuClass().init();
var feed = new FeedClass();
var wizard = new WizardClass();

// INIT WIDGETS
var widgetTips = new WidgetClass($('[data-widget-tips]'));
var widgetPitch = new WidgetClass($('[data-widget-pitch]'));
var widgetUserRanking = new WidgetClass($('[data-widget-user-ranking]'));
var widgetIdeasLast = new WidgetClass($('[data-widget-ideas-last]'));
var widgetTimeline = new WidgetTimelineClass($('[data-widget-timeline]'));
var widgetInvest = new WidgetInvestClass($('[data-widget-invest]'));

// console.log(widgetPitch);
// console.log(widgetTips);
// console.log(widgetTimeline);
// console.log(widgetInvest);

$(window).on({
  load : function() {
    feed.init();
  }
});



