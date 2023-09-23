<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pion Pion Mise - <?= isset($title) ? $title : null; ?></title>
	<link rel="stylesheet" type="text/css" href="public/assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="public/assets/css/app.css">
	<link rel="shortcut icon" type="image/png" href="public/assets/images/logo/favicon.png">
	<script src="https://kit.fontawesome.com/118716b668.js" crossorigin="anonymous"></script>
</head>
<body>

	<?php
		// navbar
		require('_partials/navbar.php');

		// header
		require('_partials/header.php');

		// content
		echo $content;
	?>

</body>
<script src="public/assets/js/jquery-3.7.0.min.js"></script>
<?= isset($script) ? $script : null; ?>
</html>