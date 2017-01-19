<?php

 include('includes/data.php');
 include('includes/functions.php');
 $pageTitle = "Full Catalog";
 $section = "Catalog";

if(isset($_GET["cat"])){
	 if(strtolower($_GET["cat"]) == "books"){
	 	$pageTitle = "Books";
	 	$section = "Books";
	 } else if(strtolower($_GET["cat"]) == "movies"){
	 	$pageTitle = "Movies";
	 	$section = "Movies";
	 } else if(strtolower($_GET["cat"]) == "music"){
	 	$pageTitle = "Music";
	 	$section = "Music";
	 }
 }

 include('includes/header.php'); ?>

 <h1><?php echo $pageTitle ?></h1>
 <div class="catalog">
 	<?php if($section != "Catalog"){
 		echo "<a href='catalog.php'>Full Catalog</a> &gt; $section";
 	} ?>
 	<div class="wrapper">
 		<ul>
 			<?php
 			$categories = array_category($catalog, $section);
 			foreach ($categories as $id){
 				echo get_item_html($id, $catalog[$id]);
 			}
 			?>
 		</ul>
 	</div>
 </div>
 
<?php include('includes/footer.php'); ?>