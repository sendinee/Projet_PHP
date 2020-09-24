<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
  <title>Formulaire de contact</title>
</head>
<body>
	
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<div class="container">
		<a class="navbar-brand" href="index.php?page=1">Historique E-mail</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="navbar-nav ml-auto">  
			  <li class="nav-item">
				<a class="nav-link" href="index.php?page=2">Ecrire un e-mail</a>
			  </li> 
			</ul> 
		</div>
	</div>
</nav>

<?php
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}else{
		$page=0;
	}
	switch($page){
		case 1 : require_once("Vue/VueMail.php");break;
		case 2 : require_once("Vue/formulaire.php");break;
		case 3 : require_once("Vue/show.php");break;
		break;
	}

	?>
</body>
</html>