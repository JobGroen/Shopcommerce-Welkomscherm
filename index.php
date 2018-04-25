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
		<header>
		</header>

    <div class="container">
			<div class="invoerscherm">



				<h1 class="display-4">Shopcommerce welkomscherm</h1>
				<h4 class="container__h4">Voer de gegevens in voor de meeting</h4><br/>

				<div class="form-row">
					<div class="col-md-4">
						<div class="form-group">
							<input type="company" class="form-control" name="company" id="company" placeholder="Bedrijfsnaam">
							<small id="passwordHelpBlock" class="form-text text-muted">
							  De bedrijfsnaam dient correct ingevuld te worden om verwarring te voorkomen.
							</small>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<input type="aanwezigen" class="form-control" name="aanwezigen" id="aanwezigen" placeholder="Aanwezigen">
							<small id="passwordHelpBlock" class="form-text text-muted">
								Indien er meerdere personen betrokken zijn bij de meeting graag een ( , ) gebruiken na ieder persoon.
							</small>
						</div>
					</div>

					<div class="col-md-2">
						<div class="form-group">
							<input type="tijd" class="form-control" name="tijd" id="tijd" placeholder="Tijd">
							<small id="passwordHelpBlock" class="form-text text-muted">
								Bijvoorbeeld: 12:00
							</small>
						</div>
					</div>

					<div class="col-md-2">
						<div class="form-group">
							<button type="submit" id="submit" class="invoerscherm__button btn btn-primary">Genereer scherm</button>
						</div>
					</div>
				</div>

		</div>
	</div>

		<footer>

		</footer>

		<script src="//code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="js/plugins.min.js"></script>
		<script src="js/app.min.js"></script>
        <script src="js/generate_url.js"></script>
	</body>
</html>
