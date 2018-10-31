<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="neo-row">
	    <div class="neo-col-2">
		    <?php dynamic_sidebar( 'sidearea' ); ?>		
		</div><!---neo-col-2--->
		<div class="neo-col-10">
		<a class="neo-refo" href="<?php echo wp_get_referer(); ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i> Previous</a>
		    <div class="neo-row">
			    <div class="neo-col-5">
				
				    <?php
					/**
					* woocommerce_before_single_product_summary hook
					*
					* @hooked woocommerce_show_product_sale_flash - 10
					* @hooked woocommerce_show_product_images - 20
					*/
					do_action( 'woocommerce_before_single_product_summary' );
					
					global $product;
					echo wc_get_stock_html( $product );
					// echo wc_get_stock_html( $grouped_product );
					
					echo woocommerce_template_single_meta();
					?>
				</div><!---neo-col-5--->
				<div class="neo-col-7">
				    <div class="eltd-single-product-summary">
					    <div class="summary entry-summary">
						    <?php 
							    echo woocommerce_template_single_title();
								echo eltd_woocommerce_template_single_subtitle();
								echo woocommerce_template_single_rating();
								echo woocommerce_template_single_price();
								echo woocommerce_template_single_add_to_cart();	
								echo woocommerce_output_product_data_tabs();
                            ?>
						</div>
					</div>				
				</div><!---neo-col-7---->			
			</div><!---neo-row--->
		
		    
	<div class="eltd-single-product-summary">
		<div class="summary entry-summary">

			<?php
			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked eltd_woocommerce_template_single_subtitle - 6
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
			 //do_action( 'woocommerce_single_product_summary' );
			?>

		</div>
	</div><!-- .eltd-signle-product-summary -->
		
		</div><!---neo-col-10--->
	</div><!---neo-row--->
	

	<?php
		/**
		 * woocommerce_after_single_product_summary hook
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
