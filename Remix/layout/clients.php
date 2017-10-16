		<section id="client" class="client-section dark-bg">
			<div class="section-padding">
				<div class="container">
					
					<div class="section-head">
						<h2 class="section-title">
								<?php echo cs_get_option('clients_title');?>
							
						</h2>
					</div><!-- /.section-head -->

					<div class="section-content">
						<div class="row">

							<div class="col-md-6">
								<div id="clients-slider-container">
									<div class="parallax">
									<?php 
									
										$owlslider = cs_get_option('clients_section_group');
										
										?>
										
										<div id="client-slider" class="carousel slide" data-ride="carousel">
											<!-- Indicators -->
											<ol class="carousel-indicators">
											
											<?php 
											
												for($i=0;$i<count($owlslider);$i++)
												{ 
											?>
													
												<li data-target="#client-slider" data-slide-to="<?php echo $i;?>" class="<?php echo (!$i ? 'active' : '');?>"></li>
												<?php 
												}
											?>
											
								
											</ol>
											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
											<?php 
											$i=0;
											$owlslider = cs_get_option('clients_section_group');
									
												foreach($owlslider as $owlslide => $owlslidevalue){ ?>

											    <div class="item <?php echo (!$i ? 'active' : '');?>">
											    	<div class="reviewer-img">
											    		<img src="<?php echo $owlslidevalue['clients_upload'];?>" alt="Clients Iamge">
											    	</div>
											        <div class="ss-text">
														<p><?php echo $owlslidevalue['clients_group_title'];?></p>
														<a href="#" class="name"><?php echo $owlslidevalue['clients_company'];?></a>
														<a href="#" class="designation"><?php echo $owlslidevalue['clients_position'];?></a>
													</div><!-- /.tweet-text -->
											    </div><!-- /.item -->
										<?php 
											$i=1;
											}
										?>
											
											</div><!-- /.carousel-inner -->
										    
										</div><!-- /#client-slider -->
									</div><!-- /.services-overlay -->
								</div><!-- #clients-slider-container -->
							</div><!-- /.col-md-6 -->

							<!-- <div class="angle-line"></div> -->

							<div class="col-md-6">
								<div class="row">
									<div class="client-wrap">
										<?php 
										$clientsposts = cs_get_option('clients_section_image_group');
										
										foreach($clientsposts as $clientpost => $clientvalue){

										?>
										<div class="col-sm-4">
											<div class="single-client">
												<img src="<?php echo $clientvalue['clients_image_upload'];?>" alt="Clients Image">
											</div>
										</div>
													<?php 
							}
								?>
									</div><!-- /.client-wrap -->
								</div>
							</div><!-- /.col-md-4 -->

						</div><!-- /.row -->
					</div><!-- /.section-content -->
				</div><!-- /.container -->
			</div>
		</section><!-- /#client -->