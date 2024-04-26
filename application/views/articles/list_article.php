<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>

</head>

<body>

	<?php $this->load->view('_partials/navbar.php'); ?>

	<div class="container py-5">
		<div class="">
			<h1 class="">List Artikel</h1>
			<p class=" mb-4 ">Berikut ini adalah kumpulan artikel untuk mencerdaskan umat manusia</p>

			<ul class=" list-group">
				<?php foreach ($articles as $article) : ?>
					<li class="list-group-item">
						<a href="<?= site_url('article/' . $article->slug) ?>" class="font-weight-bold text-decoration-none text-indigo"><?= $article->title ? html_escape($article->title) : "No Title" ?></a>
					</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>





	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>