<?php
function My_Connect_DB()
{
    $servername="localhost";
    $username="mwahab";
    $password="";
    $dbname="my_mwahab"; /*replaced with your altervista username */
    
    $conn= mysqli_connect($servername, $username,$password, $dbname);
	if(!$conn)
    {
    	//like exit but you can add message
   		die("Connection to DB failed: ".mysqli_connect_error()."<br/>");
    }
    return $conn;
}

function My_SQL_EXE($conn,$sql)
{
	$result=mysqli_query($conn, $sql);
    if($result)
    {
    	echo "SQL is done successfully<br/>";
    }
    else 
    {
    	echo "Error in running sql: ".$sql." with error: ".mysqli_error($conn)."<br/>";
    }
    return $result;
}
 $conn =  My_Connect_DB();

//Create Table for orders

$sql= "CREATE TABLE orders(
  id int(11) NOT NULL,
  name varchar(250) NOT NULL,
  datecreation date NOT NULL,
  status tinyint(1) NOT NULL,
  username varchar(250) NOT NULL);"; 
My_SQL_EXE($conn, $sql);


//create table for order details

$sql = "CREATE TABLE ordersdetail(
  		productid int(11) NOT NULL,
        ordersid int(11) NOT NULL,
 		price decimal(10,0) NOT NULL,
 		quantity int(11) NOT NULL);"; 
My_SQL_EXE($conn, $sql);

//create table for product
$sql = "CREATE TABLE product(
  		id int(11) NOT NULL,
  		name varchar(250) NOT NULL,
  		price decimal(10,0) NOT NULL,
  		quantity int(11) NOT NULL,
  		description text NOT NULL);"; 
My_SQL_EXE($conn, $sql);

//inserting data into the table
/*
$sql= "INSERT INTO product (id, name,price,quantity,description) 
VALUES(1, 'Name 1', '1000', 2, 'good'),
	  (2, 'Name 2', '2000', 3, 'good'),
      (3, 'Name 3', '3000', 4, 'good')";
mysqli_close($conn);
*/





?>
