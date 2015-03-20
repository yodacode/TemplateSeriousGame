var Handlebars = require('handlebars');
var $ = require('jquery');
var source = '<section class="panel panel-{{color}} widget {{className}}" data-widget-tips> <section class="panel-heading"><h4><i class="{{icon}}"></i> {{title}}</h4></section> <section class="panel-body"> {{{content}}} </section> </section>'; 
module.exports = Handlebars.compile(source);