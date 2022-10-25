<?php
	/*
	$articles = [
		"First post",
		"Second post",
		"Third post",
		"Fourth post"
	];

	foreach ($articles as $index => $article) {
		echo $index + 1 . ' - ' . $article, ", ";
	}*/

	/*$array = [];

	for ($i = 1; $i <= 10; $i++) {
		if ($i < 4) {
			$array[$i] = "a ";
		} else if ($i > 4 && $i < 7) {
			$array[$i] = "b ";
		} else {
			$array[$i] = "c ";
		}
	}

	print_r($array);*/

	$hour = 12;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Website</title>
	<meta charset="utf-8">
</head>
<body>

<h1>Lorem Ipsum</h1>

<?php
	if ($hour < 12): ?>
		Good morning
	<?php
	elseif ($hour < 18): ?>
		Good afternoon
	<?php
	elseif ($hour < 22): ?>
		Good evening
	<?php
	else: ?>
		Good night
	<?php
	endif; ?>

</body>
</html>