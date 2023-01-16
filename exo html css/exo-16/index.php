<?php

if (isset($_GET['p'])) {


    switch ($_GET['p']) {
        case 'acceuil':
            include "pages/homepage.php";
            break;
        case 'p1':
            include 'pages/page1.php';
            break;
        case 'p2':
            include 'pages/page2.php';
            break;
        case 'p3':
            include 'pages/page3.php';
            break;
        case 'p4':
            include 'pages/page4.php';
            break;
        
        default:
            include "pages/404.php";
    }
} else {

    include_once "pages/homepages.php";
}
