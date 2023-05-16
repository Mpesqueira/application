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
$f3->route('GET /personal-info', function() {

    //echo '<h1>Personal Info</h1>';

    // Display a view page
    $view = new Template();
    echo $view->render('views/personal-info.html');
});

// Define an Experience route
$f3->route('GET /experience', function() {

    //echo '<h1>Experience</h1>';

    // Display a view page
    $view = new Template();
    echo $view->render('views/experience.html');
});

// Define a Mailing Lists route
$f3->route('GET /mailing-lists', function() {

    //echo '<h1>Mailing Lists</h1>';

    // Display a view page
    $view = new Template();
    echo $view->render('views/mailing-lists.html');
});

// Run Fat-Free
$f3->run();
