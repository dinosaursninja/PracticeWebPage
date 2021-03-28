<?php
// DB CODE HERE
session_start();
date_default_timezone_set('America/New_York');

require_once "Database_Function.php";

/*
if(isset($_POST["submit"]))
{
	$username = validate_input($_POST["username"]);
	$firstname = validate_input($_POST["firstname"]);
    $lastname = validate_input($_POST["lastname"]);
    $password = validate_input($_POST["password"]);
    $matchPassword = validate_input($_POST["matchPassword"]);
    $email = validate_input($_POST["email"]);
}
*/

/* This method will check that all of the variables relating to registration are set.
This function returns true if everything goes smoothly and if it does not, then a message will be returned/shown to the user. */
function userRegistration($UserName, $F_Name, $L_Name, $Password, $matchPassword)
{
 //TODO validate each variable -- check if they are set and if not send a message
    $UserName = strtolower($UserName);

    //Check if passwords match
    if($Password != $matchPassword){
        return "Passwords do not match";
    }

    //if password match, insert user in the DB //TODO: add email variable after password in the future
    $connection = My_Connect_DB();
    $sql = "INSERT INTO `Users`(`UserName`, `F_Name`, `L_Name`, `Password`) 
            VALUES ('$UserName', '$F_Name', '$L_Name', '$Password')";
    $result = MY_SQL_EXE($connection, $sql);
    return $result;
}
function userLogin($username, $Password)
{
    $username = strtolower($username);

    //connect first in order to extract stored password
    //then when we obtain that stored password we match it agaisnt what the user gave us
    //if successful we start a session for the user if he succesfully logs in.
    $connection = My_Connect_DB();
    $sql = "SELECT Password
            FROM Users
            WHERE UserName = '$username'";
    $storedPassword = mysqli_fetch_row(MY_SQL_EXE($connection, $sql));
   // return array("stored" => $storedPassword[0], "entered" => $Password);

    if($storedPassword[0] === $Password){
        $_SESSION["currentUser"] = $username;
        return true;
    }
    else{
        return false;
    }

}



















/*

//---------------------------------------
// //to make sure the form is filled correctly
//if($_POST["submit"]) {
//    if(empty($_POST["username"])) {
//        echo "Username cannot be empty";
//    }
//    if(empty($_POST["firstname"])) {
//        echo "First name cannot be empty";
//    }
//    if(empty($_POST["lastname"])) {
//        echo "Last name cannot be empty";
//
//    }
//    if(empty($_POST["password"])) {
//        echo "Password cannot be empty";
//        exit();
//    }
//    if($_POST["password"] != $_POST["matchPassword"]) {
//        echo "Password does not match";
//        exit();
//    }
//    if(empty($_POST["email"])) {
//        echo "email cannot be empty";
//    }



	//checks if user exist in the DB
    if(mysqli_num_rows($result > 0)){
        echo "Username already exists, please try different username.<br/>";
        exit();
    } 
   else //THIS IS INCORRECT
   {
        $sql = "INSERT INTO Users VALUES (
            '".$_POST["username"]."', '".md5($_POST["passwd"])."', 
           '".$_POST["name"]."', '".$_POST["lname"]."',".rand(50000, 100000).",'0',
            '".$_POST["email"]."'
        );";
    }

//    $sql = "SELECT * FROM Users";
    MY_SQL_EXE($connection, $sql);

    echo "<hr>";
    Show_Me($connection, $sql);
}


function Show_Me($connection, $username){
    $sql = "SELECT * FROM Users WHERE UserName='".$_POST['username']."';";
    $result = MY_SQL_EXE($connection, $sql);

    if($row = mysqli_fetch_row($result)) {
        echo "Your information is listed as follows. <br/>";
        echo "Username: " . $row[0] . "<br/>";
        echo "Name: " . $row[2] . "<br/>";
        echo "Email: " . $row[6] . "<br/>";
        echo "Last Name: " . $row[3] . "<br/>";
        echo "ID: " . $row[4] . "<br/>";
    } else {
        echo "No such username: ".$username."<br/>";
    }
}
*/
?>