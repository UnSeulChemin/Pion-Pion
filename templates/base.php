<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pion Pion Mise - <?= isset($title) ? $title : null; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= isset($_GET['id']) ? '../' : null; ?>public/assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?= isset($_GET['id']) ? '../' : null; ?>public/assets/css/app.css">
	<link rel="shortcut icon" type="image/png" href="<?= isset($_GET['id']) ? '../' : null; ?>public/assets/images/logo/favicon.png">
	<script src="https://kit.fontawesome.com/118716b668.js" crossorigin="anonymous"></script>
	<?= isset($cdn) ? $cdn : null; ?>	
</head>
<body>

	<?php
		// navbar
		require('_partials/navbar.php');

		// header
		require('_partials/header.php');

		// content
		echo $content;

		// footer
		require('_partials/footer.php');
	?>

</body>
<script src="<?= isset($_GET['id']) ? '../' : null; ?>public/assets/js/jquery-3.7.0.min.js"></script>
<script src=""></script>
<?= isset($script) ? $script : null; ?>
</html>