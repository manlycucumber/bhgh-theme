<?php get_header(); ?>
  <div class="card card-body blur shadow-blur mx-4 mx-md-5 mx-lg-10 mt-n9">
    <div class="section my-4 my-lg-5">
      <div class="container">
        <div class="row flex-row">
          <div class="col-lg-8">
			<div class="me-lg-4">
				<?php if (have_posts()){ while(have_posts()) : the_post();
							the_content();
				endwhile; } ?>
			</div>
          </div>
          <div class="sidebar col-lg-4">
			<div class="ms-lg-4">
				<h2>Book Your Stay</h2>
				<br />

				<form method="GET" class="mphb_sc_search-form" action="https://blueheron.nowhost.me/search-results/">
					<div class="row">
						<div class="col-xl-6 text-center">
							<div class="input-group input-group-static mb-4">
								<label>Check-In</label>
								<input id="checkin" class="form-control" type="date" onblur="changeInDate();" >
							</div>
						</div>
						<div class="col-xl-6 text-center">
							<div class="input-group input-group-static mb-4">
								<label>Check-Out</label>
								<input id="checkout" class="form-control" type="date" onblur="changeOutDate();" >
							</div>
						</div>
					</div>

					<script type="text/javascript">
						function changeInDate(){
							d=document.getElementById("checkin").value;
							dt = d.split("-");
							document.getElementById("check_in_date").value=dt[0]+"-"+dt[1]+"-"+dt[2];
						}

						function changeOutDate(){
							d=document.getElementById("checkout").value;
							dt = d.split("-");
							document.getElementById("check_out_date").value=dt[0]+"-"+dt[1]+"-"+dt[2];
						}
					</script>

					<input id="check_in_date" name="mphb_check_in_date" type="text" hidden>
					<input id="check_out_date" name="mphb_check_out_date" type="text" hidden>

					<div class="row">
						<div class="col-xl-6 text-center">
							<div class="input-group input-group-static mb-4">
								<label># of Adults</label>
								<select id="mphb_adults" class="form-control" name="mphb_adults" placeholder="Number of Adults">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
							</div>
						</div>
						<div class="col-xl-6 text-center">
							<div class="input-group input-group-static mb-4">
								<label># of Children</label>
								<select id="mphb_kids" class="form-control" name="mphb_children" placeholder="Number of Adults">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Check Availability</button>
						</div>
					</div>

					<script>
						if (document.getElementById("mphb_adults")) {
							var element = document.getElementById("mphb_adults");
							const ADULTS = new Choices(element, {});
						}

						if (document.getElementById("mphb_kids")) {
							var element = document.getElementById("mphb_kids");
							const KIDS = new Choices(element, {});
						}
					</script>

				    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) ?>
				</form>
			  </div>
			</div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- START Testimonials w/ 3 cards w/ stars -->
<section class="py-5 position-relative">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="mb-3">Our Customers</h2>
        <h5 class="font-weight-light">
          You need more informations?
          Read our customers reviews.
        </h5>
      </div>
    </div>
    <div class="row mt-lg-6 mt-4">
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-4 ms-auto">
        <div class="card">
          <div class="position-relative mt-n4 mx-auto z-index-2">
            <div class="blur-shadow-avatar">
              <img class="avatar border-radius-lg avatar-lg" src="<?php echo get_template_directory_uri(); ?>/assets/mkimg/team-4.jpg">
            </div>
          </div>
          <h6 class="mb-0 mt-3 text-center">Lucian Eurel</h6>
          <p class="text-xs mb-0 text-center">CEO Creative Tim</p>
          <div class="card-body text-center py-0">
            <p class="mt-4">
              "Web Summit will increase your appetite, your inspiration, your skills, your motivation and your network."
            </p>
          </div>
          <div class="card-footer text-center pt-3 position-relative z-index-1">
            <div class="text-center">
              <div class="rating float-none">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
        <div class="card">
          <div class="position-relative mt-n4 mx-auto z-index-2">
            <div class="blur-shadow-avatar">
              <img class="avatar border-radius-lg avatar-lg" src="<?php echo get_template_directory_uri(); ?>/assets/mkimg/team-2.jpg">
            </div>
          </div>
          <h6 class="mb-0 mt-3 text-center">Linde Michel</h6>
          <p class="text-xs mb-0 text-center">CFO Slack</p>
          <div class="card-body text-center py-0">
            <p class="mt-4">
              "Do not go where the path may lead, go instead where there is no path and leave a trail. You will succeed on it. "
            </p>
          </div>
          <div class="card-footer text-center pt-3 position-relative z-index-1">
            <div class="text-center">
              <div class="rating float-none">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-lg-0 mb-4 me-auto">
        <div class="card">
          <div class="position-relative mt-n4 mx-auto z-index-2">
            <div class="blur-shadow-avatar">
              <img class="avatar border-radius-lg avatar-lg" src="<?php echo get_template_directory_uri(); ?>/assets/mkimg/team-3.jpg">
            </div>
          </div>
          <h6 class="mb-0 mt-3 text-center">Misha Stam</h6>
          <p class="text-xs mb-0 text-center">COO Dribbble</p>
          <div class="card-body text-center py-0">
            <p class="mt-4">
              "The pessimist complains about the wind; the optimist expects it to change; the realist adjusts the sails."
            </p>
          </div>
          <div class="card-footer text-center pt-3 position-relative z-index-1">
            <div class="text-center">
              <div class="rating float-none">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-lg-0 mb-4 me-auto">
        <div class="card h-100">
          <div class="card-body d-flex flex-column justify-content-center text-center">
            <a href="javascript:;">
              <i class="fa fa-plus text-secondary mb-3"></i>
              <h5 class="text-secondary"> Add Testimonial </h5>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END Testimonials w/ 3 cards w/ stars -->
<?php get_footer(); ?>
