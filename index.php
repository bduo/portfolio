<?php

/*
File Name: index.php
Programmer: Brandon El Haj
*/

?>

<?php include 'header.php'; ?>

<main>
	<!-- Intro Section -->	
	<section id="intro">
		<!-- Ocean image on homepage. PNG file with dimensions of 800px x 305px. -->
		<img src="/images/ocean.png" alt="Ocean picture" class="ocean">	
		<!-- Call to action buttons for Work and Contact pages -->
		<div id="container">
			<a href="http://www.haj.bduodesign.com/work.php" id="designs-button"></a>
			<div class="divider"></div>
			<a href="http://www.haj.bduodesign.com/contact.php" id="contact-button"></a>
		</div>
		<div class="clear"></div>
		<!-- Two column design using the responsive grid file. I set it to span_6_of_12 to make two columns for the about paragraph and photo. -->
		<div class="section_group">
			<div class="col span_12_of_12">
				<p class="about_para"><span class="orange_type">HEY!</span> Glad you're checking out my site. My name is Brandon El Haj and I am a Web Designer based in Portland, Oregon. I love to create custom sites for small businesses and anyone looking to expand their reach. If you can dream a concept, I can code it and bring it to life. I believe a well designed website starts with tasteful aesthetics and a clear cohesive message. I have designed sites for small businesses, entrepreneurs, bands, events, and have even created custom WordPress templates that you can customize to your hearts content. I think of websites as a communication tool to help sell your brand. Let me build you a custom site that speaks for your business mission or personal goals.
				</p>
			</div>
			<div class="col span_12_of_12">
				<!-- Picture of myself. PNG file 500px x 454px dimensions --> 
				<img src="/images/brandon.jpg" alt="Photo of Brandon El Haj" class="brandon">
			</div>
		</div>
		<div class="clear"></div>
	</section>		
</main>	

<?php include 'footer.php'; ?>


