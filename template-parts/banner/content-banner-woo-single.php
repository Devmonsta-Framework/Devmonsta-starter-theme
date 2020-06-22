<?php
$banner_image    = '';
$banner_title    = '';
$banner_style    = 'full';
$header_style    = 'standard';

if ( defined( 'FW' ) ) {

	$banner_settings          = sassico_option('sassico_single_product_blog_banner_setting');
	$banner_overlay           = $banner_settings['shop_single_show_background_overlay_switch'];
	$banner_image             = SASSICO_IMG.'/banner/bredcumbs-1.png';
	//title

	//image
	if( is_array($banner_settings['sassico_single_product_banner_blog_image']) && $banner_settings['sassico_single_product_banner_blog_image']['url'] != ''){
		$banner_image = $banner_settings['sassico_single_product_banner_blog_image']['url'];
	}

	$show = (isset($banner_settings['sassico_single_product_show_banner'])) ? $banner_settings['sassico_single_product_show_banner'] : 'yes';



}else{
	//default
	$page_sub_menu             = '';
	$banner_image             = '';
	$banner_title             = get_the_title();
	$show                     = 'yes';
	$show_breadcrumb          = 'no';

}
if( $banner_image != ''){
	$banner_image = 'style="background-image:url('.esc_url( $banner_image ).');"';
}
$banner_heading_class = '';
if($header_style=="transparent"):
	$banner_heading_class     = "mt-80";


endif;

?>

<?php if(isset($show) && $show == 'yes'): ?>
	<section class="xs-jumbotron d-flex align-items-center  xs_single_blog_banner  banner-bg" <?php echo wp_kses_post( $banner_image ); ?>>
		<?php if ($banner_overlay === 'yes') {
            $banner_overlay_color = $banner_settings['shop_single_show_background_overlay']['yes']['shop_single_banner_overlay_style'];
            ?>
        <div class="xs-solid-overlay" style="background-color: <?php echo esc_attr($banner_overlay_color === '' ? 'rgba(0,0,0,.5)' : $banner_overlay_color); ?>"></div>
        <?php }; ?>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<div class="xs-jumbotron-content-wraper">
						<h1 class="xs-jumbotron-title">
							<?php
							if(is_archive()){
								the_archive_title();
							}elseif(is_single()){
								the_title();
							}else{
								wp_title();
							}
							?>
						</h1>

					</div>
				</div>
			</div>
		</div>
	</section>

<?php endif;
