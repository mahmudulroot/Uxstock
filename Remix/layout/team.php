		<section id="team" class="team-section dark-bg">
			<div class="section-padding">
				<div class="container">
					
					<div class="section-head">
						<h2 class="section-title">
							<?php echo cs_get_option('team_title');?>
						</h2>
						<p class="section-description">
							<?php echo cs_get_option('team_description');?>
						</p>
					</div><!-- /.section-head -->


					<div class="section-content">
						<div class="row">
							<?php 
					$teamposts = cs_get_option('team_section_group');
									
							foreach($teamposts as $teampost => $teamvalue){ ?>
						
							<div class="col-md-3 col-sm-6">
								<div class="item-md3 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
									<div class="team-img">
										<img src="<?php echo $teamvalue['team_group_Image'];?>" alt="Team image">
										<div class="overlay" style="background-color:<?php echo $teamvalue['team_group_color'];?>"></div>
										<div class="social-icon">
											<a href="#"><i class="<?php echo $teamvalue['team_social_fb_link'];?>"></i></a>
											<a href="#"><i class="<?php echo $teamvalue['team_social_tw_link'];?>"></i></a>
											<a href="#"><i class="<?php echo $teamvalue['team_social_googleplus_link'];?>"></i></a>
										</div>
									</div><!-- /.icon -->

									<div class="member-info">
										<h4 class="name item-title">
											<a href="#"><?php echo $teamvalue['team_group_title'];?></a>
										</h4>
										<div class="designation">
											<?php echo $teamvalue['team_group_sub_title'];?>
										</div><!-- /.item-title -->
										<p><?php echo $teamvalue['team_group_des'];?></p>
									</div><!-- /.item-info -->
								</div><!-- /.item-md3 -->
							</div><!-- /.col-md-3 -->
								<?php 
							}
								?>

						</div><!-- /.row -->
					</div><!-- /.section-content -->
				</div><!-- /.container -->
			</div><!-- /.team-section -->
		</section><!-- /#team -->