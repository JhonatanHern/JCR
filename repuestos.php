<!DOCTYPE html>
<html>
	<head>
		<title>JCR Ingenieros - Repuestos</title>
		<link rel="stylesheet" href="styles/index.css">
		<meta charset="utf-8">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	</head>
	<body>
		<?php include 'header.php'; ?>
		<section id="floater">
			<section id="leftbuttons">
				<button app-id="c1">Productos y Servicios</button>
				<button app-id="c2">Generación</button>
				<button app-id="c3">Motores</button>
				<button app-id="c4">Repuestos</button>
				<button app-id="c5">Filtros y Consumibles</button>
				<button app-id="c6">Entrenamiento</button>
			</section>
			<section id="texter">
				<section id="c1"> <?php include 'text_productos_servicios.php'; ?></section>
				<section id="c2"> <?php include 'text_generacion.php'; ?></section>
				<section id="c3"> <?php include 'text_motores.php'; ?></section>
				<section id="c4" style="display: block;"> <?php include 'text_repuestos.php'; ?></section>
				<section id="c5"> <?php include 'text_filtros.php'; ?></section>
				<section id="c6"> <?php include 'text_entrenamiento.php'; ?></section>
			</section>
		</section>
		<?php include 'footer.php'; ?>
	</body>
</html>