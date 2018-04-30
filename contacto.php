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
		<section id="contact">
			<form>
				<input type="text" name="name" placeholder="Su Nombre" required>
				<input type="email" name="mail" placeholder="Correo Electrónico" required>
				<input type="number" name="num" placeholder="Número Celular" required>
				<textarea name="message" placeholder="Mensaje a enviar" required></textarea>
				<input type="submit" value="Enviar">
			</form>
		</section>
		<script src="scripts/jquery.js"></script>
		<script src="scripts/buttonswitch.js"></script>
		<?php include 'footer.php'; ?>
	</body>
</html>