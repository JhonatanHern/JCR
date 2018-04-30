<!DOCTYPE html>
<html>
	<head>
		<title>JCR Ingenieros</title>
		<link rel="stylesheet" href="styles/index.css">
		<meta charset="utf-8">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	</head>
	<body>
		<?php include 'header.php'; ?>
		<section id="floater">
			<section id="leftbuttons">
				<button app-id="c1">contenido 1</button>
				<button app-id="c2">contenido 2</button>
				<button app-id="c3">contenido 3</button>
				<button app-id="c4">contenido 4</button>
				<button app-id="c5">contenido 5</button>
			</section>
			<section id="texter">
				<section id="c1" style="display: block;">1) <?php include 'lorem.php'; ?></section>
				<section id="c2">2) <?php include 'lorem.php'; ?></section>
				<section id="c3">3) <?php include 'lorem.php'; ?></section>
				<section id="c4">4) <?php include 'lorem.php'; ?></section>
				<section id="c5">5) <?php include 'lorem.php'; ?></section>
			</section>
		</section>
		<?php include 'footer.php'; ?>
	</body>
</html>