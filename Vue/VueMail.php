<?php
	require_once("Controleur/controlleur.php");
	$unControleur = new Controleur("localhost","mail","root","");
	$resultats= $unControleur->selectAll();
	if(empty($resultats) == false){
		echo "<div class='container'>
				<div class='row mt-4'>
			<div class='col-6 offset-3'>";
		foreach ($resultats as $unResultat) {
			echo "<div class='card-body card mb-2'>
					<a href='index.php?page=3&id_mail=".$unResultat['id_mail']."' class='text-decoration-none'>	
						<div class='float-right text-sm text-muted'>".$unResultat['date'];
			if($unResultat['new'] == 0){
				echo '<span class="badge badge-success">NEW</span>';
			}
			echo "</div>
						<h3>".$unResultat['nom_prenom']."</h3>	
						<h6 class='text-muted'>".$unResultat['email']."</h6>
					</a>
				</div>";
		}
		echo "</div></div></div>";
	}

?>
