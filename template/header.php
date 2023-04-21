<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Empresa Logistic</title>

	<!-- Bootstrap CSS v5.0.2 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- CDN iconos -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<!-- CSS personalizado -->
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 16px;
			background-color: #F5F5F5;
			background-image: url('https://cdn.pixabay.com/photo/2016/02/19/10/06/texture-1209328_960_720.jpg');
			background-repeat: repeat;
			background-attachment: fixed;
		}

		.container-fluid {
			background-color: rgba(79, 79, 79, 0.75);
			color: #FFFFFF;
			position: relative;
		}

		header {
			margin-bottom: 20px;
		}

		h3 {
			font-size: 36px;
			font-weight: bold;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
		}

		.logo {
			font-size: 48px;
			margin-right: 10px;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
		}

		.nav-link {
			color: #FFFFFF;
			font-size: 20px;
			font-weight: bold;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
		}

		.watermark {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-image: url('https://cdn.pixabay.com/photo/2018/10/17/11/18/watermark-3755622_960_720.png');
			background-repeat: repeat;
			opacity: 0.1;
			z-index: -1;
		}
	</style>

</head>
<body>
	<div class="watermark"></div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md">
				<header class="py-3">
					<h3 class="text-center"><i class="bi bi-truck logo"></i>Empresa Logistic</h3>
				</header>
			</div>
			<div class="col-md">
				<nav class="nav justify-content-end">
					<a class="nav-link active" aria-current="page" href="#">Inicio</a>
					<a class="nav-link" href="#">Servicios</a>
					<a class="nav-link" href="#">Nosotros</a>
					<a class="nav-link" href="#">Contacto</a>
				</nav>
                </div>
		</div>
	</div>

	<!-- JavaScript y dependencias de Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-yM6NuyJBRBmEzs2sZsUwSp6cJjq6U4g6+R9Y/HCicV2+N/XTJgpvVnqd/aDTwC7N" crossorigin="anonymous"></script>

</body>
</html>
