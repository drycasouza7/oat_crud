

<?php

       ini_set(“display_errors”,1);
       ini_set(“display_startup_erros”,1);
        error_reporting(E_ALL);
?>


<?php
	$dsn = 'mysql:host=localhost;dbname=crud'; //mysql
	$username = 'root';
	$password = '';
	$options = [];
	try {
	$connection = new PDO($dsn, $username, $password, $options);
	} catch(PDOException $e) 

	{

}