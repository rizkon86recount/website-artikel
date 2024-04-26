<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>
	<!-- Jumbotron -->

	<style>
		/* Custom styles */
		.hero-image {
			background-image: url('https://source.unsplash.com/1600x900/?nature');
			height: 100vh;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			position: relative;
		}

		.hero-text {
			text-align: center;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			color: white;
		}
	</style>

	<body class="bg-light">
		<div class="hero-image">
			<div class="hero-text">
				<h1>Welcome to Berita BIU</h1>
				<p>Selamat Menjelajahi Artikel Terbaru</p>
				<button class="btn btn-primary btn-lg">Explore Now</button>
			</div>
		</div>





		<?php $this->load->view('_partials/footer.php'); ?>
	</body>

</html>