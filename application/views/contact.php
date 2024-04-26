<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>

	<div class="kye">
		<h1 class="text-center">Contact Us</h1>
		<p class="text-center mb-4">Hubungi kami melalui form berikut</p>

		<form action="" method="post">
			<div class="form-group">
				<label for="name">Name*</label>
				<input type="text" name="name" placeholder="Your name" value="<?= set_value('name') ?>" required maxlength="32" />
				<div class="text-danger"><?= form_error('name') ?></div>
				<div class="text-danger"></div>
			</div>
			<div class="form-group">
				<label for="email">Email*</label>
				<input type="email" name="email" placeholder="Your email address" value="<?= set_value('email') ?>" required />
				<div class="text-danger"><?= form_error('email') ?></div>
				<div class="text-danger"></div>
			</div>
			<div class="form-group">
				<label for="message">Message*</label>
				<textarea name="message" rows="5" placeholder="Write your message" value="<?= set_value('message') ?>" required></textarea>
				<div class="text-danger"><?= form_error('message') ?></div>
				<div class="text-danger"></div>
			</div>

			<div class="text-center">
				<button type="submit" class="btn btn-primary">Kirim</button>
				<button type="reset" class="btn btn-secondary">Reset</button>
			</div>
		</form>
	</div>


	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>