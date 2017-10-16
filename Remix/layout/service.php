        <section id="services" class="service-section">
	        <div class="section-padding">
	            <div class="container"> 

	            	<div class="section-head wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
						<h2 class="section-title">
							<?php echo cs_get_option('services_title');?>
						</h2>
						<p class="section-description">
							<?php echo cs_get_option('services_description');?>
						</p>
					</div>
	                <div class="section-content">
	                   <div class="row">
					<?php 
						$serviceposts = cs_get_option('service_section_group');
									
							foreach($serviceposts as $servicepost => $servicevalue){ ?>

							<div class="col-md-3 col-sm-6">
	                   			<div class="item-md3 wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".9s">
	                   				<div class="<?php echo $servicevalue['service_group_icon'];?> fa-2x"></div>
	                   				<div class="item-info">
										<h4 class="item-title">
											<a href="<?php echo $servicevalue['service_content_link'];?>"><?php echo $servicevalue['service_group_title'];?></a>
										</h4>
										<p><?php echo $servicevalue['service_group_des'];?></p>
									</div>
	                   			</div>
	                   		</div>
							<?php 
							}
								?>
	                   </div>
	                </div>
	            </div> 
	        </div>
        </section>
