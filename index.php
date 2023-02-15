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
							<picture>
    							<source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/slide7.webp">
    							<source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/img/slide7.jpg">
    							<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slide7.jpg" alt="First slide">
							</picture>
						</div>
						<div class="carousel-item">
							<picture>
    							<source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/empyrean3.webp">
    							<source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/img/empyrean3.jpg">
    							<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/empyrean3.jpg" alt="Second slide">
							</picture>
						</div>
						<div class="carousel-item">
							<picture>
    							<source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/slide2.webp">
    							<source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/img/slide2.jpg">
    							<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slide2.jpg" alt="Third slide">
							</picture>
						</div>
						<div class="carousel-item">
							<picture>
    							<source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/slide3.webp">
    							<source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/img/slide3.jpg">
    							<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slide3.jpg" alt="Fourth slide">
							</picture>
						</div>
						<div class="carousel-item">
							<picture>
    							<source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/slide4.webp">
    							<source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/img/slide4.jpg">
    							<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slide4.jpg" alt="Fifth slide">
							</picture>
						</div>
						<div class="carousel-item">
							<picture>
    							<source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/slide5.webp">
    							<source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/img/slide5.jpg">
    							<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slide5.jpg" alt="Sixth slide">
							</picture>
						</div>
						<div class="carousel-item">
							<picture>
    							<source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/slide6.webp">
    							<source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/img/slide6.jpg">
    							<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slide6.jpg" alt="Seventh slide">
							</picture>
						</div>
						<div class="carousel-item">
							<picture>
    							<source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/slide9.webp">
    							<source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/img/slide9.jpg">
    							<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slide9.jpg" alt="Eighth slide">
							</picture>
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