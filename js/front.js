window.jQuery = $ = require('jquery');
var bootstrap = require('bootstrap');

$('.app-cache').on('click', function () {
	$('body').removeClass('with-sidebar');
});