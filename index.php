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
<?php get_footer(); ?>
