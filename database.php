<?php

$db_host = "localhost";
$db_name = "cms_course";
$db_user = "cms_course_www";
$db_pass = "5kZ4*cB3h2aS_dSq";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
	echo mysqli_connect_error();
	exit;
}

$sql = "SELECT * FROM article ORDER BY published_at;";

$results = mysqli_query($conn, $sql);

if($results === false) {
echo mysqli_error($conn); 
} else {
$articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

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

	<?php if(empty($articles)): ?>
		<p>No articles found.</p>
	<?php else: ?>
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
			<?php endif ?>
</main>

</body>


</html>
