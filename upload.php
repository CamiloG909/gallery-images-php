<?php

	require './functions.php';
	$connection = connectionDb();

	if(!$connection) {
		die();
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
		$title = $_POST['title'];
		$description = $_POST['description'];
		$image = $_FILES['image'];
		$error = '';

		if(empty($title) or empty($description) or empty($image)) {
			$error = 'Please fill all the fields';
		} else {
			$check = @getimagesize($image['tmp_name']);

			if(!$check) {
				$error = 'Error image file';
			}
		}

		if($error == '') {
			$dir = 'assets/images/';
			$file = $dir . $image['name'];
			move_uploaded_file($image['tmp_name'], $file);

			try {
				$statement = $connection->prepare('INSERT INTO gallery_images_php (title, description, image) VALUES (:title, :description, :image);');
				$statement->execute([':title' => $title, ':description' => $description, ':image' => $file]);
				$statement->fetch();

				header('Location: index.php');
			} catch (PDOException $e) {
				$error = 'An ocurred error';
			}
		}
	}

	require './views/upload.view.php';

?>
