<?php
return array(
	'_root_'  => 'site/index',  // The default route
	'_404_'   => 'site/404',    // The main 404 route
	
	'home' => 'site/index',
	'portfolio' => 'site/portfolio',
	'about' => 'site/about',
	'contact' => 'site/contact',

	// Ajax Calls

	'ajax_main/send_message' => 'ajax_main/send_message',

	'(:any)' => 'site/404',

);
