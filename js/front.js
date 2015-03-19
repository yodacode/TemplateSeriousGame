// Dependancies
window.jQuery = $ = require('jquery');
var bootstrap = require('bootstrap');

// Modules
var NotifMenuClass = require('./modules/NotifMenuClass.js');
var FeedClass = require('./modules/FeedClass.js');
var RemaningTimeClass = require('./modules/RemaningTimeClass.js');


// Init Modules
var notifMenu = new NotifMenuClass().init();
var feed = new FeedClass();
var remaningTime = new RemaningTimeClass().init();


///////////////

$(window).on({
  load : function() {
    feed.init();
  }
});



