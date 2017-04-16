<?php
	//display errors, remove before flight
	ini_set('display_errors', 'On');

	try {
		$db = new PDO('sqlite:./database.db'); //instance db and add DOMCdataSection
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //throws an exception when there's an error in the query
	} catch (Exception $e) {
		echo $e->getMessage() . PHP_EOL;
		die();
	}

?>
