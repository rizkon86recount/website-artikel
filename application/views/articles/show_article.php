<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>

</head>




<body class="bg-gray-100">

	<?php $this->load->view('_partials/navbar.php'); ?>

	<article class="container my-5">
		<div class="bg-white p-4 rounded-lg shadow">
			<h1 class="text-center mb-4 font-weight-bold"><?= $article->title ? html_escape($article->title) : "No Title" ?></h1>
			<div class="text-center text-muted mb-4">
				Published at <?= $article->created_at ?>
			</div>
			<div class="post-body">
				<?= $article->content ?>
			</div>
		</div>
	</article>


	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>