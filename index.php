<!DOCTYPE html>
<html>
	<head>
		<title>JCR Ingenieros</title>
		<link rel="stylesheet" href="styles/index.css">
		<link rel="stylesheet" href="styles/slideshow.css">
		<meta charset="utf-8">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	</head>
	<body>
		<?php include 'header.php'; ?>
		<section id="page-content">
			<section id="content">
				<section>
					<?php include 'slideshow.php'; ?>
				</section>
				<main>
					<h1>
						<br>
						J.C. Rodriguez &amp; Asociados C.A.<br>
						<span style="font-size: .7em;color: gray">RIF: J-00338975-7</span>
					</h1>
					<div class="card" onclick="window.open('generacion.php','_blank')">
						<img src="https://img.clasf.co.ve/2016/03/06/Planta-Generadora-Electrica-Cummins-DGCB-de-75-KWA-y-60-KW-20160306130605.jpg">
						<span>Generación</span>
					</div>
					<div class="card" onclick="window.open('motores.php','_blank')">
						<img src="imgs/motores.jpeg">
						<span>Motores</span>
					</div>
					<div class="card" onclick="window.open('repuestos.php','_blank')">
						<img src="imgs/repuestos.jpg">
						<span>Repuestos</span>
					</div>
					<div class="card" onclick="window.open('filtros_consumibles.php','_blank')">
						<img src="imgs/filtros.jpg">
						<span>Filtros</span>
					</div>
					<div class="card" onclick="window.open('filtros_consumibles.php','_blank')">
						<img src="https://sc01.alicdn.com/kf/HTB1WK4JKFXXXXXEXVXXq6xXFXXXA/223440801/HTB1WK4JKFXXXXXEXVXXq6xXFXXXA.jpg">
						<span>Consumibles</span>
					</div>
					<div class="card" onclick="window.open('template.php','_blank')">
						<img src="http://www.region2.cl/wp-content/uploads/2016/06/INAUGURACION-CENTRO-CUMMINS-15.jpg">
						<span>Entrenamiento</span>
					</div>
				</main>
			</section>
			<aside id="right">
				<?php include 'socialcontents.php'; ?>
			</aside>
		</section>
		<?php include 'footer.php'; ?>
		<script src="scripts/slideshow.js"></script>
	</body>
</html>