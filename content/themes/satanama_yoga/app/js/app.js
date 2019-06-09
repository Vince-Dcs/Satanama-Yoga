require('bootstrap');
require('jquery.scrollex');
var Rellax = require('rellax');

var app = {
  init: function() {
    console.log('init');

    $('.displayMenu').on('click', app.displayMenu);
    $('.hideMenu').on('click', app.hideMenu);

    $('.header').scrollex({
      enter: function() {
        $('.topmenu').removeClass('topmenu--color');
      },
      leave: function() {
        $('.topmenu').addClass('topmenu--color');
      }
    });
  },

  displayMenu: function(e) {
    e.preventDefault();
    $('.nav').removeClass('nav--hidden');
  },
  hideMenu: function(e) {
    e.preventDefault();
    $('.nav').addClass('nav--hidden');
  },

};

$(app.init);
