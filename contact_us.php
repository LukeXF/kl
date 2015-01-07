<?php 
	include 'assets/header.php';
	$activeTab = "Contact Us";
	include 'assets/navbar.php';
?>

<div class="jumbotron">
	<div class="container" style="height:150px;">
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="col-md-9 col-md-offset-2">
				<h1 class="small">Contact Us</h1>
				<p style="margin-bottom: 50px;">
					Have a message for us that isn't already answered on our <a href="info">info</a> page? Then feel free to send us your message along with your name and email address and we will try our hardest to get back to you within 24 hours.
				</p>
			</div>
			<div class="col-md-12">
				<form class="form-horizontal" id="contact_form">
					<fieldset>	
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-2 control-label" for="name">Name</label>  
							<div class="col-md-10">
								<input id="name" name="name" type="text" placeholder="Enter your full name here" class="form-control input-md" required="">
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-2 control-label" for="email">Email</label>  
							<div class="col-md-10">
								<input id="email" name="email" type="text" placeholder="Enter your email address here" class="form-control input-md" required="">
							</div>
						</div>

						<!-- Textarea -->
						<div class="form-group">
							<label class="col-md-2 control-label" for="msg">Message</label>
							<div class="col-md-10">                     
								<textarea class="form-control" id="msg" placeholder="Enter your friendly message here" name="msg" cols="6" rows="6"></textarea>
							</div>
						</div>

						<!-- Button -->
						<div class="form-group">
							<label class="col-md-2 control-label" for="submit"></label>
								<div class="col-md-10">
									<button id="submit" name="submit" class="btn btn-primary">Send Message</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>

		<div class="col-md-5">
			<h1 class="small">Find Us</h1>
				<p style="margin-bottom: 50px;">
					The <?php echo date("Y") ?> studio is now located in Witham with much better facilities, parking and access. Easily accessible from the A12 and all surrounding towns and villages. Along with a 10 minute walk from the nearest station or 2 minute taxi journey.
				</p>
				<h2>
					KL Pole &amp; Aerial Studio<br>
					UNIT 9<br>
					Wheatear Industrial Estate<br>
					Perry Road<br>
					Witham<br>
					Essex<br>
					CM8 3YY<br>
				</h2>
				<div class="col-md-12">
					<ul class="social-icons on_point">
						<li><a target="_blank" href="https://www.facebook.com/pages/KL-Pole-Aerial-Studio/923920194293326" class="facebook"><i class="fa fa-facebook fa-4x"></i></a></li>
						<li><a target="_blank" href="https://twitter.com/klpolestudio" class="twitter"><i class="fa fa-twitter fa-4x"></i></a></li>
						<li><a target="_blank" href="https://www.youtube.com/user/klpolestudio" class="youtube"><i class="fa fa-youtube fa-4x"></i></a></li>
						<li><a target="_blank" href="http://instagram.com/klpoleandaerial" class="instagram"><i class="fa fa-instagram fa-4x"></i></a></li>
					</ul>
				</div>
		</div>
	</div>
	<div class="row">
		<span class="sexy_line"></span>
		<div class="col-md-6 directions">
			<h1 class="small">Directions</h1>
			<p><br>
				<div class="col-md-2">
					<b>By Car</b>
				</div>
				<div class="col-md-10">
					Exit the A12 at Junction 22 (Witham North). Continue straight ahead at the traffic lights, and then turn left at the mini roundabout into Freebournes Road. Continue straight through the industrial area then turn left into Perry Road. Wheatear Industrial Estate will then be on your right hand side (Green Sign), we are Unit 9.
				</div>
			</p>
			<p>
				<div class="col-md-2">
					<b>By Train</b>
				</div>
				<div class="col-md-10">
					We are a 10 minute walk from Witham Train Station which has good connections to London (Liverpool Street), Chelmsford, Braintree, Colchester and more!
				</div>
			</p>
			<p>
				<div class="col-md-2">
					<b>Parking</b>
				</div>
				<div class="col-md-10">
					Daytime – We have 5 allocated parking spaces (3 outside the building and 2 in the car park area). If these are full you can park along Perry Road.
				</div>
				<div class="col-md-10 col-md-offset-2">
					Evening – THERE ARE NO PARKING RESTRICTIONS AFTER 5PM! So you can park anywhere in the main car park!
				</div>
				<br>			
			</p>
				<div class="col-md-2">
					<b>Phone (Kaiya)</b> 
				</div>
				<div class="col-md-10">
					<a href="tel:+447890419198">07890 419198</a> (PLEASE NOTE WE DO NOT GET A GOOD MOBILE SIGNAL SO IT CAN BE  HARD TO TAKE CALLS! It is easier to text or email us!) Email: <a href="mailto:klpolestudio@googlemail.com">klpolestudio@googlemail.com</a>
				</div>
			</p>
		</div>
		<div class="col-md-6">
			<h1 class="small">Map Location</h1>
			<div id="gmap"></div>
		</div>
	</div>



</div>

<script type="text/javascript">
jQuery(function($)  
{
    $("#contact_form").submit(function()
    {
        var email = $("#email").val(); // get email field value
        var name = $("#name").val(); // get name field value
        var msg = $("#msg").val(); // get message field value
        $.ajax(
        {
            type: "POST",
            url: "https://mandrillapp.com/api/1.0/messages/send.json",
            data: {
                'key': 'f3aumBm_dMe6Inv3vTWD7w',
                'message': {
                    'from_email': email,
                    'from_name': name,
                    'headers': {
                        'Reply-To': email
                    },
                    'subject': 'Website Contact Form Submission',
                    'text': msg,
                    'to': [
                    {
                        'email': 'KLPoleStudio@gmail.com',
                        'name': 'Kaiya Latham',
                        'type': 'to'
                    }]
                }
            }
        })
        .done(function(response) {
            document.getElementById('submit').innerHTML = 'Message Sent!';
            document.getElementById('submit').className += '';
            document.getElementById('submit').className += ' btn-success';

            $("#name").val(''); // reset field after successful submission
            $("#email").val(''); // reset field after successful submission
            $("#msg").val(''); // reset field after successful submission
        })
        .fail(function(response) {
            document.getElementById('submit').innerHTML = 'Error :(';
            document.getElementById('submit').className += '';
            document.getElementById('submit').className += ' btn-danger';
        });
        return false; // prevent page refresh
    });
});

</script>


<?php include 'assets/footer.php'; ?>
<?php include 'assets/gmap.php'; ?>

