$(document).ready(function () {
$(".form-select").change(function() {
    if ($(this).val() == "Student") {
      $('#another-field').show();
    }
  });
  $(".form-select").trigger("change");
  });
  $(document).ready(function () {
    $(".form-select").change(function() {
        if ($(this).val() == "Teacher") {
          $('#another-field').show();
        }
      });
      $(".form-select").trigger("change");
      });

 
    