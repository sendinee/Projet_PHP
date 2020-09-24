<?php
class Modele
{
	private $unPDO;

	public function __construct($serveur,$bdd,$user,$mdp){
		$this->unPdo = null;

		try
		{
			//connexiona la bdd avec class pdo
			$this->unPdo= new PDO("mysql:host=".$serveur.";dbname=".$bdd,$user,$mdp);
		}
		catch(PDOException $exp)
		{
			echo"Erreur de connexion a la base de données";

			echo $exp->getMessage();
		}
		
	}

	public function selectAll(){
		
		if($this->unPdo!=null)
		{
			$requete="select * from mail ORDER BY date desc;";
			//preparation de la requete avant execution
			$select= $this->unPdo->prepare($requete);
			//execution de la requete
			$select->execute();
			//extraction des données
			$resultats = $select->fetchAll();
			return $resultats;
		}

	}

	public function send_mail($tab)
	{
		if($this->unPdo!=null)
		{
			$requete="insert into mail values (null,:nom_prenom,:email,:texte,default,0)";
			$donnees=array(":nom_prenom"=>$tab['nom_prenom'],
							":email"=>$tab['email'],
							":texte"=>$tab['texte']);
			$insert = $this->unPdo->prepare($requete);
			$insert->execute($donnees);
		}
	}
	
	public function show_mail($id)
	{
		$requete="select * from mail where id_mail = ".$id.";";
		//preparation de la requete avant execution
		$select= $this->unPdo->prepare($requete);
		//execution de la requete
		$select->execute();
		//extraction des données
		$resultats = $select->fetch();
		return $resultats;
	}
	public function delete_mail($id_mail){
		if($this->unPdo!= null){
			$requete="delete from mail where id_mail = :idmail;";
			$donnees=array(":idmail"=>$id_mail);
			$delete=$this->unPdo->prepare($requete);
			$delete->execute($donnees);

		}
	}
	public function first_visit($id_mail){
		$requete ="update mail set new = :value where id_mail = ".$id_mail.";";
		$donnees=array(":value"=>1);
		$insert = $this->unPdo->prepare($requete);
		$insert->execute($donnees);	
	}
}
?>