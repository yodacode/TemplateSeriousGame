var Handlebars = require('handlebars');
var source = '<section class="widget-invest-precious"><i class="icon-precious"></i> </section> <section class="widget-invest-gems"> <span data-gems-counter class="gems-counter">{{gems}}</span> <span class="gems-label">gems</span> </section> <section class="widget-invest-time"> <i class="icon-clock"></i> <span class="time" data-time-days>10</span> <span>Jours</span> <span class="time" data-time-hours>15</span> <span>Heures</span> </section> <section class="widget-invest widget-invest-mygems">Mes gems :  <span class="mygems-counter" data-mygems-counter>{{mygems}}</span></section> <input type="range" min="0" max="{{mygems}}" value="0" data-widget-invest-rangeslider class="data-widget-invest-rangeslider"> <button class="btn btn-default btn-lg btn-block widget-invest-btn" data-widget-invest-btn>Investir</button>'; 
module.exports = Handlebars.compile(source);