<?php
	//First check if any page has been chosen
	if(isset($_GET['page']))
	{
		//Now lets see which page has been chosen
		$page = $_GET['page'];
		switch($page)
		{
			case 'services':
                include(MAIN_PATH . DS . PAGES_DIR . DS . 'services.php');
                break;
			case 'about':
                include(MAIN_PATH . DS . PAGES_DIR . DS . 'about.php');
                break;
			case 'contacts':
				include(MAIN_PATH . DS . PAGES_DIR . DS . 'contacts.php');
				break;
				
			//Just add another case block here if you need another page
			/*
			case 'yourpage':
				include(MAIN_PATH . DS . PAGES_DIR . DS . 'yourpage.php');
				break;
			*/
			
			//If none of the above work then we send the user to the home page
			default:
				include(MAIN_PATH . DS . PAGES_DIR . DS . 'home.php');
				break;
		}
	}
	else
	{
		include(MAIN_PATH . DS . PAGES_DIR . DS . 'home.php');
	}