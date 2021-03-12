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

    
    <div id="DiscussionForum">
    	<h5>This is where the forum will be</h5>
    </div>
    
      <!--This for some reason has to go here so materialize works (line 7 - 16)-->
      <!-- materializecss lib -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
   <footer>
   		<?php include_once('Footer.php'); ?>
   </footer>
        
        
</body>
</html>