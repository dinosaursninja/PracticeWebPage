<?php
// @Bruccy: connect with database first thing.Since this is repetitive we write a function
include_once("Database_User.php");

function My_Connect_DB(){
    /* @Bruccy: when we reference a var, it only looks for variable inside functions (locally)
    not globally -- so we have to specify that the vars are global and to use those instead */
    global $servername, $username, $password, $dbName;

    //@Bruccy this establishes the connection with the host
    $connect = mysqli_connect($servername, $username, $password, $dbName); //mysqli is a specific library we are using
    if(!$connect){
    	die("Connection to DB failed: ".mysqli_connect_error()."<br/>");//if you cannot connect it will exit and display msg within. 
    }
    return $connect;
} //end of function


//@bruccy: THIS IS TO RUN SQL
function My_SQL_EXE($connect, $sql){
	$result = mysqli_query($connect, $sql);
    
    //@Bruccy: you must always check if connection failed or passed
    if($result){
    	// echo " ";
        //echo "SQL is done successfully <br/>";
    }
    else {
    	return "Error in running sql: " .$sql." with error: " .mysqli_connect_error($connect). "<br/>";
    }
    return $result;
}

function Run_Select_Show_Result($connect, $sql)
{
	$result = My_SQL_EXE($connect, $sql);
    echo "<table border = 1>";
    echo "<tr>";
    	while($fieldinfo = mysqli_fetch_field($result))
        {
        	echo "<td>";
            	echo $fieldinfo->name;
            echo "</td>";
        }
    echo "</tr>";
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
                foreach($row as $key=>$value)
                    echo "<td>".$value."</td>";
            echo "</tr>";
        }
    echo "</table>";
    echo "Total rows: " .mysqli_num_rows($result). "<br/>";
}

function Run_SQL_Show_Result($connect,$sql,$table)
{
	My_SQL_EXE($connect, $sql);
    $sql = "SELECT * FROM ".$table.";";
    Run_Select_Show_Result($connect, $sql);
}

//Validates input
function validate_input($input){
	$input = trim($input);
    $input = htmlspecialchars($input); //extracts special character from user input to prevent it from being used to break the page
    return $input;
}

/* @Bruccy:Checks that to see if there is a user logged in
 * by checking if the key
 * is stored in the session array used in the PrLogin page lines 50-51
 * used for the NavBAr to change Login status. */
function isThereACurrentUser(){
    return array_key_exists("currentUser", $_SESSION);
}



//@Bruccy:COME BACK TO EVERYTHING BELOW HERE ------------------------------


//Method to regiter and login a user and they should return 
//a boolean or statement or error/sucess statement for the output 
//

/*@Bruccy:
// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
*/
?>

