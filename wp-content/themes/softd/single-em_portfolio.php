<?php
/**
 * Standard blog single page
 *
 */

get_header(); 
get_template_part( 'includes/header' , 'page-title' ); ?>
			
			<!-- BLOG AREA START -->
			<div class="softd-blog-area softd-blog-single single-blog-details">
				<div class="container">				
					<div class="row">


						<?php if( have_posts() ) : ?>

							<?php while( have_posts() ) : the_post(); ?>					
								
									<?php
									$protitle  = get_post_meta( get_the_ID(),'_softd_pftitle', true );  
									$protgroup  = get_post_meta( get_the_ID(),'_softd_portgroup', true );  
									 $pgellaryu  = get_post_meta( get_the_ID(),'_softd_pgellaryu', true ); 
								if( isset($pgellaryu) && !empty($pgellaryu)){?>
								<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
									<div class="pimgs">
										<div class="single_gallery owl-carousel  curosel-style">										
											<?php
												softd_slider_o('_softd_pgellaryu','full');									
											?>																				
										</div>			
									</div>
								</div>
								<div class="col-md-6 col-lg-6  col-sm-12 col-xs-12 blog-lr">
									<div class="portfolio-content portfolio-details-box">
										<div class="prots-content">
											<?php if($protitle){?>
												<h2><?php echo esc_html($protitle);?></h2>
											<?php };?>										
											<ul>
													<?php 
														
														if( $protgroup ){?>
														<?php
														foreach ( (array) $protgroup as $portgropd => $portgropss ){
														$porttitle = $portdec ='';
														if ( isset( $portgropss['_softd_pttitle'] ) ) {
															$porttitle =  $portgropss['_softd_pttitle'];	
														}	
														if ( isset( $portgropss['_softd_ptvalue'] ) ) {
															$portdec =  $portgropss['_softd_ptvalue'];	
														}?>
														<li>
															<b class="eleft"><?php echo esc_html( $porttitle );?></b>
															<span  class="eright"><?php echo esc_html( $portdec );?></span>
														</li>
													<?php }} ?>	
												</ul>					
										</div>
									</div>
								</div>	
								
							
								
								<div class="col-md-12 col-lg-12  col-sm-12 col-xs-12 blog-lr">
									<div class="portfolio-content portfolio-details-boxs">
									<div class="pr-title"><h2><?php the_title();?></h2></div>
										<div class="prots-content">
											<?php the_content(); ?>
										</div>
									</div>
								</div>	


								<?php }else{ ?>
									
										<div class="col-lg-8  col-md-6  col-sm-12 col-xs-12 blog-lr">
											<div class="pimgs">
											
												<?php the_post_thumbnail('softd-single-portfolio');?>
											
											</div>
										</div>

							
										<div class="col-lg-4 col-md-6  col-sm-12 col-xs-12 blog-lr">
											<div class="portfolio-content portfolio-details-box">											
												<div class="prots-contentg">
												<?php if($protitle){?>
													<h2><?php echo esc_html($protitle);?></h2>
												<?php };?>
												<ul>
													<?php 
														if( $protgroup ){?>
														<?php
														foreach ( (array) $protgroup as $portgropd => $portgropss ){
														$porttitle = $portdec ='';
														if ( isset( $portgropss['_softd_pttitle'] ) ) {
															$porttitle =  $portgropss['_softd_pttitle'];	
														}	
														if ( isset( $portgropss['_softd_ptvalue'] ) ) {
															$portdec =  $portgropss['_softd_ptvalue'];	
														}?>
														<li>
															<b class="eleft"><?php echo esc_html( $porttitle );?></b>
															<span  class="eright"><?php echo esc_html( $portdec );?></span>
														</li>
													<?php }} ?>	
												</ul>	
												</div>
													
			
													<div class="softd-blog-social">
														<div class="softd-single-icon">
															<?php
															if( function_exists('softd_blog_sharing') ){						
																softd_blog_sharing();
															}
															?>
														</div>
													</div>
													
												
											</div>										
										</div>	
										<div class="col-md-12 col-lg-12  col-sm-12 col-xs-12 blog-lr">															
											<div class="portfolio-content portfolio-details-boxs">
												<div class="pr-title"><h2><?php the_title();?></h2></div>
												<div class="prots-contentg">
													<?php the_content(); ?>
												</div>
											</div>
										</div>	
			
			
								<?php } ?>					

						<?php endwhile; // while has_post(); ?>
					<?php endif; // if has_post() ?>
									
					</div>	
				</div>
			</div>
			<!-- END BLOG AREA START -->						
<?php
get_footer();