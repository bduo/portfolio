<?php

/*
File Name: my_story.php
Programmer: Brandon El Haj
*/

?>

<?php include 'header.php'; ?>

<main>
	<!-- Services Section -->
	<section id="services">
		<!-- hr tag creates lines across the screen to hold the Services heading -->
		<hr class="heading"/>
		<!-- Services heading -->
		<h1 class="serv_heading">Services</h1>
		<hr class="heading"/>
		<!-- Three column design using the responsive grid file. I set it to span_4_of_12 to make three columns -->
		<div class="section_group">
			<div class="col span_4_of_12">
				<!-- Web Design graphic. PNG file 300px x 300px dimensions --> 
				<img src="/images/web_services.png" alt="Web Design Graphic" class="services">
			</div>
			<div class="col span_4_of_12">
					<!-- UX/UI graphic. PNG file 300px x 300px dimensions -->
				<img src="/images/web_services2.png" alt="SEO Graphic" class="services">
			</div>
			<div class="col span_4_of_12">
				<!-- WordPress graphic. PNG file 300px x 300px dimensions -->
				<img src="/images/web_services3.png" alt="Wordpress Graphic" class="services footy">
			</div>
		</div>
		<!-- Clear it div to reset the layout for the 3-column bottom -->
		<div class="clear"></div>
	</section>
</main>

<?php include 'footer.php'; ?>
