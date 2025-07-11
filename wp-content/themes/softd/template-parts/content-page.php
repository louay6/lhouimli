<?php 
/*
single details page

*/
?>							
<div class="softd-single-blog-details">
	<?php if(has_post_thumbnail()){?>
		<div class="softd-single-blog--thumb">
			<?php the_post_thumbnail(); ?>
		</div>									
	<?php }
	
	
	$ptitle  = get_post_meta( get_the_ID(),'_softd_ptitle', true );  ?>	
	<?php if( $ptitle == 'ptitles' ) {}else{
		?>
		<div class="softd-single-blog-title">	
			<h2><?php the_title(); ?></h2>				
		</div>	
	<?php		
	} ?>

	

	

	<div class="softd-single-blog-content">
		<div class="single-blog-content">
			<?php the_content(); ?>
	<?php 
	
	if ( '' != get_the_content() ) { ?>			
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

</div>

<?php comments_template();