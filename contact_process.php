<?php
// isset function checks if the variable is set or has a value
if (isset($_POST['submit'])) {
	// Declaring the variables
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$from = 'Brandon El Haj Web Design';
	$to = 'byron23@gmail.com';
	$subject = 'Welcome to Brandon El Haj Web Design!';

	// Fills the content of the email
	$body = "FROM: $name\n Email: $email\n Message:\n $message";

	// Checks that the user entered a name
	if (!$_POST['name']) {
	$errorName = 'Enter your first and last name please';
	}

	// Checks if the user entered a valid email address
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	$errorEmail = 'Only valid email addresses please';
	}

	// Checks that the user entered a message
	if (!$_POST['message']) {
	$errorMessage = 'Enter a message, I want to hear from you';
	}

	// Function checks for errors, if they are none, it sends the form
	if (!$errorName && !$errorEmail && !$errorMessage) {
		if (mail ($to, $subject, $body, $from)) {
			$result='<div class="alert alert-success">Thanks for the message! I will be in touch soon.</div>';
		}
		else {
			$result='<div class="alert alert-danger">Sorry your message was shot down. Please try again.</div>';
		}
	}
}
?>

<?php include 'header.php'; ?>

<main>
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
			<input type="text" name="name" id="name" class="name" value="" required><br>
			<!-- Email input field -->
			<label for="email">Email &#42;</label><br>
			<input type="email" name="email" id="email" class="email" value="" required><br>
			<!-- Message input field -->
			<label for="message">Message &#42;</label><br>
			<textarea name="message" id="message"></textarea><br>
			<!-- Submit button and border -->
			<section class="border">
				<button type="submit" id="submit" name="submit">Send</button><br>
			</section>
			<!-- Echo prints the result of the form being sent or not -->
			<?php echo $result; ?>
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
