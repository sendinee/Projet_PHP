<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
	<title>Formulaire de contact</title>
</head>
<body>

	<div class="container">
		<div class="row mt-5">
			<div class="col-md-6 offset-md-3">
				<form action="" method="post">
					<div class="form-group">
						<label for="fillname">Nom &amp; Prénom :</label>
						<input type="text" name="nom_prenom" id="nom_prenom" class="form-control " placeholder="Nom &amp; prénom" value="" required>
					</div>
					<div class="form-group">
						<label for="email">Email :</label>
						<input type="email" name="email" id="email" class="form-control " placeholder="Adresse mail" value="" required>
					</div>
					<div class="form-group">
						<label for="content">Message :</label>
						<textarea name="texte" id="texte" cols="30" rows="10" class="form-control " placeholder="écrire un message" required></textarea>
					</div>
					<button type="Reset" name="Reset" value="Reset" class="btn btn-white ml-1 border-dark border float-right">Reset</button>
					<button type="Submit" name="Valider" value="Valider" class="btn btn-primary border border-primary float-right">Envoyer</button>
				</form>
			</div>
		</div>
	</div>
	<?php	
		require_once("Controleur/controleur.php");
		$unControleur = new Controleur("localhost","mail","root","");
		if(isset($_POST['Valider']))
		{
			$unControleur->send_mail($_POST);
		}
		
	?>
</body>
