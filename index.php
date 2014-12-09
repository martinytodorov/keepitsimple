<?php
	/*
	*	Keep It Simple works very simple
	*	It opens every layout in the following order
	*	1. head.php
	*	2. header.php
	*	3. body.php
	*		- The body opens the page that have been specified by the GET parameters from the folder called "pages"
	*	4. footer.php
	*/

	include(dirname(__FILE__) . "/config/config.php");
	
	//First load the head.php
	include(dirname(__FILE__) . DS . LAYOUTS_DIR. DS . 'head.php');
	
	//Second load the header.php
	include(dirname(__FILE__) . DS . LAYOUTS_DIR. DS . 'header.php');
	
	//Now the body.php - Here when loaded this file will then load the page file from the folder called "pages"
	include(dirname(__FILE__) . DS . LAYOUTS_DIR. DS . 'body.php');
	
	//Finally we load the footer.php
	include(dirname(__FILE__) . DS . LAYOUTS_DIR. DS . 'footer.php');
?>