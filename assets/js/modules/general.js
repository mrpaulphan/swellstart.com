var $ = require('jquery');

module.exports = (function() {
  return {
    init: function() {
      $( ".section__subheading" ).prev().css( "margin-bottom", "5px" );
      $('a[href="#"]').on('click', function(e){
        e.preventDefault();
      });
    }
  };
})();
