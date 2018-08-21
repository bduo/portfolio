<?php

/*
File Name: contact.php
Programmer: Brandon El Haj
*/

?>

<?php include 'header.php'; ?>

<main class="space">
	<!-- Contact Section -->
	<section id="contact">
		<!-- Contact heading -->
		<h2 class="contact_heading">Contact</h2>
		<!-- Contact paragraph -->
		<p class="contact_para">Have any projects in mind?<br>
		   Drop me a line.
		</p>
		<!-- Contact form that sends an email to elhaj@colorado.edu-->
		<form method="post" action="contact_process.php">
			<!-- Name input field -->
			<label for="name">Name &#42;</label><br>
			<input type="text" name="name" id="name" class="name" required><br>
			<!-- Email input field -->
			<label for="email">Email &#42;</label><br>
			<input type="email" name="email" id="email" class="email" required><br>
			<!-- Message input field -->
			<label for="message">Message &#42;</label><br>
			<textarea name="message" id="message" value=""></textarea><br>
			<!-- Submit button and border -->
			<section class="border">
				<button type="submit" id="submit" name="submit">Send</button><br>
			</section>
		</form>
		<!-- Physical address for my business -->
		<address>
		1212 SE 26th Ave<br>
		Portland, Oregon 97214
		</address>
		<!-- Phone number for contact -->
		<a href="tel:1-971-266-3825" class="phone">971-266-3825</a>
	</section>
</main>

<?php include 'footer.php'; ?>
