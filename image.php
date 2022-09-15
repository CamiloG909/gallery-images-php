<?php

	$id = $_GET['id'];

	if(!isset($id)) return header('Location: index.php');

	require './functions.php';
	$connection = connectionDb();

	if(!$connection) {
		die();
	}

	try {
		$statement = $connection->prepare('SELECT * FROM gallery_images_php WHERE id = :id;');
		$statement->execute([':id' => $id]);
		$image = $statement->fetch();

		if(!$image) return header('Location: index.php');
	} catch (PDOException $e) {
		header('Location: index.php');
	}

	require './views/image.view.php';

?>
