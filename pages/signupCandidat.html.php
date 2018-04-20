
<div id="inscription" class="inscription">
	<h1>Inscription</h1>

	<form action="" method="post">
		<p>
			<label> Identifiant: </label>
			<input id="inputEmail" type="text" name="email" class="mail_candidat" placeholder="Adresse Mail" required="" autofocus=""></input>
		</p>

		<p>
			<label> Mot de passe: </label>
			<input id="inputPassword" type="password" name="password" class="mdp_candidat" placeholder="Mot de Passe" required=""></input>
		</p>

		<p>
			<label> Confirmer: </label>
			<input id="inputPassword" type="password" name="password" class="mdp_candidat" placeholder="Confirmer le Mot de Passe" required=""></input>
		</p>

		<input type="radio" name="gender" value="Candidat">Candidat</input>
		<input id="test" type="radio" name="gender" value="Recruteur" click="greet">Recruteur</input>

		<p>
			<label> Entreprise: </label>
			<input id="inputEntreprise" type="text" name="entreprise" class="nom_entreprise" placeholder="Nom de l'entreprise" required=""></input>		</p>

		<input id="BTsignup" type="submit" value="S'inscrire" class="signup-btn">

	</form>
</div>

<?php
if (isset($_POST['email']))
	echo($_POST['email']);

if (isset($_POST['password']))
	echp($_POST['password']);
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="scripts/loginCandidat.js"></script>