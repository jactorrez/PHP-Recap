<?php

 include('includes/data.php');
 include('includes/functions.php');
 $pageTitle = "Full Catalog";
 $section = "Catalog";

if(isset($_GET["cat"])){
	 if($_GET["cat"] == "books"){
	 	$pageTitle = "Books";
	 	$section = "Books";
	 } else if($_GET["cat"] == "movies"){
	 	$pageTitle = "Movies";
	 	$section = "Movies";
	 } else if($_GET["cat"] == "music"){
	 	$pageTitle = "Music";
	 	$section = "Music";
	 }
 }

 include('includes/header.php'); ?>

 <h1><?php echo $pageTitle ?></h1>
 <div class="catalog">
 	<div class="wrapper">
 		<ul>
 			<?php
 			$categories = array_category($catalog, $section);
 			foreach ($categories as $id){
 				echo get_item_html($catalog[$id]);
 			}
 			?>
 		</ul>
 	</div>
 </div>
 
<?php include('includes/footer.php'); ?>