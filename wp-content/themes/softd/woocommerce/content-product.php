<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
		<?php if ( is_active_sidebar( 'sidebar-5' ) ) { 
		?> <div class="col-xl-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>  col-lg-6 col-md-12 col-sm-12 col-xs-12 grid-item"> <?php 			
		}else{?> 

			<div class="col-lg-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?> col-md-6 col-sm-12 col-xs-12 grid-item">
		
		<?php }?>

<div <?php wc_product_class(''); ?>>
			<!-- product item --> 	 			
				<div class="tbd_product">
					<div class="tbd_product_inner">
						<!-- image --> 
						<!-- sale -->
						<div class="tbd_product_thumb">							
							<div class="tbd_sale_price"> 
								<?php woocommerce_show_product_loop_sale_flash();?>
							</div>
							<?php 
								/**
								 * Hook: woocommerce_before_shop_loop_item_title.
								 *
								 * @hooked woocommerce_show_product_loop_sale_flash - 10
								 * @hooked woocommerce_template_loop_product_thumbnail - 10
								 */								
								do_action( 'woocommerce_before_shop_loop_item_title' );							
							
							?>
							<div class="thb_product_preview">
							
								<?php 
									/**
									 * Hook: woocommerce_after_shop_loop_item.
									 *
									 * @hooked woocommerce_template_loop_product_link_close - 5
									 * @hooked woocommerce_template_loop_add_to_cart - 10
									 */									
									do_action( 'woocommerce_after_shop_loop_item' );
								
								 ?>
							</div>							
						</div>
					</div>
					<!-- title and meta -->
					<div class="tbd_product_content">
						<div class="tbd_product_content_inner">
							<div class="tbd_product_title tbd_fload_right">
									<?php
										/**
										 * Hook: woocommerce_shop_loop_item_title.
										 *
										 * @hooked woocommerce_template_loop_product_title - 10
										 */
										 woocommerce_template_loop_product_link_open();
										do_action( 'woocommerce_shop_loop_item_title');
										woocommerce_template_loop_product_link_close();
									?>
							</div>
							<div class="tbd_price_opt clearfix">
							<?php 
								/**
								 * Hook: woocommerce_after_shop_loop_item_title.
								 *
								 * @hooked woocommerce_template_loop_rating - 5
								 * @hooked woocommerce_template_loop_price - 10
								 */
								do_action( 'woocommerce_after_shop_loop_item_title' );							
							?>	
								
							</div>
						</div>
					</div>				
				</div>


	</div>
</div>
