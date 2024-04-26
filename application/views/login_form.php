<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

		<?php if ($this->session->flashdata('message_login_error')) : ?>
			<div class="alert alert-danger mt-2" role="alert">
				<?= $this->session->flashdata('message_login_error') ?>
			</div>
		<?php endif ?>

		<form action="" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email .." value="<?= set_value('username') ?>" required />
			<div class="text-danger"><?= form_error('username') ?></div>

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." value="<?= set_value('password') ?>" />
			<div class="text-danger"><?= form_error('password') ?></div>

			<input type="submit" class="tombol_login" value="LOGIN" />

			<br />
			<br />
			<center>
				<a class="link" href="#">kembali</a>
			</center>
		</form>
	</div>



	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>