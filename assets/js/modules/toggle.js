var $ = require('jquery');

module.exports = (function() {
  return {
    init: function() {
      var trigger = $('[data-toggle-trigger]');
      var target = $('[data-toggle-target]');

      trigger.on('click', function() {
        var trigerID = $(this).attr('data-toggle-trigger');
        trigger.removeClass('active');
        target.removeClass('active');
        $(this).addClass('active');

        target.each(function() {
          var targetID = $(this).attr('data-toggle-target');
          if (targetID == trigerID) {
            console.log(targetID,trigerID);
            $(this).addClass('active');
          }
        });
      });
    }
  };
})();
