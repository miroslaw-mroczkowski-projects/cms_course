<?php

	$articles = [
		[
			"title"   => "First post",
			"content" => "This is the first of many posts!"
		],
		[
			"title"   => "Another post",
			"content" => "Yet another fascinating post..."
		],
		[
			"title"   => "Read this!",
			"content" => "You must read this now, it's essential reading!"
		]
	];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>My blog</title>
	<meta charset="utf-8">
</head>

<body>
<header>
	<h1>My blog</h1>
</header>

<main>
	<ul>
		<?php
			foreach ($articles as $article): ?>
				<li>
					<article>
						<h2><?= $article['title']; ?></h2>
						<p><?= $article['content']; ?></p>
					</article>
				</li>
			<?php
			endforeach; ?>
	</ul>

</main>

</body>


</html>
