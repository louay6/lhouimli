<?php /**
* Maybe show the right sidebar
*/

if ( ! is_active_sidebar( 'sidebar-5' ) ) {
	return;
}
?>

	<div class="col-lg-4 col-xl-3 col-md-6  col-sm-12 col-xs-12  sidebar-right content-widget pdsr">
		<div class="blog-left-side widget">
		
			<?php dynamic_sidebar( 'sidebar-5' ); ?>
		</div>
	</div>
	
