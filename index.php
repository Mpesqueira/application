<?php
/*
 * Mark Pesqueira
 * 04/25/2023
 * 328/application/index.php
 * Controller for application project
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Create an F3 (Fat Free Framework) object
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function() {
    echo '<h1>Hello World!</h1>';

    // Display a view page
    //$view = new Template();
    //echo $view->render('views/home.html');
});

// Run Fat-Free
$f3->run();
?>