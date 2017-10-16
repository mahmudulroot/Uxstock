		<section id="work" class="work-section dark-bg">
			<div class="section-padding">
				<div class="container">

					<div class="section-content">
						<div class="row">
							<div class="col-md-8">
								<div class="section-head wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
									<h2 class="section-title">
										<?php echo cs_get_option('working_title');?>
									</h2>
									<p class="section-description">
										<?php echo cs_get_option('working_description');?>
									</p>
								</div><!-- /.section-head -->
								<div class="row">
									<?php 
										$workposts = cs_get_option('working_section_group');
										
										foreach($workposts as $workpostpost => $workvalue){

										?>
										
									<div class="col-md-4 col-sm-6">
										<div class="inner-item wow fadeIn" data-wow-duration=".5s" data-wow-delay=".5s">
											<div class="<?php echo $workvalue['working_group_icon'];?> fa-2x"></div>
											<div class="item-info">
												<h5 class="item-title">
													<a href="#"><?php echo $workvalue['working_group_title'];?></a>
												</h5><!-- /.item-title -->
											</div>
										</div><!-- /.inner-item -->
									</div><!-- /.col-md-4 -->
									<?php 
							}
								?>
								</div><!-- /.row -->
							</div><!-- /.col-md-8 -->

							<div class="col-md-4">
								<div class="style-img wow fadeInDown" data-wow-duration=".5s" data-wow-delay="2s">
									<img src="<?php echo cs_get_option('working_image');?>" alt="Style Image">
								</div><!-- /.style-img -->
							</div><!-- /.col-md-4 -->
						</div><!-- /.row -->
					</div><!-- /.section-content -->
				</div><!-- /.container -->
			</div><!-- /.work-section -->
		</section><!-- /#work -->