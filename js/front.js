window.jQuery = $ = require('jquery');
var bootstrap = require('bootstrap');

/* Quand je clique sur l'icône hamburger je rajoute une classe au body */
   $('[data-btn-notif]').click(function(e){
       e.preventDefault();
       $('body').toggleClass('site-with-notif');
   });

   /* Je veux pouvoir masquer le menu si on clique sur le cache */
   $('[data-site-cache]').click(function(e){
       $('body').removeClass('site-with-notif');
   });