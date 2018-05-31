$(document).ready(function(){

  $temprefresh = function() {

    $.ajax({

        url : 'php/temperatuur.php',
        type : 'GET',
        dataType:'html',
        success : function(data) {
            $("#temp").html(data);
        }
    });

      };



  $temprefresh();
  setInterval(function(){ $temprefresh(); }, 30000);



});
