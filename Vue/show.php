<?php
	require_once("Controleur/controlleur.php");
	$unControleur = new Controleur("localhost","mail","root","");
	$id = $_GET['id_mail'];
	$resultat = $unControleur->show_mail($id);
	
	echo "<div class='container'>
			<div class='row mt-4'>
				<div class='col-8 offset-2'> 
					<div class='card'>
						<div class='card-header'>
							<div class='mt-1 float-right'>".$resultat['email']."</div>
						<h1 class='h4'>".$resultat['nom_prenom']."</h1>
					</div>
					<div class='card-body'>".$resultat['texte']."</div>
					<div class='card-footer'>
						<div class='float-right'>
						<form method='post' action=''>
							<input type='hidden' value=".$resultat['id_mail']." id='id_mail' name='id_mail'>
							<input type='submit' class='btn btn-danger' value='Supprimer' id='Supprimer' name='Supprimer'>
						</div>
						".$resultat['date']."</div>
					</div>
				</div>
			</div>
		</div>";
	if(isset($_POST['Supprimer'])){
		$unControleur->delete_mail($_POST['id_mail']);
		header('location: index.php?page=1');
	}
	if($resultat['new'] == 0)
	{
		$unControleur->first_visit($id);
	}
?>