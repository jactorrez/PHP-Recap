<?php 
include('includes/data.php');
include('includes/functions.php');

$pageTitle = "Catalog Home";
$section = "Home";
include('includes/header.php'); ?>
<h1><?php echo "Welcome home!"; ?></h1>
<ul>
	<?php 
		$random = array_rand($catalog, 4);
		foreach($random as $id){
 		echo get_item_html($catalog[$id]);
 	}?>
</ul>
<?php include('includes/footer.php'); ?>
