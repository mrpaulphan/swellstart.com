var $ = require('jquery');
var WOW = require('wowjs');
window.wow = new WOW.WOW({
  live: false
});

// Modules Dependencies
var slick = require('./modules/slick');
var toggle = require('./modules/toggle');
var scroll = require('./modules/scroll');
var general = require('./modules/general');
var ajax = require('./modules/ajax');

/*-------------------------------------------
  DOCUMENT READY FUNCTIONS
  All functions to be called on
  doc ready
-------------------------------------------*/
$(document).ready(function() {
  slick.init();
  toggle.init();
  general.init();
  ajax.init();
  scroll.init();
  window.wow.init();
});
