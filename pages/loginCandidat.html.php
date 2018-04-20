<form action="" method="post">
	<label> Login: </label>
	<input type="text" name="email" value="<?php echo $email ?>" class="mail_candidat">
	<label> Mot de passe: </label>
	<input type="password" name="password" class="mdp_candidat">
    <input type="submit" value="Se connecter" class="login-btn">
</form>

<?php
if (isset($_POST['email']))
	echo($_POST['email']);

if (isset($_POST['password']))
	echp($_POST['password']);
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="scripts/loginCandidat.js"></script>