<?php
$dir = 'images/';
$all_files = scandir($dir);

$images = array();

// Remove . && .. filenames
for($i = 0; $i < count($all_files); $i++) {
	if($all_files[$i] === "." || $all_files[$i] === "..") {
		unset($all_files[$i]);
	} else {
		array_push($images, $dir . $all_files[$i]);
	}
}

$rand_keys = array_rand($images, 7);

for($i = 0; $i < count($rand_keys); $i++) {
	echo "<img src='" . $images[$rand_keys[$i]] . "' class='text-center' style='display: block; text-align: center; width: 50%; margin: 25px auto;'>";
	// array_push($images, $images[$rand_keys[$i]]);
}

// echo json_encode($images);
?>