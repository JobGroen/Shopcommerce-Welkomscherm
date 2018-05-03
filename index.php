<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shopcommerce welkomscherm</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="css/style.min.css">

	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>

	<div class="container">

		<!-- welkomscherm algemeen -->
		<div class="welkomscherm form-row text-center">

			<!-- welkomscherm linkerkant -->
			<div class="welkomscherm__links col-md-6">
				<h1 class="welkomscherm__links--h1 font-weight-light">Shopcommerce</h1>
				<h2 class="welkomscherm__links--h2 font-weight-light">Voer de gegevens in voor de meeting die gaat plaatsvinden.</h2>
				<a class="welkomscherm__links--button font-weight-light btn btn-lg" role="button" id="home" name="home" href="https://www.shopcommerce.nl/" rel="nofollow">Terug naar de website</a>
				<p class="welkomscherm__links--copyright font-weight-light">&copy; 2018-2019 | Shopcommerce</p><br/>

				<div class="welkomscherm__links--form form-row">
					<div class="col-md-4 form-group">
						<p><i class="welkomscherm__links--icons fas fa-check-circle"></i> Easy to use</p>
					</div>
					<div class="col-md-4 form-group">
						<p><i class="welkomscherm__links--icons fas fa-check-circle"></i> Professioneel</p>
					</div>
					<div class="col-md-4 form-group">
						<p><i class="welkomscherm__links--icons fas fa-check-circle"></i> Persoonlijk</p>
					</div>
				</div>
			</div>

			<!-- welkomscherm rechterkant -->
			<div class="welkomscherm__rechts col-md-6">
				<h2 class="welkomscherm__rechts--h2 font-weight-light">Voer de gegevens in</h2>
				<div class="welkomscherm__rechts--form form-row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="company" class="form-control" name="company" id="company" placeholder="Bedrijfsnaam">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="tijd" class="form-control" name="tijd" id="tijd" placeholder="Tijd">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<input type="aanwezigen" class="form-control" name="aanwezigen" id="aanwezigen" placeholder="Aanwezigen">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						<button type="reset" class="welkomscherm__rechts--reset form-control btn">Reset formulier</button>
					</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						<button type="submit" name="submit" id="submit" class="welkomscherm__rechts--submit form-control btn">Genereer scherm</button>
						</div>
					</div>
					<div class="col-md-12">
						<p class="welkomscherm__rechts--p font-weight-light">*Bij meerdere aanwezigen graag een " , " gebruiken.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- js script files -->
	<script src="//code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="js/plugins.min.js"></script>
	<script src="js/app.min.js"></script>
	<script src="js/generate_url.js"></script>
</body>

</html>
