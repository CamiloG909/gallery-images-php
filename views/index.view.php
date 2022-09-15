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
		<title>Images | PHP</title>
	</head>
	<body>
		<header class="header">
			<img src="assets/logo.png" alt="Logo header" />
		</header>
		<main>
			<section class="container-images">
				<?php foreach($images as $image): ?>
					<article class="image-card" onclick="window.location.href = './image.php?id=<?php echo $image['id']; ?>';">
						<img class="image-card__img" src="<?php echo $image['image']; ?>" alt="<?php echo $image['title']; ?>">
					</article>
					<?php endforeach ?>
				</section>
				<section class="container-pagination">
					<?php if($current_page > 1): ?>
						<a href="./?page=<?php echo $current_page - 1; ?>" class="pagination-btn"><i class="bi bi-arrow-left"></i> Previous page</a><p></p>
					<?php endif ?>
					<a href="upload.php" class="pagination-btn">Upload <i class="bi bi-cloud-arrow-up-fill"></i></a>
					<?php if($current_page < $total_pages): ?>
						<p></p><a href="./?page=<?php echo $current_page + 1; ?>" class="pagination-btn">Next page <i class="bi bi-arrow-right"></i></a>
					<?php endif ?>
			</section>
		</main>
	</body>
</html>
