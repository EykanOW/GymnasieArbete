<!--kod till navbar-->
 <nav id="navbar"> 
  <div class="container">
   <ul>
    <a href="index.php?page=random">Add restaurants</a>
    <li>
    	<a href="index.php?page=inlogg">
    		<?php if (!isset($_SESSION["isLoggedIn"])) {?>
    			Log in or create account
    	  	<?php } else { ?>
    	  		Your Account
    	  	<?php } ?> 	
	    </a>
	</li>	
   
   </ul>
  </div>
 </nav>