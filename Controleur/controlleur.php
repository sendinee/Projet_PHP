<?php
	//appel de la methode 
	require_once("Modele/modele.php");
	class Controleur{

		private $unModele;

		public function __construct($serveur,$bdd,$user,$mdp)
		{
			//instanciation de la class modele
			$this->unModele = new Modele($serveur,$bdd,$user,$mdp);
		}
		function selectAll()
		{
			$resultats = $this->unModele->selectAll();
			return $resultats;
		}
		public function send_mail($tab){
			$this->unModele->send_mail($tab);
		}
		public function show_mail($id){
			$resultats = $this->unModele->show_mail($id);
			return $resultats;
		}
		public function delete_mail($id_mail){
			$this->unModele->delete_mail($id_mail);
		}
		public function first_visit($id_mail){
			$this->unModele->first_visit($id_mail);
		}
}
?>