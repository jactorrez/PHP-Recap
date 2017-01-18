<!DOCTYPE html> 
<html>
	<head>
		<title><?php echo $pageTitle; ?></title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<nav class="nav">
			<ul>
				<li><a href="index.php" class="<?php if ($section == "Home"){ echo 'highlight'; } ?>">Home</a></li>
				<li><a href="catalog.php" class="<?php if ($section == "Catalog"){ echo 'highlight'; } ?>">Catalog</a></li>
				<li><a href="catalog.php?cat=books" class="<?php if ($section == "Books"){ echo 'highlight'; } ?>">Books</a></li>
				<li><a href="catalog.php?cat=music" class="<?php if ($section == "Music"){ echo 'highlight'; } ?>">Music</a></li>
				<li><a href="catalog.php?cat=movies" class="<?php if ($section == "Movies"){ echo 'highlight'; } ?>">Movies</a></li>
				<li><a href="suggest.php" class="<?php if ($section == "Suggest"){ echo 'highlight'; } ?>">Suggest</a></li>
			</ul>
		</nav>