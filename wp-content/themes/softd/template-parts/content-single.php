<?php 
/*
single details page

*/
 global $softd_opt;
?>							
		<div class="softd-single-blog-details">
			<?php if(has_post_thumbnail()){?>
				<div class="softd-single-blog--thumb">
					<?php the_post_thumbnail('softd-blog-single'); ?>
				</div>									
			<?php } ?>
			<div class="softd-single-blog-details-inner">	
				<div class="softd-single-blog-title">
					<h2><?php the_title(); ?></h2>	
				</div>
						
				
				<?php if( 'post' == get_post_type() ) { ?>
						<!-- BLOG POST META  -->
						<div class="softd-blog-meta">
						
							<div class="softd-blog-meta-left">
								
								<span><i class="fas fa-calendar-alt"></i><?php echo get_the_time(get_option('date_format')); ?></span>
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="fas fa-user"></i> <?php the_author(); ?></a>
								<?php if ( comments_open() || get_comments_number() ) {?>
									<a href="<?php comments_link(); ?>"><i class="fas fa-comment"></i>
										<?php comments_number( esc_html__('0 Comments','softd'), esc_html__('1 Comment','softd'), esc_html__('% Comments','softd') );?>
									</a>						
								<?php }else{?>
									<span><i class="fas fa-comment"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
								<?php } ?>							
							</div>
						</div>
				<?php } // if post ?>
				

				<div class="softd-single-blog-content">
					<div class="single-blog-content">
					<?php the_content(); ?>
					<?php if ( '' != get_the_content() ) { ?>					
						<div class="page-list-single">						
							<?php 
							/**
							* Display In-Post Pagination
							*/
							wp_link_pages( array(
								'link_before'   => '<span>',
								'link_after'    => '</span>',
								'before'        => '<p class="inner-post-pagination"><span>' . esc_html__('Pages:', 'softd'),
								'after'     => '</p>'
							)); ?>					
												
						</div>
					<?php } ?>
					</div>
				</div>
			

				<?php if( 'post' == get_post_type() ) { ?>	
				
				
					<?php if (!empty($softd_opt['softd_blog_socialsharesh_hide']) && $softd_opt['softd_blog_socialsharesh_hide']==true){?>
						
						<div class="softd-blog-social">
							<div class="softd-single-icon">
								<?php
								if( function_exists('softd_blog_sharing') ){						
									softd_blog_sharing();
								}
								?>
							</div>
						</div>					
						
					<?php }else{
						
					}} ?> 	
			</div>
		</div>

	<?php comments_template();