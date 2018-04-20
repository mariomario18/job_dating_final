<html>
	<head>
		<meta charset="utf-8">
		<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="theme/css/style.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="theme/css/loginCandidat.css">
		<link rel="stylesheet" type="text/css" href="theme/css/signupCandidat.css">
	</head>
	
	<body>
		<header>
	        <nav class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a id:"navbarbrand" class="navbar-brand" href="index.php"><img src="theme/images/CDI.png" alt="logo"/></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<?php
								echo "<li><a href=\"index.php?link=candidats\">Liste des candidats</a></li>";
								echo "<li><a href=\"index.php?link=offres\">Liste des offres</a></li>";
								echo "<li><a href=\"index.php?link=loginCandidat\">Se connecter</a></li>";
						    ?>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<div class="container">
		<?php echo $container; ?>

		</div>

		<footer>
			<div class="navbar navbar-default">
				<div class="container-fluid">
					<p>Opportunity Manager</p>
				</div>
			</div>
		</footer>
	</body>

</html>

