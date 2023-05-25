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
    // Display a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

// Define a Personal Information route
$f3->route('GET|POST /personal', function($f3) {

    // If the form has been posted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        // Get the data

        // Validate the data

        // Store the data in the session

        // Redirect to Experience route
        $f3->reroute('experience');
    }

    // Display a view page
    $view = new Template();
    echo $view->render('views/personal-info.html');
});

// Define an Experience route
$f3->route('GET|POST /experience', function($f3) {

    // If the form has been posted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        // Get the data

        // Validate the data

        // Store the data in the session

        // Redirect to Mailing Lists route
        $f3->reroute('mailing-lists');
    }

    // Display a view page
    $view = new Template();
    echo $view->render('views/experience.html');
});

// Define a Mailing Lists route
$f3->route('GET|POST /mailing-lists', function($f3) {

    // If the form has been posted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        // Get the data

        // Validate the data

        // Store the data in the session

        // Redirect to Summary route
        $f3->reroute('summary');
    }

    // Display a view page
    $view = new Template();
    echo $view->render('views/mailing-lists-2.html');
});

// Define a Summary route
$f3->route('GET /summary', function() {

    //echo '<h1>Mailing Lists</h1>';

    // Display a view page
    $view = new Template();
    echo $view->render('views/summary.html');
});

// Run Fat-Free
$f3->run();
