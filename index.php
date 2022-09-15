<?php

	require './functions.php';
	$connection = connectionDb();

	if(!$connection) {
		die();
	}

	$images = [];
	$current_page = (isset($_GET['page']) ? $_GET['page'] : 1);
	$index_number = ($current_page > 1) ? $current_page * 8 - 8 : 0;

	try {
		$statement = $connection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM gallery_images_php LIMIT $index_number, 8;");
		$statement->execute();
		$response = $statement->fetchAll();

		if(!$response) {
			header('Location: index.php');
		}

		$images = $response;

		$statement2 = $connection->prepare('SELECT FOUND_ROWS() as total_rows;');
		$statement2->execute();
		$total_post = $statement2->fetch()['total_rows'];
		$total_pages = ceil($total_post / 8);
	} catch (PDOException $e) {
		die();
	}

	require './views/index.view.php';

?>
