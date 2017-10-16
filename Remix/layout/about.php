		<!-- Slider Section End -->
		<section id="about">
			<div class="about-section section-padding">
				<div class="container">
					<div class="section-head">
						<h2 class="section-title">
							<?php echo cs_get_option('about_title');?>
						</h2>
						<p class="section-description">
							<?php echo cs_get_option('about_description');?>
						</p>
					</div><!-- /.section-head -->
					<div class="section-content">
						<div class="row">

							<div class="col-lg-4">
								<div class="item-md4 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
									<h3><?php echo cs_get_option('about_2nd_title');?></h3>
									<p class="item-description">
									<?php echo cs_get_option('about_2nd_description');?></p>
									
									<?php	$shell = cs_get_option('about_section_group');
									
									foreach($shell as $keepshell => $keepvalue){ ?>
										
										
									<div class="inner-item">
										<div class="icon">
										<i class="<?php echo $keepvalue['about_group_icon'];?>"></i> 
										</div>
										<div class="item-info">
											<h4 class="item-title">
												<a href="#"><?php echo $keepvalue['about_group_title'];?></a>
											</h4><!-- /.item-title -->
											<p><?php echo $keepvalue['about_group_des'];?></p>
										</div><!-- /.item-info -->
									</div><!-- /.inner-item -->
										
										<?php
									}
									
									
									?>
					
								</div><!-- /.item-md4 -->
							</div><!-- /.col-md-3 -->
							
							
						<?php	
						
								$shellpost = cs_get_option('about_content_group');
									
									foreach($shellpost as $postshell => $postvalue){ ?>
								
								<div class="col-lg-4">
								<div class="item-md4 main-blog wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".9s">
									<div class="post-img">
										<img src="<?php echo $postvalue['about_content_Image'];?>" alt="post Image">
									</div>
									<div class="item-info">
										<h4 class="item-title">
											<a href="#"><?php echo $postvalue['about_content_title'];?></a>
										</h4>
										<p><?php echo $postvalue['about_content_des'];?></p>
									</div>
									<a href="<?php echo $postvalue['about_content_link'];?>" class="btn btn-default"><?php echo $postvalue['about_content_buttonb'];?></a>
								</div><!-- /.item-md4 -->
							</div><!-- /.col-md-3 -->
										<?php
									}
									
									
									?>
									
				

						</div><!-- /.row -->
					</div><!-- /.section-content -->
				</div><!-- /.container -->
			</div><!-- /.about-section -->
		</section><!-- /#about -->