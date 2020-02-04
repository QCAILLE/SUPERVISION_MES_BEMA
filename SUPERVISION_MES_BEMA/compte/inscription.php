<?php
	include('../BDD.php');

	$req = $bdd->query("SELECT type FROM droits_acces");
	var_dump($req);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Créer un compte</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
</head>
<body>

	<div class="container">
			<h1 align="center">Inscription</h1>
			<br /> <br />
			<form method="POST" action="">

				<label for="Nom">Nom : </label>

				<input type="text" placeholder="" id="Nom" name="Nom">

				<label for="prenom">Prénom : </label>

				<input type="text" placeholder="" id="prenom" name="prenom">

				<label for="Identifiant">Identifiant :</label>

				<input type="text" placeholder="" id="dentifiant" name="Identifiant">

				<label for="mdp">Mot de passe :</label>

				<input type="password" placeholder="" id="mdp" name="mdp">

				<label for="mdp2">Confirmation du mot de passe : </label>

				<input type="password" placeholder="" id="mdp2" name="mdp2">

				<label for="email">Adresse mail : </label>

				<input type="email" placeholder="" id="email" name="email">

				<label for="email2">Confirmez l'Adresse mail : </label>

				<input type="email" placeholder="" id="email2" name="email2">

				<label>Sélectionnez l'Habilitation : </label>
				        <select name="">
				        	<?php
				        	foreach($req as $value)
				        	{

				        	?>
				        	<option></option>
						         <option value=""><?php $value[0]; ?></option>
						         <option value=""><?php $value[1]; ?></option>
						         <option value=""><?php $value[2]; ?></option>
				        </select>
				        <?php
				   			 }
				   		?>

						<br />

				<input type="submit" name="forminscription" value="Créer un nouvel utilisateur">
				<a href="../index.php">Retour</a>
			</form>
	
</body>
</html>
