<?php 
function get_item_html($item){
		$output = "<li><a href='#'>".$item['title']."</a></li>";
		return $output; 
}

function array_category($catalog, $category){
	$output = array();

	foreach($catalog as $id => $item){
		if($category == "Catalog" OR strtolower($item["category"]) == strtolower($category)){
			$sort = $item["title"];
			$sort = ltrim($sort, "The ");
			$sort = ltrim($sort, "A ");
			$sort = ltrim($sort, "An ");
			$output[$id] = $sort;
		}
	}
	
	asort($output); 
	return array_keys($output);
}