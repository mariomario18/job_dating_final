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

            header('Location: index.php?link=offres');
        }

        ob_start();
        require_once(BASE_FILE."pages/loginCandidat.html.php");
        $container=ob_get_clean();
    }

    elseif($link=="loginCandidatSuccess") {
        $_SESSION['id'] = $_POST['id'];
        $_SESSION['prenom'] = $_POST['prenom'];
        $_SESSION['nom'] = $_POST['nom'];

        ob_start();
        require_once(BASE_FILE."pages/loginCandidatSuccess.html.php");
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