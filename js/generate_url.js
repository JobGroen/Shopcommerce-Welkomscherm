$(document).ready(function(){

// submit form triggers
$('#submit').click(function() {
$goToWelkom();
});

$('.form_input_all').keydown(function(event){
    var keyCode = (event.keyCode ? event.keyCode : event.which);
    if (keyCode == 13) {
        $goToWelkom();
    }
});


// reset form triggers
$('#reset').click(function() {
$resetForm();
});


$goToWelkom = function() {
  if ($('#company').val() != "" && $('#aanwezigen').val() != "" && $('#tijd').val() != "") {

    $company = encodeURIComponent($('#company').val());
    $aanwezigen = encodeURIComponent($('#aanwezigen').val());
    $tijd = encodeURIComponent($('#tijd').val());

      $url = "welkom.php?company="+ $company +"&aanwezigen="+ $aanwezigen +"&tijd="+ $tijd;
      $(location).attr('href', $url);
  }
}

$resetForm = function() {
  $('.form_input_all').val("");
}
});
