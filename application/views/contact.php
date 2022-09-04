<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('looks/head.php'); ?>
</head>

<body>
	<?php $this->load->view('looks/navbar.php'); ?>

	<h1>Contact Us</h1>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" placeholder="your name" required />
		</div>
		<div>
			<label for="email">Email</label>
			<input type="email" name="email" placeholder="your email address" required />
		</div>
		<div>
			<label for="message">Message</label><br>
			<textarea name="message" cols="30" rows="5" placeholder="write your message" required></textarea>
		</div>

		<div>
			<input type="submit" value="Send">
		</div>
	</form>

	<?php $this->load->view('looks/footer.php'); ?>
</body>

</html>