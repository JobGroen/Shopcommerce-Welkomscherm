<?php
$company = isset($_GET["company"]) ? $_GET["company"] : null;
$aanwezigen = isset($_GET["aanwezigen"]) ? $_GET["aanwezigen"] : null;

function getInput($data) {

    if (isset($data)) {
        $data = htmlentities($data);
        $data = preg_replace("(_)", '&nbsp;', $data);
    } else {
        $data = '-';
    }

    return $data;
}
?>
<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Title</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.min.css">

	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body onload="startTime()">
	<header>
	</header>

	<div class="videoContainer">
	    <div class="overlay"></div>
	    <video autoplay loop muted>
	        <source src="dc.mp4" type="video/mp4">
	    </video>
	</div>
	<div class="shopcommercelogo">
		<img src="images/logo-shopcommerce.png" alt="">
	</div>

	<div class="informatie text-left">
		<h1 class="display-4">Welkom, <?php echo getInput($company); ?>!</h1>
		<p class="lead">Aanwezigen: <?php echo getInput($aanwezigen); ?></p>
		<hr class="my-4">
		<p class="lead">
			<a class="btn btn-primary btn-lg datum" id="date"></a>
			<a class="btn btn-primary btn-lg tijd" id="txt"></a>
		</p>
	</div>
</section>


	<script src="js/datum.js"></script>
	<script src="//code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="js/plugins.min.js"></script>
	<script src="js/app.min.js"></script>
</body>

</html>
