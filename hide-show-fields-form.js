$(document).ready(function () {
$(".form-select").change(function() {
    if ($(this).val() == "Student" || $(this).val() == "Teacher") {
      $('#another-field').show();
    } else {
      $('#another-field').hide();
    }
  });
  $(".form-select").trigger("change");
  });

 
    