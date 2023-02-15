<?php get_header(); ?>
<div class="section">
		<div class="container">
			<div class="main main-raised">
				<div id="carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel" data-slide-to="0" class="active"></li>
						<li data-target="#carousel" data-slide-to="1"></li>
						<li data-target="#carousel" data-slide-to="2"></li>
						<li data-target="#carousel" data-slide-to="3"></li>
						<li data-target="#carousel" data-slide-to="4"></li>
						<li data-target="#carousel" data-slide-to="5"></li>
						<li data-target="#carousel" data-slide-to="6"></li>
						<li data-target="#carousel" data-slide-to="7"></li>
					</ol>

					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slide7.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/empyrean3.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slide2.jpg" alt="Third slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slide3.jpg" alt="Fourth slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slide4.jpg" alt="Fifth slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slide5.jpg" alt="Sixth slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slide6.jpg" alt="Seventh slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slide9.jpg" alt="Eighth slide">
						</div>
					</div>
					
					<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			
			<div class="card">
				<div class="card-body">
					<?php if (have_posts()){ while(have_posts()) : the_post(); 
						the_content();
					endwhile; } ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
