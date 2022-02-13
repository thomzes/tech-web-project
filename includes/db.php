<?php

	$dsn = "mysql:host=localhost;dbname=tech";

	try {
		$pdo = new PDO($dsn, 'root', '');
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>