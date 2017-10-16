		<section id="pricing" class="pricing-section">
			<div class="section-padding">
				<div class="container">
					
					<div class="section-head wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
						<h2 class="section-title">
							<?php echo cs_get_option('pricing_title');?>
							
						</h2>
						<p class="section-description">
							<?php echo cs_get_option('pricing_description');?>
						</p>
					</div><!-- /.section-head -->

					<div class="section-content text-center">
					<div class="row">

							<div class="col-md-3 col-sm-6">
								<div class="item-md3 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
									<?php 
										$pricingsections = cs_get_option('pricing_text_section_group');
									
										foreach($pricingsections as $pricingsection => $pricingsvalue){ ?>

								
									<div class="item-head">
										<h4 class="title"><?php echo $pricingsvalue['content_P_title'];?></h4>

										<div class="currency-price-time">
											<span class="currency"><sub><?php echo $pricingsvalue['content_doler_description'];?></sub></span> 
											<span class="number"><?php echo $pricingsvalue['contne_number_title'];?></span>
											<span class="duration"><sup>/<?php echo $pricingsvalue['content_yaer_description'];?></sup></span>
										</div>
									</div>
								<?php
										}
								
											?>
									<div class="item-list text-left">
										<ul>
										<?php 
										$pricingposts = cs_get_option('pricing_section_group');
									
										foreach($pricingposts as $pricingpost => $pricingvalue){ 
										if($pricingvalue['pricing_condition']){	?>
										
										<li class="fa fa-check"><?php echo $pricingvalue['pricing_group_title'];?></li>
										
										<?php
							
										}
										else{?>
											
											<li class="fa fa-remove"><?php echo $pricingvalue['pricing_group_title'];?></li>
											
											<?php
											}
										}
								
											?>
										</ul>
									</div>
									<div class="link">
										<a href="#" class="btn btn-default">Buy Now</a>
									</div>
								</div><!-- /.item-md3 -->
							</div><!-- /.col-md-3 -->

							<div class="col-md-3 col-sm-6">
								<div class="item-md3 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".9s">
									<?php 
										$pricingsections = cs_get_option('pricing2_text_section_group');
									
										foreach($pricingsections as $pricingsection => $pricingsvalue){ ?>

								
									<div class="item-head">
										<h4 class="title"><?php echo $pricingsvalue['content_P_title'];?></h4>

										<div class="currency-price-time">
											<span class="currency"><sub><?php echo $pricingsvalue['content_doler_description'];?></sub></span> 
											<span class="number"><?php echo $pricingsvalue['contne_number_title'];?></span>
											<span class="duration"><sup>/<?php echo $pricingsvalue['content_yaer_description'];?></sup></span>
										</div>
									</div>
								<?php
										}
								
											?>
									<div class="item-list text-left">
										<ul>
										<?php 
										$pricingposts = cs_get_option('pricing2_section_group');
									
										foreach($pricingposts as $pricingpost => $pricingvalue){ 
										if($pricingvalue['pricing_condition']){	?>
										
										<li class="fa fa-check"><?php echo $pricingvalue['pricing_group_title'];?></li>
										
										<?php
							
										}
										else{?>
											
											<li class="fa fa-remove"><?php echo $pricingvalue['pricing_group_title'];?></li>
											
											<?php
											}
										}
								
											?>
										</ul>
									</div>
									<div class="link">
										<a href="#" class="btn btn-default">Buy Now</a>
									</div>
								</div><!-- /.item-md3 -->
							</div><!-- /.col-md-3 -->

							<div class="col-md-3 col-sm-6">
								<div class="item-md3 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="1.2s">
								<?php 
										$pricingsections = cs_get_option('pricing3_text_section_group');
									
										foreach($pricingsections as $pricingsection => $pricingsvalue){ ?>

								
									<div class="item-head">
										<h4 class="title"><?php echo $pricingsvalue['content_P_title'];?></h4>

										<div class="currency-price-time">
											<span class="currency"><sub><?php echo $pricingsvalue['content_doler_description'];?></sub></span> 
											<span class="number"><?php echo $pricingsvalue['contne_number_title'];?></span>
											<span class="duration"><sup>/<?php echo $pricingsvalue['content_yaer_description'];?></sup></span>
										</div>
									</div>
								<?php
										}
								
											?>

									<div class="item-list text-left">
										<ul>
											<?php 
										$pricingposts = cs_get_option('pricing3_section_group');
									
										foreach($pricingposts as $pricingpost => $pricingvalue){ 
										if($pricingvalue['pricing_condition']){	?>
										
										<li class="fa fa-check"><?php echo $pricingvalue['pricing_group_title'];?></li>
										
										<?php
							
										}
										else{?>
											
											<li class="fa fa-remove"><?php echo $pricingvalue['pricing_group_title'];?></li>
											
											<?php
											}
										}
								
											?>
										</ul>
									</div>
									<div class="link">
										<a href="#" class="btn btn-default">Buy Now</a>
									</div>
								</div><!-- /.item-md3 -->
							</div><!-- /.col-md-3 -->

							<div class="col-md-3 col-sm-6">
								<div class="item-md3 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="1.5s">
									<?php 
										$pricingsections = cs_get_option('pricing4_text_section_group');
									
										foreach($pricingsections as $pricingsection => $pricingsvalue){ ?>

								
									<div class="item-head">
										<h4 class="title"><?php echo $pricingsvalue['content_P_title'];?></h4>

										<div class="currency-price-time">
											<span class="currency"><sub><?php echo $pricingsvalue['content_doler_description'];?></sub></span> 
											<span class="number"><?php echo $pricingsvalue['contne_number_title'];?></span>
											<span class="duration"><sup>/<?php echo $pricingsvalue['content_yaer_description'];?></sup></span>
										</div>
									</div>
								<?php
										}
								
											?>

									<div class="item-list text-left">
										<ul>
													<?php 
										$pricingposts = cs_get_option('pricing4_section_group');
									
										foreach($pricingposts as $pricingpost => $pricingvalue){ 
										if($pricingvalue['pricing_condition']){	?>
										
										<li class="fa fa-check"><?php echo $pricingvalue['pricing_group_title'];?></li>
										
										<?php
							
										}
										else{?>
											
											<li class="fa fa-remove"><?php echo $pricingvalue['pricing_group_title'];?></li>
											
											<?php
											}
										}
								
											?>
										</ul>
									</div>
									<div class="link">
										<a href="#" class="btn btn-default">Buy Now</a>
									</div>
								</div><!-- /.item-md3-->
							</div><!-- /.col-md-3 -->

						</div><!-- /.row -->
					</div><!-- /.section-content -->
				</div><!-- /.container -->
			</div><!-- /.pricing-section -->
		</section><!-- /#pricing -->