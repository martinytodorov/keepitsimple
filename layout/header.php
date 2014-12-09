<header>
    <div class="logo-wrap">
        <a href="<?php echo URI ?>"><img src="<?php echo URI ?>images/logo.png"></a>
    </div>
	<h7>A simple php framework for small websites</h7>
	<hr>
	<?php
		//Get the menu layout
		include(MAIN_PATH . DS . LAYOUTS_DIR . DS . 'menu.php');
	?>
	
	<?php
	/* You can include some special plugin you want to use in the header here.
	 * For example one customer wanted to have audio player in the header so 
	 * you can put whatever you need.
	 
		include(MAIN_PATH . DS . LAYOUTS_DIR . DS . 'player.php');
	
	*/
	?>

</header>

