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

        // ["fname"]=> "Mark" ["lname"]=> "Pesqueira"
        // ["email"]=> "email@gmail.com" ["state"]=> "Washington"
        // ["phone"]=> "8581234567"
        //var_dump($_POST);

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $state = $_POST['state'];
        $phone = $_POST['phone'];

        // echo ("First Name: $fname, Last Name: $lname, Email: $email");


        // Validate the data


        // Store the data in the session array
        $f3->set('SESSION.fname', $fname);
        $f3->set('SESSION.lname', $lname);
        $f3->set('SESSION.email', $email);
        $f3->set('SESSION.state', $state);
        $f3->set('SESSION.phone', $phone);

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

        // ["bio"]=> "" ["github"]=> "github.com/my_github" ["experience"]=> "0-2" ["relocate"]=> "yes"
        // var_dump($_POST);

        $bio = $_POST['bio'];
        $github = $_POST['github'];
        $experience = $_POST['experience'];
        $relocate = $_POST['relocate'];

        // Validate the data


        // Store the data in the session
        $f3->set('SESSION.bio', $bio);
        $f3->set('SESSION.github', $github);
        $f3->set('SESSION.experience', $experience);
        $f3->set('SESSION.relocate', $relocate);

        // Redirect to Mailing Lists route
        $f3->reroute('mailing-lists');
        //$f3->reroute('summary');

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
        //var_dump($_POST);
        //["jobs"]=> { [0]=> "PHP" [1]=> "CSS" } ["verts"]=> { [0]=> "SaaS" [1]=> "Industrial tech" }

        $jobs = implode(", ", $_POST['jobs']);
        $verts = implode(", ", $_POST['verts']);

        // Validate the data


        // Store the data in the session
        $f3->set('SESSION.jobs', $jobs);
        $f3->set('SESSION.verts', $verts);


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

    session_destroy();
});

// Run Fat-Free
$f3->run();
