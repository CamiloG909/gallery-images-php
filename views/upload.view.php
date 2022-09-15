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
		<title>Upload | PHP</title>
	</head>
	<body>
		<header class="header">
			<img src="assets/logo.png" alt="Logo header" />
		</header>
		<main style="text-align: center;">
			<form class="upload-image" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
				<p class="upload-image__title">Upload your image</p>
				<p class="upload-image__subtitle">Select file</p>
				<input class="upload-image__input" type="file" name="image">
				<p class="upload-image__subtitle">Title</p>
				<input class="upload-image__input" type="text" name="title">
				<p class="upload-image__subtitle">Description</p>
				<textarea class="upload-image__input --textarea" name="description"></textarea>
				<button class="upload-image__btn">
					Upload <i class="bi bi-cloud-arrow-up-fill"></i>
				</button>
				<?php if(isset($error)) echo "<p class='upload-image__error'><i class='bi bi-exclamation-triangle-fill'></i> $error</p>" ?>
			</form>
			<a href="./" class="upload-image__back"><i class="bi bi-grid-fill"></i> Back to gallery</a>
		</main>
	</body>
</html>
