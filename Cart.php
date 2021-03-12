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

    <div class="container">
      <!-- Page Content goes here -->
        <table class="striped">
        <thead>
          <tr>
              <th>Item</th>
              <th>Remove</th>
              <th>Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
            	Solomon Supercross
            	<img  class = "" src="https://cdn.bike24.net/i/mb/49/9e/88/363630-04-d-783834.jpg">                                                     
            </td>
            <td>   
            	<a href="#"><i class="material-icons">clear</i></a>
			</td>
            <td>$180</td>
          </tr>
          
          <tr>
            <td>
            	Mountain Bike
            </td>
            <td>
            	<a href="#"><i class="material-icons">clear</i></a>
            </td>
            <td>$120</td>
          </tr>
        </tbody>
        <tr>
        	<th>Order Total: </th>
            <td>      </td>
            <th>$300</th>
        </tr>
      </table>
      <br>
      <a href="IndexCapstone.php" class="waves-effect waves-light btn-small">Continue Shopping </a>
	  <a  class="waves-effect waves-light btn-small">Proceed to Checkout</a>
      
    </div>




<h6><br>
Have a notification shown to the user that item has been added.<br>
and dummy items (hard coded html) in the cart and compare tag
to show for the demo.

explain that once the databse is running this will be running from it.
</h6>
    
    
      <!--This for some reason has to go here so materialize works (line 7 - 16)-->
      <!-- materializecss lib -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
   <footer>
   		<?php include_once('Footer.php'); ?>
   </footer>
        
        
</body>
</html>