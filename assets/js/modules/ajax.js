var $ = require('jquery');

module.exports = (function() {
  return {
    init: function() {
      $("[data-form]").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var url = "/submission.php"; // the script where you handle the form input.
        var el = $(this);
        var data = el.serialize();
        $.ajax({
          type: "POST",
          url: url,
          data: el.serialize(), // serializes the form's elements.
          success: function(data) {
            console.log(data); // show response from the php script.
            if (data == 0 ) {

              $('[data-form]').empty();
              $('[data-form]').after('<div class="alert--success"><strong>Success!</strong> Message Sent!</div>')
            } else {
              console.log('error');
              $('[data-form]').after('<div class="alert--error"><strong>Warning!</strong> Message Sent!</div>')

            }
          },
          error: function(error) {
            console.log('it did not');
            console.log(error); // show response from the php script.
          }
        });

      });
    }
  };
})();
