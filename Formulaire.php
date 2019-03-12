
<!DOCTYPE html>
<html>
<head>
	<title>	vos identifiant </title>
	<META charset="utf-8"/>
	<style type="text/css">
		fieldset{
			font-weight: 50px;
			width: 50px;
		}
		label{
			text-align: left;
		}
	</style>
</head>
<body>
	<form method ="post" action="traitement.php" style="margin-left:100px;margin-right:100px;" >
<center><h1>RENSEIGNE VOS INFORMATIONS</h1></center>
<p>
	<center><fieldset>
   		 <legend> Vos informations</legend>
	  <table>
	  <tr> 
	   <th> <label for="nom">NOM: </label> </th>
	   <th><input name =" nom" type="text" placeholder="nom...." id="nom" required /> </th>
	  </tr>
     <tr>
	 <th> <label for="prenom">PRENOM: </label></th>
	 <th> <input name =" prenom" type="text" placeholder="prenom...." id="prenom" required />  </th>
     </tr>
    <tr>
    	<th><label for="adresse">ADRESSE: </label></th>
    	<th><input name =" adresse" type="text" placeholder="adresse....." id="adresse" required /> </th>
    </tr>

    <tr>
    	<th><label for="PROFESSION">PROFESSION: </label></th>
    	<th><input name =" formulaire" type="text" placeholder="profession...." id="profession" required /> </th>
    </tr>
	  </table>
	  <br>
	  <center><input type ="submit" value= "inscrire!"/></center>
	 </p>
	</fieldset></center>
	 </form>



	  


