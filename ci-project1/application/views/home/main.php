<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
</head>
<body>
	<h1><?=$title?></h1>
	<h2><?=$header?></h2>
	<hr>
		<ol>
			<?php
			foreach($students as $s) {
				echo('<li>'.$s.'</li>');
			}
			?>
		<ol>
	<hr>
</body>
</html>