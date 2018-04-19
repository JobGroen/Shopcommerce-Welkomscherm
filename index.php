<?php
$company = isset($_GET["company"]) ? $_GET["company"] : null;
$aanwezigen = isset($_GET["aanwezigen"]) ? $_GET["aanwezigen"] : null;
$tijd= isset($_GET["tijd"]) ? $_GET["tijd"] : null;


function getInput($data) {

    if (isset($data)) {
        $data = htmlentities($data);
        $data = preg_replace("(_)", '&nbsp;', $data);
    } else {
        $data = '-';
    }

    return $data;
}
function dateToText($date)
{

    switch ($date) {
        case "1":
            return "Januari";
            break;
        case "2":
            return "Februari";
            break;
        case "3":
            return "Maart";
            break;
        case "4":
            return "April";
            break;
        case "5":
            return "Mei";
            break;
        case "6":
            return "Juni";
            break;
        case "7":
            return "Juli";
            break;
        case "8":
            return "Augustus";
            break;
        case "9":
            return "September";
            break;
        case "10":
            return "Oktober";
            break;
        case "11":
            return "November";
            break;
        case "12":
            echo "December";
            break;
        default:
            return "Geen datum beschikbaar";
    }



}
?>
  <!DOCTYPE html>
  <html lang="nl">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welkom bij Shopcommerce</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/style.min.css">

    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>

  <body onload="startTime()">
    <header>
    </header>


    <!-- Video timelapse -->
    <div class="videoContainer">
      <div class="overlay"></div>
      <video autoplay loop muted>
	        <source src="images/dc.mp4" type="video/mp4">
	    </video>
    </div>


    <!-- shopcommercelogo bovenin -->
    <div class="shopcommercelogo">
      <img src="images/logo-shopcommerce.png" alt="">
    </div>


    <!-- Informatie welkomscherm -->
    <div class="informatie text-left">
      <p class="informatie__lead lead">Welkom,</p>
      <h1 class="informatie__h1 display-2"><?php echo getInput($company); ?></h1>
      <p class="lead"><strong>Aanwezigen:</strong>
        <?php echo getInput($aanwezigen); ?>
      </p>
      <p class="lead">
        <p class="lead btn  datum" id="date"><?php echo date("d") ." ". dateToText(date("m")) ." ". date("Y") .""?></p>
        <p class="lead lead__right btn tijd">
          <?php echo getInput($tijd); ?> uur</p>
      </p>
    </div>


    <div class="fixed-bottom text-left voorkeurspartners">
      <div class="voorkeurspartners__links">
        <img src="images/magento.png" alt="magento">
      </div>

      <div class="voorkeurspartners__rechts">
      </div>
    </div>

    <script src="js/datum.js"></script>
    <script src="//code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="js/plugins.min.js"></script>
    <script src="js/app.min.js"></script>
  </body>

  </html>
