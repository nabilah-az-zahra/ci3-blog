<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('looks/head.php'); ?>
</head>

<body>

	<?php $this->load->view('looks/navbar.php'); ?>

	<h1>Article List</h1>
	<ul>
		<?php foreach ($articles as $article) : ?>
			<li><?= $article['title'] ?></li>
		<?php endforeach ?>
	</ul>

	<?php $this->load->view('looks/footer.php'); ?>
</body>

</html>