<?php
    session_start();

    require_once("config/config.php");

    $container = "";
    $link = '';

    if (isset($_GET['link']))
    {
        $link = $_GET['link'];
    }

    if ($link=="loginCandidat") {
        $email="";

        if(isset($_POST['mail'])) {
            $_SESSION['id'] = $_POST['id'];
            $_SESSION['prenom'] = $_POST['prenom'];
            $_SESSION['nom'] = $_POST['nom'];

            echo($_SESSION['id']);
            echo($_SESSION['prenom']);
            echo($_SESSION['nom']);
        }

        ob_start();
        require_once(BASE_FILE."pages/loginCandidat.html.php");
        $container=ob_get_clean();
    }

    elseif ($link=="logout")
    {
        ob_start();
        $_SESSION['id'] = NULL;
        $_SESSION['prenom'] = NULL;
        $_SESSION['nom'] = NULL;
        session_destroy();
        require_once(BASE_FILE."pages/logout.html.php");
        $container = ob_get_clean();
    }

	elseif ($link=="signupCandidat") {
        ob_start();
        require_once(BASE_FILE."pages/signupCandidat.html.php");
        $container=ob_get_clean();
    }

    elseif ($link=="candidats") {
        ob_start();
        require_once(BASE_FILE."pages/candidats.html.php");
        $container=ob_get_clean();
    }

    elseif ($link=="candidat") {
        ob_start();
        require_once(BASE_FILE."pages/candidat.html.php");
        $container=ob_get_clean();
    }

    elseif ($link=="offres") {
        ob_start();
        require_once(BASE_FILE."pages/offres.html.php");
        $container=ob_get_clean();
    }

    elseif ($link=="offre") {
        ob_start();
        require_once(BASE_FILE."pages/offre.html.php");
        $container=ob_get_clean();
    }

    elseif ($link=="offreEdition") {
        ob_start();
        require_once(BASE_FILE."pages/offreEdition.html.php");
        $container=ob_get_clean();
    }

    elseif ($link=="") {
        ob_start();
        require_once(BASE_FILE."pages/accueil.html.php");
        $container=ob_get_clean();
    }


    else
        $container = "erreur";


    require_once(BASE_FILE."skeleton/skeleton.html.php");