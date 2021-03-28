<?php
// @Bruccy: This page handles all of the actions for anytime the user clicks a submit button

//starts session & import db
session_start();
require_once "Database_Function.php";
require_once "Project-Login.php";

/* @Bruccy:
 * Request captures both post and get inputs for anything
 * involving the task keyword. The task keyword is going to
 * determine whether a registration or login is taking place
 * for the login page and works in
 * conjuction with the Project_Login.php as well */
$action = validate_input($_REQUEST["task"]);

//This is what will redirect to a new page after login in or checkout.
$redirect = validate_input($_REQUEST["redirect"]);

//This will output a message in case of an error in a JSON file. reference in lines 48
$output = array(success => true, message => '', payload => array());
//the output from the line above will end up printing as txt in the line below
header("Content-Type: text/json");

//START PRESENTATION HERE ------>
/* @Bruccy:
We are trimming/cleaning/ridding user answers of special characters
to avoid sql injections and simultaneously
This switch block will handle
 *   - Registration
 *   - Login
 *   - Checkout
 *   - Adding to cart
 *   - Comparing items
 *   - Log out (have to add this function later)
*/
switch ($action) {
    case "register":
        $username = validate_input($_REQUEST["username"]);
        $firstName = validate_input($_REQUEST["firstName"]);
        $lastName = validate_input($_REQUEST["lastName"]);
        $password = validate_input($_REQUEST["password"]);
        $matchPassword = validate_input($_REQUEST["matchPassword"]);
        //$email = validate_input($_REQUEST["username"]);

        /* This will take the information passed by the user, store it in the variable regOut.
         * and based on the value of that var, either redirect the store/forum or login page. */
        $registrationOutput = userRegistration($username, $firstName, $lastName, $password, $matchPassword);
        if (true === $registrationOutput) {
            $redirect = 'Login.php#test-swipe-1';
        } else {
//            $redirect = 'login.php?toast=Invalid%20credentials';
            $output["success"] = false;
            $output["message"] = $registrationOutput;
        }
        break;

    case "login":
        $username = validate_input($_REQUEST["username"]);
        $password = validate_input($_REQUEST["password"]);

        //This will take the information passed and either redirect the store/forum or login page.
        $loginOutput = userLogin($username, $password);
      //debug--  $output["payload"]["sql"] = $loginOutput; //adds sql info seprate form the username infor to debug
      //d-bug--  $output["payload"]["username"] = $username; //makes sure the var username is being captured, sent and not empty.

        if(true === $loginOutput)
        {
           $redirect = 'IndexCapstone.php';
        } else {
            $redirect = 'Login.php?toast=Try%20again%20buddy';
        }
        break;

    case "logout":
        session_destroy();
        $redirect = 'IndexCapstone.php';
        break;

} //end of switch block


/* This is the location header that tells the browser
 * where to go when redirect variable is called.*/
function redirect($redirect){
    header("Location: ".$redirect);
    exit();
}

//calls the redirect method
if(isset($redirect) && !empty($redirect)) {
    redirect($redirect);
}
else{
    echo json_encode($output, JSON_PRETTY_PRINT); //for debugging only -- prints errors
}




?>