<?php
/**
 * Standard blog index page
 *
 */

get_header();
if( function_exists('softd_breadcrumb_ariv') ){						
	softd_breadcrumb_ariv();
}
 ?>

			<!-- BLOG AREA START -->
			<div class="softd-blog-area softd-blog-archive">
				<div class="container">				
					<div class="row">
						
						<?php if (have_posts() ) : ?>
													
							<div class="col-md-8 col-sm-6 col-xs-12">
								<div class="row">
								
								<?php while ( have_posts() ) : the_post();
								
									global $post; ?>
									
									<?php get_template_part( 'template-parts/content' , 'list' ); ?>
									
								<?php endwhile; // while has_post(); ?>
								
								</div>
																
								<!-- START PAGINATION -->
								<div class="row">
									<div class="col-md-12">
										
										<?php softd_pagination();?>

									</div>
								</div>
								<!-- END START PAGINATION -->								
							</div>
						<?php endif; // if has_post() ?>						

						<?php get_sidebar( 'right' ); ?>
																					
					</div>
				</div>
			</div>
			<!-- END BLOG AREA START -->			
<?php
get_footer();