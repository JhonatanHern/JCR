<!DOCTYPE html>
<html>
	<head>
		<title>JCR Ingenieros - Misión</title>
		<link rel="stylesheet" href="styles/index.css">
		<meta charset="utf-8">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	</head>
	<body>
		<?php include 'header.php'; ?>
		<section id="floater">
			<section id="leftbuttons">
				<button app-id="c1">Misión-Visión-Valores </button>
				<button app-id="c2">Nuestro equipo</button>
				<button app-id="c3">Historia</button>
				<button app-id="c4">Mapa de cobertura</button>
			</section>
			<section id="texter">
				<section id="c1" style="display: block;"> <?php include 'text_mision.php'; ?></section>
				<section id="c2"> <?php include 'lorem.php'; ?></section>
				<section id="c3"> <?php include 'text_historia.php'; ?></section>
				<section id="c4"> <?php include 'lorem.php'; ?></section>

			</section>
		</section>
		<?php include 'footer.php'; ?>
	</body>
</html>