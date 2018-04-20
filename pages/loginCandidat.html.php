
<div id="connexion" class="connexion">
	<h1>Connexion</h1>

	<form action="" method="post">
		<p>
			<label> Identifiant: </label>
			<input id="inputEmail" type="text" name="email" value="<?php echo $email ?>" class="mail_candidat" placeholder="Adresse Mail" required="" autofocus=""></input>
		</p>

		<p>
			<label> Mot de passe: </label>
			<input id="inputPassword" type="password" name="password" class="mdp_candidat" placeholder="Mot de Passe" required=""></input>
		</p>

		<div class="checkbox mb-3">
		  <label id="checkRemember">
			<input type="checkbox" value="remember"> Se souvenir de moi </input>
		  </label>
		</div>

		<input id="BTlogin" type="submit" value="Se connecter" class="login-btn">

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