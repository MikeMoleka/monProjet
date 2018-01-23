<html>
<!DOCTYPE html>
<html>
<head>
	<title>formulaire</title>
</head>
	<body>
		<form method="post" action="insert.php">
			<label>Entrez votre : </label>
			<div>
				<label>mail : </label>
				<input type="text" name="mail" value="<?php print $_GET['mail']; ?>" >
			</div>
			
			<div>
				<label>Nom : </label>
				<input type="text" name="nom" value="<?php print $_GET['nom']; ?>">
			</div>
			<div>
				<label>Prénom : </label>
				<input type="text" name="prenom" value="<?php print $_GET['prenom']; ?>">
			</div>
			
			<div>
				<label>Adresse : </label>
				<input type="text" name="adresse" value="<?php print $_GET['adresse']; ?>">
			</div>
			
			<div>
				<label>Age : </label>
				<input type="text" name="age" value="<?php print $_GET['age']; ?>">
			</div>
			
			<div>
				<label>Téléphone : </label>
				<input type="text" name="telephone" value="<?php print $_GET['telephone']; ?>">
			</div>
			<input type="submit">
		</form>
	</body>
</html>
