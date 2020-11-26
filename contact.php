<?php include './common/header.php'?>
<!-- <section id="hero" class="d-flex align-items-center">

	<div class="container">
		<div class="row">
			<div class="col-md-12 justify-content-center" data-aos="zoom-in" data-aos-delay="200">
				<h1 class="text-center animated">Contact Us</h1>
			</div>
		</div>
	</div>
</section> -->

<!-- <section id="hero" class="d-flex align-items-center">

 <div class="container">
      <div class="row">
        <div class="d-flex flex-column justify-content-center pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
          <h1 class="text-center">Contact Us</h1>
        </div>
        
      </div>
    </div>
</section> -->
<section id="contact" class="contact mt-5">
	<div class="container" data-aos="fade-up">

		<div class="section-title mt-5">
			<h2>Contact</h2>
		</div>

		<div class="row">

			<div class="col-lg-5 d-flex align-items-stretch">
				<div class="info">
					<div class="address">
						<i class="icofont-google-map"></i>
						<h4>Location:</h4>
						<p>Madhu Acid & Chemicals Opp.<br>
                                    B. K. Cinema,Nr. Paresh Ice Factory<br>
                                        Taluka: Mehsana, District: Mehsana 384002.</p>
					</div>

					<div class="email">
						<i class="icofont-envelope"></i>
						<h4>Email:</h4>
						<p>info@example.com</p>
					</div>

					<div class="phone">
						<i class="icofont-phone"></i>
						<h4>Call:</h4>
						<p>+91 9825422218</p>
					</div>

					<iframe width="400" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=mehsana&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
				</div>

			</div>

			<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
				<form action="mail.php" method="post" role="form" class="php-email-form">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="name" style="font-size: 12px">Your Name</label>
							<input style="font-size: 15px" type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validate"></div>
						</div>
						<div class="form-group col-md-6">
							<label style="font-size: 12px" for="name">Your Email</label>
							<input style="font-size: 15px" type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
							<div class="validate"></div>
						</div>
					</div>
					<div class="form-group">
						<label style="font-size: 12px">Mobile</label>
					<input style="font-size: 15px" name="phone" type="number" id="phone" class="form-control" data-rule="minlen:10">
					<div class="validate"></div>
					</div>
					<div class="form-group">
						<label style="font-size: 12px" for="name">Message</label>
						<textarea style="font-size: 15px" class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
						<div class="validate"></div>
					</div>
					<div class="mb-3">
						<div class="loading">Loading</div>
						<div class="error-message"></div>
						<div class="sent-message">Your message has been sent. Thank you!</div>
					</div>
					<div class="text-center"><button style="font-size: 12px" type="submit" name="submit">Send Message</button></div>
				</form>
			</div>

		</div>

	</div>
</section>
<?php include './common/footer.php'?>