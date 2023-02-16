<?php

if (isset($_GET['p'])) {


    switch ($_GET['p']) {
        case 'ecole':
            include "./pages/ecole.php";
            break;
        case 'open':
            include './pages/openhuiz.php';
            break;
        case 'prog':
            include './pages/programme.php';
            break;
        case 'studio':
            include './pages/studiobronz.php';
            break;
        case 'propos':
            include './pages/propos_de_bronz.php';
            break;
        case 'visit':
            include './pages/votre_visite.php';
            break;

        default:
            include "./pages/404.php";
    }
} else {

    include_once "./pages/homepages.php";
}