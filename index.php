<?php 
	include 'assets/header.php';
	$activeTab = "Home";
	include 'assets/navbar.php';
?>

<div class="jumbotron">
	<div class="container" style="height:150px;">
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-9"><h1>Essex Leading Aerial Arts Studio</h1>
			<div id="recordnext">
				<div class="discipline color1"> Pole Fitness</div>
				<div class="discipline color2"> Aerial Hoop</div>
				<div class="discipline color3"> Aerial Silks</div>
				<div class="discipline color4"> Trapeze</div>
				<div class="discipline color5"> Stretch &amp; Flexibility Classes</div>
				<div class="discipline color6"> Pole Boot Camp</div>
			</div>
		</div>
		<div class="col-md-3">
			<ul class="social-icons">
				<li><a target="_blank" href="https://www.facebook.com/pages/KL-Pole-Aerial-Studio/923920194293326" class="facebook"><i class="fa fa-facebook fa-2x"></i></a></li>
				<li><a target="_blank" href="https://twitter.com/klpolestudio" class="twitter"><i class="fa fa-twitter fa-2x"></i></a></li>
				<li><a target="_blank" href="https://www.youtube.com/user/klpolestudio" class="youtube"><i class="fa fa-youtube fa-2x"></i></a></li>
				<li><a target="_blank" href="http://instagram.com/klpoleandaerial" class="instagram"><i class="fa fa-instagram fa-2x"></i></a></li>
			</ul>
		</div>		
	</div>
	<div class="row">
		<span class='sexy_line'></span>
	</div>
	<div class="row">
		<div class="col-md-3">

			<h1 class="small">Today - <?php echo $today; ?></h1>


			<?php include 'assets/twitter.php'; ?>


		</div>
		<div class="col-md-9" style="margin-left: 10px; margin-right: -10px;">

			<div class="row">
				<h1 class="small">Our New Studio Opens January 2015</h1>
				<div class="col-md-12">
					<p>
						Due to our impending move to our new studio, we are currently unable to take any bookings until January 2015. If you would like to be added to our mailing list please email <a href="mailto:klpolestudio@googlemail.com">klpolestudio@googlemail.com</a> and you will be notified once we are ready to start taking bookings! Thank you!
					</p>
					<p>
						KL Pole &amp; Aerial Studio is one of the largest purpose built pole &amp; aerial schools in the south east. Teaching pole and aerial fitness we pride ourselves on being one of the most diverse studios!
					</p>
				</div>
			</div>



			<span class='sexy_line'></span>



			<div class="row">
				<h1 class="small">Why take classes with us?</h1>
				<div class="col-md-6">
					
					<ul>
						<li>Xpert Qualified and PDC Approved Pole Instructors!</li>
						<li>Fully equipped purpose built studio with 4-5 metre ceiling heights and safety flooring!</li>
						<li>Some of the most experienced instructors in the Essex Area!</li>
						<li>Aerial Instructor trained by former Cirque Du Soleil performers!</li>
						<li>Classes for all ages and fitness levels!</li>
						<li>Fully Insured for Public Liability and Professional Indemnity!</li>
						<li>NECCA and Spin City Qualified Aerial Instructor!</li>
						<li>Fully accessible studio catering for all; including people with disabilities!</li>
					</ul>

				</div>
				<div class="col-md-6">
					<img class="group_photo" src="http://puu.sh/dYlOb/c9b794f998.jpg">
				</div>
			</div>

			
			
			<span class='sexy_line'></span>



			<div class="row" style="margin-bottom: 40px; margin-top: 60px;">
				<div class="col-md-6">
					<img class="group_photo" src="assets/img/kaiyabw.jpg">
				</div>

				<h1 class="small" style="margin-top: 0px;">What we do</h1>
				<div class="col-md-6">
					<p>						
						We run classes in Pole Fitness, Aerial Hoop, Aerial Silks, Trapeze, Boot Camp and Stretch! Our classes are made to suit YOU - whether you want to learn as a skill or art for performance, or if you want to learn for fitness purposes!
					</p>
				</div>
			</div>



			<div class="row">
				<div class="col-md-6">

				<h1 class="small" style="margin-top: 0px;">What we do</h1>
					<p>
						You can see all our disciplines in action below in our group ensemble performance from our showcase in November 2014!
					</p>
				</div>
				<div class="col-md-6">

						<iframe 
							width="100%" 
							height="230px" 
							src="//www.youtube.com/embed/ru5O6_AcIY0?autoplay=0&amp;controls=0&amp;showinfo=0&amp;rel=0" 
							frameborder="0" 
							allowfullscreen>
						</iframe>

				</div>
			</div>


















			<?php
				// uncomment to check if the twitter array works
            	// echo "<pre>";
            	// print_r($tweets);
            	// echo "</pre>";
            ?>

		</div>

	</div>
	<?php 
	//	echo "<pre>";
	//	print_r($tweets);
	//	echo "</pre>";
	?>

</div>
	<?php include 'assets/footer.php'; ?>

