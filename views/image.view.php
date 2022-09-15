<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="theme-color" content="#1CCC5B" />
		<link rel="stylesheet" href="styles/styles.css" />
		<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
		<meta name="description" content="Gallery images with PHP and SASS">
		<title>Image | PHP</title>
	</head>
	<body>
		<header class="header">
			<img src="assets/logo.png" alt="Logo header" />
		</header>
		<main class="container-photo">
			<p class="photo-title"><?php echo $image['title']; ?></p>
			<picture class="photo-img">
				<img src="<?php echo $image['image']; ?>" alt="Imagen">
			</picture>
			<p class="photo-description"><?php echo $image['description']; ?></p>
			<a href="./" class="back-btn"><i class="bi bi-arrow-left"></i> Back to gallery</a>
		</main>
	</body>
</html>
