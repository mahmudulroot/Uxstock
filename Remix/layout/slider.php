		<!-- Slider Section -->
		<section id="slider">
			<div class="slider-container">
				<div class="overlay">
					<div id="main-slider" class="carousel slide" data-ride="carousel">
						<div class="container">
							<!-- Indicators -->
							
										<?php 
									
										$mainslider = cs_get_option('slider_section_group');
										
										?>
										
							<ol class="carousel-indicators">
								
											<?php 
											
												for($i=0;$i<count($mainslider);$i++)
												{ 
											?>
										<li data-target="#main-slider" data-slide-to="<?php echo $i;?>" class="?php echo (!$i ? 'active' : '');?>"></li>
						    	
								<?php 
												}
											?>
								
								
							</ol>

						  	<!-- Wrapper for slides -->
						  	<div class="carousel-inner" role="listbox">
								<?php 
									$i=0;
									$mainslider = cs_get_option('slider_section_group');
									
									foreach($mainslider as $mainslide => $mainslidevalue){ ?>
									
							    <div class="item <?php echo (!$i ? 'active' : '');?>">
								    <div class="slider-item-container wow fadeOutUp" data-wow-duration=".8s" data-wow-delay="6.6s">
								    	<div class="col-md-6 col-sm-6">
									     	<div class="row">
										    	<div class="slider-txt">
													<h2 class="title wow fadeInDown" data-wow-duration=".5s" data-wow-delay="2.5s"><?php echo $mainslidevalue['slider_title'];?></h2>
													<h3 class="sub-title wow fadeInLeft" data-wow-duration=".5s" data-wow-delay="3.9s"><?php echo $mainslidevalue['slider_sub_title'];?></h3>
													<p class="description wow fadeInUp" data-wow-duration=".5s" data-wow-delay="3s"><?php echo $mainslidevalue['slider_description'];?></p>

													<a href="#" class="btn btn-default wow zoomIn" data-wow-duration=".5s" data-wow-delay="4.5s"><?php echo $mainslidevalue['slider_button'];?></a>
												</div><!-- /.slider-txt -->
											</div>
									    </div><!-- /.col-md-6 -->

									    <div class="col-md-6 col-sm-6">
									     	<div class="row">
										    	<div class="slider-images">
													<div class="big-img1 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.9s"><img src="<?php echo $mainslidevalue['slider_upload'];?>" alt="Bulb Iamge"></div>
												</div><!-- /.slider-images -->
											</div>
									    </div><!-- /.col-md-6 -->
									</div><!-- /.slider-item-container -->
							    </div><!-- /.item -->
								
									<?php 
											$i=1;
											}
										?>

						  	</div><!-- /.carousel-inner -->

							<!-- Controls -->
							<a class="slide-arow left" href="#main-slider" role="button" data-slide="prev">
								<em></em>
								<span></span>
							</a>
							<a class="slide-arow right" href="#main-slider" role="button" data-slide="next">
								<em></em>
								<span></span>
							</a>
						</div><!-- /.container -->
					</div><!-- /#main-slider -->
				</div><!-- /.overlay -->
			</div><!-- /.slider-container -->
		</section><!-- /#slider -->