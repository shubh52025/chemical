<?php include './common/header.php'?>

<!-- <section id="hero" class="d-flex align-items-center">

	 <div class="container">
      <div class="row">
      	<div class="col-lg-6 order-2 order-lg-1 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/business.png" class="img-fluid animated" alt="" height="100" width="500">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
          <h1 class="text-center">Business Enquiry</h1>
        </div>
        
      </div>
    </div>
</section> -->
<!-- <iframe width="1350" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=mehsana&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> -->
<div class="container" style="">
	<section>
		<div class="contact_form col-sm-12 col-md-12 justify-content-center mt-5">
			<form action="enqmail.php" method="post" role="form" class="php-email-form">
				<div class="section-title mt-5">
			<h2>Business Enquiry</h2>
		</div>
			<div class="row mt-3">

				<div class="col-sm-6 col-md-6 form-group">
					<label style="font-size: 15px">Full Name</label>
					<input style="font-size: 15px" name="fullname"  type="text" id="fullname" class="form-control" required="">
				</div>
				<div class="col-sm-6 col-md-6 form-group">
					<label style="font-size: 15px">Company Name</label>
					<input style="font-size: 15px" name="companyname" type="text" id="companyname" class="form-control" required="">
				</div>

			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 form-group">
					<label style="font-size: 15px">Address</label>
					<textarea style="font-size: 15px" name="address" rows="2" cols="20" id="address" class="form-control"></textarea required="">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-6 form-group">
					<label style="font-size: 15px">Email</label>
					<input style="font-size: 15px" name="email" type="email" id="email" class="form-control" required="">
				</div>
				<div class="col-sm-6 col-md-6 form-group">
					<label style="font-size: 15px">Mobile</label>
					<input style="font-size: 15px" name="mobile" type="number" maxlength="10" id="mobile" class="form-control" required="">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 form-group">
					<label style="font-size: 20px">Enquiry For</label>
					<select style="font-size: 13px" name="item" id="item" class="form-control" required="">
						<option style="font-size: 15px" value="">Select Enquiry</option>
						<option style="font-size: 12px"  value="Sodiun Meta Silicate">Sodiun Meta Silicate</option>
						<option style="font-size: 12px" value="Sodium Silicate Liquid">Sodium Silicate Liquid</option>
						<option style="font-size: 12px" value="Sodium Silicate Solid">Sodium Silicate Solid</option>

					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 form-group">
					<label style="font-size: 15px">Enquiry / Feedback</label>
					<textarea style="font-size: 15px" name="enquiry" rows="2" cols="20" id="enquiry" class="form-control" required=""></textarea>
				</div>
				<div class="col-sm-12 col-md-12 form-group text-center" ><br>
                                        <input style="font-size: 18px" type="submit" name="submit" value="Send Enquiry" onclick="" id="submit" class="btn btn-secondary">
                                    </div>
			</div>
		</form>
		</div>
	</section>
</div>
<?php include './common/footer.php'?>
