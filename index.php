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
		<div class="col-md-3">
			<h1 class="small">Today - <?php echo $today; ?></h1>
			<div id="recordnext">
				<table width="100%" cellpadding="2" cellspacing="5" border="0">
					<tbody>
						<tr>
							<td width="40%" valign="middle" align="left"><span class="maintext">18:30 - 19:30</span></td>
							<td width="60%" valign="middle" align="left"><span class="maintext">Aerial Silks</span></td>
						</tr>
						<tr>
							<td width="40%" valign="middle" align="left"><span class="maintext">19:30 - 20:30</span></td>
							<td width="60%" valign="middle" align="left"><span class="maintext">Mixed Ability Pole</span></td>
						</tr>
						<tr>
							<td width="40%" valign="middle" align="left"><span class="maintext">20:30 - 21:15</span></td>
							<td width="60%" valign="middle" align="left"><span class="maintext">Stretch and Flex</span></td>
						</tr>
						<tr>
							<td width="40%" valign="middle" align="left"><span class="maintext">20:30 - 21:30</span></td>
							<td width="60%" valign="middle" align="left"><span class="maintext">Hula Hoop</span></td>
						</tr>
					</tbody>
				</table>

				<a href="timetable.php"><div id="homepagebutton">View Timetable</div></a> 
				<a href="store.php?display=classes"><div id="homepagebutton">Book Now</div></a> 

			</div>
			<hr>


			<h1 class="small">Tomorrow - <?php echo $tomorrow; ?></h1>
			<div id="recordnext">
				<table width="100%" cellpadding="2" cellspacing="5" border="0">
					<tbody>
						<tr>
							<td width="40%" valign="middle" align="left"><span class="maintext">18:30 - 19:30</span></td>
							<td width="60%" valign="middle" align="left"><span class="maintext">Aerial Silks</span></td>
						</tr>
						<tr>
							<td width="40%" valign="middle" align="left"><span class="maintext">19:30 - 20:30</span></td>
							<td width="60%" valign="middle" align="left"><span class="maintext">Mixed Ability Pole</span></td>
						</tr>
						<tr>
							<td width="40%" valign="middle" align="left"><span class="maintext">20:30 - 21:15</span></td>
							<td width="60%" valign="middle" align="left"><span class="maintext">Stretch and Flex</span></td>
						</tr>
						<tr>
							<td width="40%" valign="middle" align="left"><span class="maintext">20:30 - 21:30</span></td>
							<td width="60%" valign="middle" align="left"><span class="maintext">Hula Hoop</span></td>
						</tr>
					</tbody>
				</table>

				<a href="timetable.php"><div id="homepagebutton">View Timetable</div></a> 
				<a href="store.php?display=classes"><div id="homepagebutton">Book Now</div></a> 

			</div>


			<?php include 'assets/twitter.php'; ?>


		</div>
		<div class="col-md-9">
			<h1 class="small">Please Note</h1>
			<p>
				Due to our impending move to our new studio, we are currently unable to take any bookings until the Jan 2015. If you would like to be added to our mailing list please email klpolestudio@googlemail.com and you will be notified once we are ready to start taking bookings! Thank you!
			</p>

			<hr>

			<h1 class="small">Welcome</h1>
			<p>
				Established in 2011 as a small 3 pole studio, KL Pole and Aerial Studio has now grown to be one of the largest purpose built pole and aerial studios in the south east! Based in Braintree, Essex and run by Xpert Pole Fitness qualified instructor Kaiya Latham, we now have 2 large studios kitted out with 13ft tall X Poles! We pride ourselves on being one of the most diverse studios where everyone is welcome and where being unique is celebrated!
			</p>
			<p>
				KL Pole &amp; Aerial Studio is based in Braintree, North Essex, and is within easy reach of Colchester, Chelmsford, Stansted, Dunmow and Witham.
			</p>

			<div class="row">
				<div class="col-md-6">
					<h1 class="small">Our Classes</h1>
					<p>
						We offer a range of classes listed below
						<br><br>
						Pole Fitness <br>
						Aerial Hoop (Lyra) <br>
						Aerial Silks <br>
						Static Trapeze <br>
						Hula Hoop<br>
						Circus Experience Days<br>
						Parties<br>
						Private Tuition<br>
						Children's Aerial Classes (coming soon!)<br>
					</p>
				</div>
				
				<div class="col-md-6">
					<h1 class="small">Our Location</h1>
					<p>
						Our studio is based on Lakes Industrial Park near Freeport, Braintree.
						<br><br>
						KL Pole and Aerial Studio<br>
						Unit 6A<br>
						Lakes Industrial Park<br>
						Lower Chapel Hill<br>
						Braintree<br>
						Essex<br>
						CM7 3RU<br>
					</p>
				</div>
			</div>


			<div id="gmap"></div>
		</div>
	</div>
	<?php 
	//	echo "<pre>";
	//	print_r($tweets);
	//	echo "</pre>";
	?>

</div>
	<?php include 'assets/footer.php'; ?>
	<?php include 'assets/gmap.php'; ?>

