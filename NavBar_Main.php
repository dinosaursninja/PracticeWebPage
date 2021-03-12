<?php require_once "Database_Function.php"; ?>

<!--Materialize header has to start @top of body note to self-->
  <nav>
    <div class="nav-wrapper">
      <a href="IndexCapstone.php" class="brand-logo">ESC-19</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      
        <li><a href="IndexCapstone.php">Store</a></li>
        <li><a href="Discussion.php">Discussion</a></li>
        <li><a href="Compare.php">Compare</a></li>
        <li><a href="About.php">About Us</a></li>
        <li><a href="Cart.php">Shopping Cart</a></li>

<!--this checks to see whether there is a user in session then changes the login navbar accordingly.-->
          <?php if (isThereACurrentUser()) : ?>
              <li><a href="Project-Action.php?task=logout">Logout</a></li>
          <? else : ?>
              <li><a href="Login.php">Login</a></li>
          <? endif ?>

      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
        <!--Collapsable Sparkles to sidenav-->
        <li><div class="user-view">
          <div class="background">
            <img alt="trees in front of a crystal clear lake" class="responsive-img" src="https://th.bing.com/th/id/OIP.kX29rAD97PIbk1Pw6-NdOAHaHa?pid=ImgDet&rs=1">
          </div>
          <br>
          	<a href="IndexCapstone.php" class="white-text center-align"><h5>ESC-19 </h5></a>
          <br>
        </div></li>
        
        <li><a href="IndexCapstone.php">Store</a></li>
        <li><a href="Discussion.php">Discussion</a></li>
        <li><a href="Compare.php">Compare</a></li>
        <li><a href="About.php">About Us</a></li>
        <li><a href="Cart.php">Shopping Cart</a></li>

      <!--this checks to see whether there is a user in session then changes the login navbar accordingly.-->
      <?php if (isThereACurrentUser()) : ?>
          <li><a href="Project-Action.php?task=logout">Logout</a></li>
      <? else : ?>
          <li><a href="Login.php">Login</a></li>
      <? endif ?>
  </ul>
  
  <!--Might have to relocate this to body later after head tag calls-->
  <div id="bufferZone-top"></div>
  <header id="bufferZone-container1">
  		<h2>Name of current Tab</h2>
  </header>
  <div class="buferZone-bottom"></div>