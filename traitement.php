<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
try{

			//connection à la base de donnée
		include ('connectDB.php');
		//$db=new PDO('mysql:host=localhost;dbname=formulaire_client;charset=utf8','root','');
		//insertion des valeurs dans la base de donnée
		$rep=$db->prepare('INSERT INTO clients(NOM,PRENOM,ADRESSE,PROFESSION) values (:NOM,:PRENOM,:ADRESSE,:PROFESSION)');
		//$rep->execute(array($nom,$prenom,$adresse,$ville,$codepostal));
		//affichage des données recuperées
		include ('affiche.php');

 // Minimum de "sécurité" avant de traiter les données du formulaire
 function securisation($info){
                $info = trim($info);
                $info = stripslashes($info);
                $info = strip_tags($info);
                return $info;
          }


          $nom = securisation($_POST['NOM']);
          $prenom = securisation($_POST['PRENOM']);
          $adresse = securisation($_POST['ADRESSE']);
          $profession = securisation($_POST['PROFESSION']);

		  $rep->bindParam(':NOM',$nom);
		  $rep->bindParam(':PRENOM',$prenom);
		  $rep->bindParam(':ADRESSE',$adresse);
		  $rep->bindParam(':PROFESSION',$ville);

		  $resultat = $rep->execute();

		  if($resultat){
		     header('Location: affiche.php');
		  }else{
		     header('Location: erreur.php');

		  }

		         
		}catch(PDOException $e){
		  echo 'Erreur!!! '.$e->getMessage();
		  echo 'Echec de la connexion avec la base de donnée';
		}




?>



</body>
</html>