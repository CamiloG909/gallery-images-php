<?php

	function connectionDb() {
		try {
			$connection= new PDO('mysql:host=containers-us-west-75.railway.app:6341;dbname=railway;', 'root', 'Yhmk6TE8xwaJ8vfBWkZT');
			return $connection;
		} catch (PDOException $e) {
			return false;
		}
	}

?>
