// dependencies
var $ = require('jquery');

var NotifMenuClass = function () {

	this.btnNotif = $('[data-btn-notif]');
	this.cache = $('[data-site-cache]');
	this.body = $('body');

    this.init = function () {
    	var that = this;

        this.btnNotif.on('click', function(e){
           e.preventDefault();
           that.body.toggleClass('site-with-notif');
        });

        this.cache.on('click', function(e){
           that.body.removeClass('site-with-notif');
        });
    };
};

module.exports = NotifMenuClass;