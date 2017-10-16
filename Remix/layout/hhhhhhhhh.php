
								
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