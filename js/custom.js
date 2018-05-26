$(document).ready(function() {

  if ($('#addPerson').length > 0) {
    $('.radio-btn-holder input').on('change', function(e) {
      console.log($(this).val());
      if ($(this).val() == 0) {
        $('#adultHolder').show();
        $('#childHolder').hide();
      } else {
        $('#adultHolder').hide();
        $('#childHolder').show();
      }
    });
  }
});