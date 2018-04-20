<form method="post" class="offreEdition">
    <label> Nom </label>
	<input type="text" name="nom" value="<?php echo $nom; ?>">
	<span class="error"><p>* <?php echo $errNom;?></p></span>

	<label> Description </label>
	<textarea name="description"><?php echo $description; ?></textarea>
	<span class="error"><p>* <?php echo $errDescription;?></p></span>
	
	<label> Lieu </label>
	<input type="text" name="lieu" value="<?php echo $lieu; ?>">
	<span class="error"><p>* <?php echo $errLieu;?></p></span>
	
	<label> Date (format AAAA-MM-JJ)</label>
	<input type="text" name="date" value="<?php echo $date; ?>">
    <span class="error"><p>* <?php echo $errDate;?></p></span>

    <?php
    if (!isset($id))
    {
	    echo "<label> Catégorie :  </label>";

		echo "<input type=\"checkbox\" name= \"categorie[simpleHomme]\" value=\"simpleHomme\"";

		if(isset($_POST['categorie']['simpleHomme'])) 
			echo "checked='checked'";

		echo "/>Simple homme";

		echo "<input type=\"checkbox\" name= \"categorie[simpleFemme]\" value=\"simpleFemme\"";

		if(isset($_POST['categorie']['simpleFemme'])) 
			echo "checked='checked'";

		echo "/>Simple femme";

		echo "<input type=\"checkbox\" name= \"categorie[doubleHomme]\" value=\"doubleHomme\"";

		if(isset($_POST['categorie']['doubleHomme'])) 
			echo "checked='checked'";

		echo "/>Double homme";

		echo "<input type=\"checkbox\" name= \"categorie[doubleFemme]\" value=\"doubleFemme\"";

		if(isset($_POST['categorie']['doubleFemme'])) 
			echo "checked='checked'";

		echo "/>Double femme";

		echo "<input type=\"checkbox\" name= \"categorie[doubleMixte]\" value=\"doubleMixte\"";

		if(isset($_POST['categorie']['doubleMixte'])) 
			echo "checked='checked'";

		echo "/>Double mixte";
	}

	else
	{
		echo "<label> Catégorie </label>";
		echo "<select name=\"categorie\">";

	 	echo "<option value=\"simpleHomme\">Simple Homme</option>";
	 	echo "<option value=\"simpleFemme\">Simple Femme</option>";
	 	echo "<option value=\"doubleHomme\">Double Homme</option>";
	 	echo "<option value=\"doubleFemme\">Double Femme</option>";
	 	echo "<option value=\"doubleMixte\">Double Mixte</option>";

		echo "</select>";
	}
	?>

	<label> Coût </label>
	<input type="number" name="cout" value="<?php echo $cout; ?>">

<?php
	if (!$valide)
	{
		echo "<input type=\"submit\" value=\"Suivant\">";
		echo "</form>";
		echo "<a href=\"index.php?link=listeTournoi\"><p> Retour à la liste des tournois </p></a>";
	}
?>