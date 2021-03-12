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

	 <div id="content">
     <div id="merch" class="row center">
     
       <!--This div is for the merch 2 -->
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="https://www.switchbacktravel.com/sites/default/files/images/articles/Arctery%27x%20Bora2%20Mid%20GTX%20Hiking%20Boots.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Arc’teryx Bora2 Mid GTX<i class="material-icons right">more_vert</i></span> 
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Arc’teryx Bora2 Mid GTX<i class="material-icons right">close</i></span>
                <p>
                	Functional and very comfortable removable liner.
					High levels of waterproofing and protection from the tough outer shell.<br>
                    Traction, particularly on rock, is also near the best in class.
					Very good breathability for a Gore-Tex design. For the good looking price of $330.
                </p>
              </div>
            </div>
        <a href= "Cart.php" class="waves-effect waves-light btn">Add to Cart</a>
        <a href= "" class="waves-effect waves-light btn">Remove</a><br><br>
        <a href= "Discussion.php" class="waves-effect waves-light btn">Discussion</a>

        </div>    
   
       <!--This div is for the merch 6 -->       
       <div class="col s12 m6 l4">
       
         <div class="card">          
           <div class="card-image  waves-effect waves-block waves-light">               
             <img class="activator" src="https://cdn.bike24.net/i/mb/49/9e/88/363630-04-d-783834.jpg">                              
           </div>           
           <div class="card-content">
             <span class="card-title activator grey-text text-darken-4">Salomon Supercross<i class="material-icons right">more_vert</i></span>
           </div>           
           <div class="card-reveal">
             <span class="card-title grey-text text-darken-4">Salomon Supercross<i class="material-icons right">close</i></span>
             <p>
               if you want a super-durable trail runner that resists mud while protecting your foot from 
               technical terrain—and you want it for a before-sale price of $110—this is your shoe. 
             </p>
           </div>          
         </div> <!--end of card container-->
        <a href= "Cart.php" class="waves-effect waves-light btn">Add to Cart</a>
        <a href= "" class="waves-effect waves-light btn">Remove</a><br><br>
        <a href= "Discussion.php" class="waves-effect waves-light btn">Discussion</a>

	 </div>
    </div>    

  <div class="comparisonTable">
        <table class="centered highlight">
        <thead>
          <tr>
              <th>Name</th>
              <th>Best Use</th>
              <th>Waterproof</th>
              <th>Midsole</th>
              <th>Lining</th>	
              <th>Outsole</th>
              <th>Weight</th>
              <th>Gender</th>
			  <th>Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Arc’teryx Bora2 Mid GTX</td>
            <td>Backpacking</td>
            <td>Yes</td>
            <td>Injected EVA</td>
            <td>2-layer stretch nylon</td>
			<td>Vibram rubber</td>
            <td>2 lbs. 3.1 oz</td>
            <td>Female</td>
			<td>$330</td>
          </tr>
          <tr>
            <td>Salomon Supercross</td>
            <td>Trail Runners</td>
            <td>N/A</td>
            <td>Injected EVA</td>
            <td>N/A</td>
			<td>Contagrip rubber</td>
            <td>1 lb. 3.8 oz.</td>
            <td>Female</td>            
            <td>$110</td>
          </tr>
        </tbody>
      </table>
  </div>       
    
    <div class="comparePage">
    	<h5>
        	Plans:<br>
            This should display all chosen comparable elements<br>
            maybe display in a chart side by side with key details<br>
            have the option go to back to main page , add to cart <br>
            and the option to remove from comparables. Also it should redirect to each indv.<br>
            item page if it has been chosen/clicked on explpicitly.
        </h5>
        <h5>
        	Generate items dynamically using php for second demo.
            
        </h5>
    </div>
    
      <!--This for some reason has to go here so materialize works (line 7 - 16)-->
      <!-- materializecss lib -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
   <footer>
   		<?php include_once('Footer.php'); ?>
   </footer>
  </div>      
</body>
</html>