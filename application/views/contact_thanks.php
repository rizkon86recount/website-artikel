<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>

	<body class="vh-100">
		<div class="container d-flex flex-column justify-content-center h-100">
			<div class="mx-auto py-8 text-center">
				<h1 class="text-3xl font-semibold mb-4">Thank You!</h1>
				<p>Your message has been sent!</p>
			</div>
		</div>


		<?php $this->load->view('_partials/footer.php'); ?>
	</body>

</html>