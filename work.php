<?php

/*
File Name: designs.php
Programmer: Brandon El Haj
*/

?>

<?php include 'header.php'; ?>

<main>
	<!-- Work Section -->
	<section id="work">
		<!-- hr tag creates lines across the screen to hold the Work heading -->
		<hr class="heading">	
		<!-- Work heading -->
		<h1 class="serv_heading up">Work</h1>
		<hr class="heading">
		<!-- Two column design using the responsive grid file. I set it to span_6_of_12 to make two columns for the work samples. -->
		<div class="section_group">
			<div class="col span_6_of_12">
					<!-- Mock thumbnail link image for Burrito Masala, connects to burrito_masala.php. --> 
					<a href="http://www.haj.bduodesign.com/burrito_masala.php" class="outline">
						<!-- Burrito Masala mock thumbnail image. PNG file with 300px x 246px dimensions -->
						<img src="/images/bm_mock_thumb.png" alt ="Burrito Masala Thumbnail" class="thumbs_top pad_bottom">
					</a>
			</div>
			<div class="col span_6_of_12">
					<!-- Mock thumbnail link image for Fender Info, connects to fender_bass.php. --> 
					<a href="http://www.haj.bduodesign.com/fender_bass.php" class="outline">
						<!-- Fender Info mock thumbnail image. PNG file with 300px x 246px dimensions -->
						<img src="/images/fender_mock_thumb.png" alt ="Fender Info Thumbnail" class="thumbs_top">	
					</a>	
			</div>
		</div>
		<!-- Clear it div to reset the layout for the 2-column bottom -->
		<div class="clear"></div>
		<!-- Two column design using the responsive grid file. I set it to span_6_of_12 to make two columns for the work samples. -->
		<div class="section_group">
			<div class="col span_6_of_12">
				<!-- Mock thumbnail link image for Timbers theme, connects to timbers.php. --> 
				<a href="http://www.haj.bduodesign.com/timbers.php" class="outline">
					<!-- Timbers theme mock thumbnail image. PNG file with 300px x 246px dimensions -->
					<img src="/images/timbers_mock_thumb.png" alt ="Timbers Thumbnail" class="thumbs_bottom">	
				</a>	
			</div>
			
			<div class="col span_6_of_12">
				<!-- Mock thumbnail link image for Fender Info, connects to fender_bass.php. --> 
				<a href="http://www.haj.bduodesign.com/fender_bass.php" class="outline" >
					<!-- Fender Info mock thumbnail image. PNG file with 300px x 246px dimensions -->
					<img src="/images/fender_mock_thumb.png" alt ="Stella Moony Thumbnail" id="fender_work" class="thumbs_bottom foot">	
				</a>		
			</div>
		</div>
	</section>
</main>

<div class="clear"></div>

<?php include 'footer.php'; ?>
	