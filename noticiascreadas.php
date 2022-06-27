<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="icon" type="image/x-icon" href="./favicon.ico" />
	<title>Loremus News</title>
</head>


<?php
$conn = new mysqli("localhost", "root", "", "pbd");
$sql = "SELECT * FROM noticias WHERE id='" . $id . "' ;";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
	while ($row = $result->fetch_assoc()) {
		$noticias->id = $row['id'];
		$noticias->titulo = $row['titulo'];
		$noticias->foto = $row['foto'];
		$noticias->texto = $row['texto'];
		$noticias->texto2 = $row['texto2'];
		$noticias->texto3 = $row['texto3'];
	}
	$xstring = $noticias->id . "-" . $noticias->titulo . "-" . $noticias->foto . "-" . $noticias->texto . "-" . $noticias->texto2 . "-" . $noticias->texto3;
	$sha1 = sha1($xstring);

	if ($clave == $sha1) {
		insertUser($noticias);
	}
} else {
	echo "Error: id not found.";
}
$conn->close();
'
<html>
<head></head>
<body>
$noticias
</body>
</html>
'

?>

<header class="mt-0 pt-0">
	<div class="bg-cover clearfix pt-3">
		<h2 class="logo">Loremus News</h2>
		<nav class="nav nav-fill mx-auto">
			<li class="nav-item">
				<a class="nav-link" href="https://www.facebook.com/Loremus-News-107014245382770" target="_blank"><i class="fab fa-facebook-f"></i></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="https://twitter.com/LoremusNews" target="_blank"><i class="fab fa-twitter"></i></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="https://www.instagram.com/loremusnews/"><i class="fab fa-instagram"></i></a>
			</li>
		</nav>

		<input type="text" id="nav-search" class="nav-search mx-auto" name="" class="form-control" />
		<div class="ml-0 mr-0 pb-1">
			<nav class="navbar navbar-expand-md">
				<button class="navbar-toggler ml-auto" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" onclick="myFunction(this)" aria-label="Toggle navigation">
					<span class="bar1"></span> <span class="bar2"></span>
					<span class="bar3"></span>
				</button>
				<div id="my-nav" class="collapse navbar-collapse">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item">
							<a class="nav-link" href="./index.html">INICIO</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./actualidad.html">ACTUALIDAD</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./deportes.html">DEPORTES</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./conocenos.html">CONOCENOS</a>
						</li>
						<!-- <li class="nav-item">
								<a class="nav-link" href="./login.html">LOGIN</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./registrarse.html">REGISTER</a>
							</li> -->
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>
<!-- <div class="container-fluid ar-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 pr-5">
					<div class="card ar-img-over">
						<img class="card-img" src="assets/images/piqueyshakira.jpg" alt="" />
						<div class="card-img-overlay">
							<a href="#" class="d-flex align-items-center justify-content-center"><img src="assets/images/piqueyshakira.jpg" alt="" /></a>
						</div>
					</div>
					<div class="row date-time mt-3">
						<div class="col text-white">
							<a href="#"> <i class="fas fa-retweet"></i> Compartir</a>
						</div>
						<div class="col text-right">
							<a href="#">
								Junio 21, 2022 &nbsp; 6 <i class="far fa-comments"></i></a>
						</div>
					</div>

					<h2>Pique y Shakira terminan su relacion de 12 años.</h2>
					<p>
						En las últimas semanas, tras la separación de Gerard Piqué con la
						cantante colombiana Shakira, se han intensificado los rumores
						sobre una posible infidelidad por parte del futbolista. Aunque no
						se ha brindado información oficial sobre la supuesta infidelidad,
						la mujer en cuestión -de 22 años- ha dado mucho de qué hablar y ha
						comenzado a ser identificada como "C". Ahora, durante el podcast
						de Mamarazzis, revelaron que Piqué y "C" habrían sido vistos
						juntos dentro del automóvil del futbolista.
					</p>

					<div class="media my-5">
						<div class="q-box d-flex align-items-center justify-content-center">
							<img src="assets/images/quote.png" alt="" />
						</div>
						<div class="bbg media-body">
							<h5 class="mb-0">
								"Piqué y su amiga especial fueron vistos en actitud cómplice y
								cariñosa la madrugada del jueves en una localidad de la costa
								catalana", señalaron las conductoras Fa y Vázquez. "Fue
								alrededor de las 01:00 horas y dentro del coche del jugador de
								futbol", añadieron.
							</h5>
						</div>
					</div>

					<p>
						Shakira y Piqué sostuvieron una relación de 12 años siendo una de
						las parejas más mediáticas y sólidas, sin embargo nunca llegaron
						al altar y esta es la razón. En 2020, la cantante colombiana contó
						para el programa 60 minutes que habían decidido no casarse porque
						"el matrimonio me asusta mucho, no quiero que él me vea como la
						esposa. Prefiero que me vea como su novia, su amante. Un poco como
						la fruta prohibida".
					</p>

					<p>
						Por su parte, Gerard Piqué también llegó a explicar que nunca hubo
						una propuesta de matrimonio ya que por cómo era su relación con
						Shakira no había necesidad de casarse.
					</p>
					<h2 class="text-center fs-35 mt-5 pt-5 mb-0 pb-2">
						Otras Noticias
					</h2>
					<hr class="mt-0 pt-0" />
					<p class="text-center second-clr my-5">
						Otras Noticias relacionadas con la actualidad o deportes.
					</p>

					<div class="row">
						<div class="col-md-6">
							<img src="assets/images/mbappe.jpg" class="w-100" alt="" />
							<p class="img-tag text-center">LIFESTYLE</p>
							<hr class="mt-0" />
							<h3 class="text-center">Mbappe dice NO al Real Madrid</h3>

							<ul class="nav nav-fill mx-auto pb-3">
								<li class="nav-item">
									<a class="nav-link" href="#">Brian Cebrian</a>
								</li>
								<li><span>.</span></li>
								<li class="nav-item">
									<a class="nav-link" href="#">22 Junio 2022</a>
								</li>
								<li><span>.</span></li>
								<li class="nav-item">
									<a class="nav-link" href="#">12 Comentarios</a>
								</li>
							</ul>
							<p class="second-clr text-center">
								Despues de que todos los madridistas esperaran la ansiada
								llegada del jugador jugador Frances, finalmente decide renovar
								en el PSG.
							</p>

							<a href="./article2.html" class="btn text-uppercase text-center mx-auto">Leer Mas</a>
						</div>
						<div class="col-md-6 mt-md-4">
							<img src="assets/images/fashion1.jpg" class="w-100" alt="" />
							<p class="img-tag text-center">Milan Fashion Week</p>
							<hr class="mt-0" />
							<h3 class="text-center">Novedades de la Fashion Week</h3>

							<ul class="nav nav-fill mx-auto pb-3">
								<li class="nav-item">
									<a class="nav-link" href="#">Marc Rubio</a>
								</li>
								<li><span>.</span></li>
								<li class="nav-item">
									<a class="nav-link" href="#">1 Marzo 2022</a>
								</li>
								<li><span>.</span></li>
								<li class="nav-item">
									<a class="nav-link" href="#">4 Comentarios</a>
								</li>
							</ul>
							<p class="second-clr text-center">
								Todas las novedades de esta Fashion Week.
							</p>

							<a href="./article3.html" class="btn text-uppercase text-center mx-auto">Leer Mas</a>
						</div>
					</div>
					<div class="comment-section mt-5">
						<h3>Comentarios</h3>
						<hr class="ml-0" />
						<div class="media pt-5">
							<div class="card mr-4">
								<img src="assets/images/comment-user1.png" alt="" class="card-img" />
								<div class="card-img-overlay"></div>
							</div>

							<div class="media-body">
								<div class="row">
									<div class="col text-left">
										<h4>Eric Casanova</h4>
									</div>
									<div class="col text-right">
										<p class="my-0">
											<span> 22 Junio 2022</span>
											<a href="#" class="ml-3">Reply</a>
										</p>
									</div>
								</div>
								<p>Increible la ruptura de Shakira y Pique.</p>
								<div class="media py-5 mt-5 both-border">
									<div class="card mr-4">
										<img src="assets/images/comment-user2.png" alt="" class="card-img" />
										<div class="card-img-overlay"></div>
									</div>
									<div class="media-body">
										<div class="row">
											<div class="col text-left">
												<h4>Antonio69</h4>
											</div>
											<div class="col text-right">
												<p class="my-0">
													<span>22 Junio 2022</span>
													<a href="#" class="ml-3">Reply</a>
												</p>
											</div>
										</div>
										<p>Que golfo el Pique con una chavalita de 20 años.</p>
									</div>
								</div>
							</div>
						</div>

						<div class="media py-5 bottom-border">
							<div class="card mr-4">
								<img src="assets/images/comment-user3.png" alt="" class="card-img" />
								<div class="card-img-overlay"></div>
							</div>

							<div class="media-body">
								<div class="row">
									<div class="col text-left">
										<h4>John Deo</h4>
									</div>
									<div class="col text-right">
										<p class="my-0">
											<span>Add 11 Oct 2016</span>
											<a href="#" class="ml-3">Reply</a>
										</p>
									</div>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Maecenas fringilla massa et tristique convallis. Class
									aptent taciti sociosqu ad litora torquent per conubia
									nostra, per inceptos himenaeos. Suspendisse orci sem,
									ultrices sit amet cursus vitae, fermentum nec turpis.
								</p>
							</div>
						</div>
					</div>
					<div class="comment-form my-5 pt-5">
						<h3>Añadir Comentarios</h3>
						<hr class="ml-0" />
						<hr class="s-br" />
						<table class="table table-borderless mt-4">
							<tr>
								<td>
									<input type="text" class="form-control" placeholder="Name" />
								</td>
								<td>
									<input type="email" class="form-control" placeholder="Email" />
								</td>
								<td>
									<input type="url" class="form-control" placeholder="Website" />
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<textarea class="form-control" placeholder="Your comment"></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<button class="btn text-uppercase ml-auto d-block">
										Add Comment
									</button>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="col-lg-3 pl-0">
					<div class="sidebar">
						<h3 class="text-center text-white">Autor</h3>
						<hr class="bg-white" />

						<div class="owl-carousel owl-carousel4 owl-theme">
							<div>
								<div class="card pb-5">
									<img class="card-img link-img rounded" src="src/images/brian.jpg" alt="" />
								</div>
								<h3 class="text-center mt-3 mb-0">Brian Cebrian</h3>
								<p class="text-center mt-1 third-clr">Periodista</p>
							</div>

							<div>
								<div class="card pb-5">
									<img class="card-img link-img rounded" src="src/images/marc.jpg" alt="" />
								</div>
								<h3 class="text-center mt-3 mb-0">Marc Rubio</h3>
								<p class="text-center mt-1 third-clr">Periodista</p>
							</div>

							<div>
								<div class="card pb-5">
									<img class="card-img link-img rounded" src="src/images/brian.jpg" alt="" />
								</div>
								<h3 class="text-center mt-3 mb-0">Brian Cebrian</h3>
								<p class="text-center mt-1 third-clr">Periodista</p>
							</div>

							<div>
								<div class="card pb-5">
									<img class="card-img link-img rounded" src="src/images/marc.jpg" alt="" />
								</div>
								<h3 class="text-center mt-3 mb-0">Marc Rubio</h3>
								<p class="text-center mt-1 third-clr">Periodista</p>
							</div>
						</div>
						<div>
							<div class="card pb-5">
								<img class="card-img link-img rounded" src="assets/images/carlla-willstons.jpg" alt="" />
							</div>
							<h3 class="text-center mt-3 mb-0">Brian Cebrian</h3>
							<p class="text-center mt-1 third-clr">Periodista</p>
						</div>
					</div>

					<div class="owl-carousel bg-gray owl-carousel5 owl-theme my-5 pb-5">
						<div>
							<div class="card bg-gray">
								<h3 class="text-center mt-3 mb-0">Twitter Posts</h3>
								<hr class="mx-auto" />
								<p class="text-center mt-1">
									Increible semana de Fashion Week.
								</p>
								<p class="text-center my-1"><span>14 minutes ago</span></p>
							</div>
						</div>
						<div>
							<div class="card bg-gray">
								<h3 class="text-center mt-3 mb-0">Twitter Posts</h3>
								<hr class="mx-auto" />
								<p class="text-center mt-1">
									Pique y Shakira adios para siempre? :(
								</p>
								<p class="text-center my-1"><span>14 minutes ago</span></p>
							</div>
						</div>
						<div>
							<div class="card bg-gray">
								<h3 class="text-center mt-3 mb-0">Twitter Posts</h3>
								<hr class="mx-auto" />
								<p class="text-center mt-1">
									Menudos perioditas mas buenos @cebrianbrian @marcrubio
								</p>
								<p class="text-center my-1"><span>14 minutes ago</span></p>
							</div>
						</div>
						<div>
							<div class="card bg-gray">
								<h3 class="text-center mt-3 mb-0">Twitter Posts</h3>
								<hr class="mx-auto" />
								<p class="text-center mt-1">
									To take a trivial example, which of us ever undertakes
									laborious physical exercise, some advantage from it?
								</p>
								<p class="text-center my-1"><span>14 minutes ago</span></p>
							</div>
						</div>
					</div>

					<h3 class="text-center">Follow Us</h3>
					<hr class="mx-auto" />
					<nav class="nav nav-fill mx-auto mb-5">
						<li class="nav-item">
							<a class="nav-link" href="https://www.facebook.com/Loremus-News-107014245382770" target="_blank"><i class="fab fa-facebook-f"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://twitter.com/LoremusNews" target="_blank"><i class="fab fa-twitter"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://www.instagram.com/loremusnews/" target="_blank"><i class="fab fa-instagram"></i></a>
						</li>
					</nav>

					<h3 class="text-center">Noticias</h3>
					<hr class="mx-auto" />
					<div class="row insta-links mt-2">
						<div class="col-md-4 col-sm-6 col-6">
							<div class="card">
								<img class="card-img w-100" src="assets/images/insta1.png" alt="" />
								<div class="card-img-overlay d-flex justify-content-center align-items-center">
									<a href="#"><img src="assets/images/right-icon.png" alt="" /></a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-6">
							<div class="card">
								<img class="card-img w-100" src="assets/images/insta2.png" alt="" />
								<div class="card-img-overlay d-flex justify-content-center align-items-center">
									<a href="#"><img src="assets/images/right-icon.png" alt="" /></a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-6">
							<div class="card">
								<img class="card-img w-100" src="assets/images/insta3.png" alt="" />
								<div class="card-img-overlay d-flex justify-content-center align-items-center">
									<a href="#"><img src="assets/images/right-icon.png" alt="" /></a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-6">
							<div class="card">
								<img class="card-img w-100" src="assets/images/insta4.png" alt="" />
								<div class="card-img-overlay d-flex justify-content-center align-items-center">
									<a href="#"><img src="assets/images/right-icon.png" alt="" /></a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-6">
							<div class="card">
								<img class="card-img w-100" src="assets/images/insta5.png" alt="" />
								<div class="card-img-overlay d-flex justify-content-center align-items-center">
									<a href="#"><img src="assets/images/right-icon.png" alt="" /></a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-6">
							<div class="card">
								<img class="card-img w-100" src="assets/images/insta6.png" alt="" />
								<div class="card-img-overlay d-flex justify-content-center align-items-center">
									<a href="#"><img src="assets/images/right-icon.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>

					<h3 class="text-center mt-5">Trending Posts</h3>
					<hr class="mx-auto" />
					<div class="tranding-posts mt-4">
						<div class="media my-3">
							<div class="d-flex align-items-center justify-content-center">
								<a href="#"><img src="assets/images/t-post1.png" alt="" /></a>
							</div>
							<div class="media-body text-center d-flex align-items-center justify-content-center flex-column px-3">
								<a href="#">The latest trends in Travel</a>
								<p class="mt-1">08 Jan 2019</p>
							</div>
						</div>
						<div class="media my-3">
							<div class="d-flex align-items-center justify-content-center">
								<a href="#"><img src="assets/images/t-post2.png" alt="" /></a>
							</div>
							<div class="media-body text-center d-flex align-items-center justify-content-center flex-column px-3">
								<a href="#">Effective fine art design</a>
								<p class="mt-1">08 Jan 2019</p>
							</div>
						</div>
						<div class="media my-3">
							<div class="d-flex align-items-center justify-content-center">
								<a href="#"><img src="assets/images/t-post3.png" alt="" /></a>
							</div>
							<div class="media-body text-center d-flex align-items-center justify-content-center flex-column px-3">
								<a href="#">How to design your first PSD?</a>
								<p class="mt-1">08 Jan 2019</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<div class="container-fluid jumbotron-fluid stay mt-5 pt-5 pb-5">
		<h2 class="text-center">Mantente Actualizado</h2>
		<p class="text-center mt-2">
			Suscribete para no perderte ninguna noticia.
		</p>
		<div class="input-group mt-4 mx-auto" style="max-width: 640px">
			<input type="email" class="form-control" placeholder="YOUR EMAIL ADDRESS" />
			<div class="">
				<button class="btn btn-success ml-2" type="submit">Suscribete</button>
			</div>
		</div>
	</div>

	<footer class="container-fluid pt-5">
		<div class="container">
			<h2 class="logo text-center">Loremus</h2>
			<nav class="nav nav-fill mx-auto mt-5">
				<li class="nav-item">
					<a class="nav-link" href="https://www.facebook.com/Loremus-News-107014245382770" target="_blank"><i class="fab fa-facebook-f"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://twitter.com/LoremusNews" target="_blank"><i class="fab fa-twitter"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://www.instagram.com/loremusnews/"><i class="fab fa-instagram"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./crearnoticia.html" target="_blank"><i class="bi bi-bricks">Crear Noticia</i>
					</a>
				</li>
			</nav>
		</div>
		<div class="copy-right mt-4">
			<p class="text-center">
				&copy; 2019 <a href="#" class="text-white">Loremus News</a>. All
				Rights Reserved. Design by
				<a href="#" target="_blank" class="text-white">Loremus Web</a>.
			</p>
		</div>
	</footer>

	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/jquery-1.12.0.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/article.js"></script>
</body> -->

</html>