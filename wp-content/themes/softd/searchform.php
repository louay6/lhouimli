<div class="defaultsearch">
	<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
	<input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="<?php echo esc_attr_e( 'Search', 'softd' ) ?>" title="<?php echo esc_attr_e( 'Search for:', 'softd' ) ?>" />
	<button  type="submit" class="icons">
		<i class="fa fa-search"></i>
	</button>
	</form>
</div>

		
		
		