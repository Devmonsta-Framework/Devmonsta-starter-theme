<?php
$banner_image    = '';
$banner_title    = '';
$banner_style    = 'full';
$header_style    = 'standard';

if (defined('DM')) {

    // page meta options
    $page_banner_title        = sassico_meta_option(get_the_ID(), 'header_title');
    $banner_image             = sassico_meta_option(get_the_ID(), 'header_image');
    // customizer options
    $page_show_banner         = sassico_option('page_show_banner');
    $page_show_breadcrumb     = sassico_option('page_show_breadcrumb');
    $banner_page_image        = sassico_option('banner_page_image');
    $banner_overlay_show      = sassico_option('show_page_banner_overlay');
    $page_banner_overlay_color = sassico_option('page_banner_overlay_color');

    //title
    if ($page_banner_title != '') {
        $banner_title = $page_banner_title;
    } elseif (sassico_option('page_banner_title') != '') {
        $banner_title = sassico_option('page_banner_title');
    } else {
        $banner_title   = get_the_title();
    }

    //image
    if (isset($banner_image) && $banner_image != '') {
        $banner_image = wp_get_attachment_url($banner_image);
    } elseif (isset($banner_page_image) && $banner_page_image != '') {
        $banner_image = wp_get_attachment_url($banner_page_image);
    } else {
        $banner_image = SASSICO_IMG . '/banner/bredcumbs-1.png';
    }

    // show banner
    $show = (isset($page_show_banner)) ? $page_show_banner : 'yes';
    // breadcumb
    $show_breadcrumb =  (isset($page_show_breadcrumb)) ? $page_show_breadcrumb : 'yes';
} else {
    //default
    $banner_image             = SASSICO_IMG . '/banner/bredcumbs-1.png';
    $banner_title             = get_the_title();
    $show                     = 'yes';
    $show_breadcrumb          = 'no';
    $banner_overlay_show      = 'no';
}
if ($banner_image != '') {
    $banner_image = 'style="background-image:url(' . esc_url($banner_image) . ');"';
}


?>

<?php if (isset($show) && $show == 'yes') : ?>

    <section class="xs-jumbotron sassico-innner-page-banner d-flex align-items-center <?php echo esc_attr($banner_image == '' ? 'banner-solid' : 'banner-bg'); ?>" <?php echo wp_kses_post($banner_image); ?>>
        <?php if ($banner_overlay_show === 'yes') { ?>
            <div class="xs-solid-overlay" style="background-color: <?php echo esc_attr($page_banner_overlay_color === '' ? 'rgba(0,0,0,.5)' : $page_banner_overlay_color); ?>"></div>
        <?php }; ?>

        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="xs-jumbotron-content-wraper">
                        <h1 class="xs-jumbotron-title">
                            <?php
                            if (is_archive()) {
                                the_archive_title();
                            } elseif (is_single()) {
                                the_title();
                            } else {
                                echo wp_kses_post($banner_title);
                            }
                            ?>
                        </h1>
                        <?php if (isset($show_breadcrumb) && $show_breadcrumb == 'yes') : ?>
                            <?php sassico_get_breadcrumbs(" / "); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php endif;
