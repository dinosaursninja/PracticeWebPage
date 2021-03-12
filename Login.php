<!DOCTYPE html>
<?php
	session_start();
    date_default_timezone_set('America/New_York');
?>

<html>
<head>

<?php
	include_once('Header.php');    
?>

<title>Esc-19</title>
</head>

<body>  
<?php
	include_once('NavBar_Main.php');	
?>


	<div class="loginMain">
    
    <ul id="tabs-swipe-demo" class="tabs">
    <li class="tab col s3"><a href="#test-swipe-1">Login</a></li>
    <li class="tab col s3"><a class="active" href="#test-swipe-2">Register</a></li>
 	 </ul>
     
    <div id="test-swipe-1" class="col s12 ">
    	 <div id="loginContainer">    
        <div id="loginUser">
          <form method="post" action="Project-Action.php">
            User name:<input type="text" name="username" class="validate" required="" aria-required="true"><br/><br/>
            Password:<input type="password" name="password" class="validate" required="" aria-required="true"><br/><br/>
              <input type="hidden" name="task" value="login"> <!--this is what allows/triggers the switch case for login in in the action page -->
              <button class="btn waves-effect waves-light" type="submit" name="action">Login
              <i class="material-icons right">send</i>
            </button>
          </form>
        </div>
      </div>
      
    </div>
    
    <div id="test-swipe-2" class="col s12">
    	<div id="registerContainer">
        <div id="registerUser">	
          <form method="post" action="Project-Action.php">
			Username: <input type="text" name="username" class="validate" required="" aria-required="true"><br/><br/>
            First Name: <input type="text" name="firstName" class="validate" required="" aria-required="true"class="validate" required="" aria-required="true">
            Last Name: <input type="text" name="lastName">
            Password: <input type="password" name="password" class="validate" required="" aria-required="true"> Match Password: <input type="password" name="matchPassword" class="validate" required="" aria-required="true"><br/><br/><br/>
            <input type="hidden" name="task" value="register">  <!--this is what allows/triggers the switch case for register in the action page -->
              <button class="btn waves-effect waves-light" type="submit" name="action">Register
              <i class="material-icons right">send</i>
            </button>
          </form>
        </div>
      </div>
    </div>


  </div>
      <!--This for some reason has to go here so materialize works (line 7 - 16)-->
      <!-- materializecss lib -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
        <br>
   <footer>
   		<?php include_once('Footer.php'); ?>
   </footer>
        
        
</body>
</html>