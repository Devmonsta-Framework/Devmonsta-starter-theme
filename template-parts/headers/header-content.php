<?php

defined( 'ABSPATH' ) || exit;

$default_class = '';
if ( defined( 'DM' ) ) {

    $header_top_info_show      = sassico_option('header_top_info_show');
    $header_contact_mail       = sassico_option('header_contact_mail');
    $header_contact_address    = sassico_option('header_contact_address');
    $header_Contact_number     = sassico_option('header_Contact_number');
    $header_nav_search_section = sassico_option('header_nav_search_section');
    $header_quota_button       = sassico_option('header_quota_button');
    $header_nav_sticky         = sassico_option('header_nav_sticky');
    $header_contact_address_url         = sassico_option('header_contact_address_url');
    $header_quota_text         = '';
    $header_quota_url          = '';
    if('yes' == $header_quota_button){
        $header_quota_text = sassico_option('header_quota_text');
        $header_quota_url  = sassico_option('header_quota_url');
    }
} else {
    $header_top_info_show      = "";
    $header_contact_mail       = '';
    $header_contact_address    = '';
    $header_quota_button       = '';
    $header_nav_search_section = '';
    $header_nav_sticky         = '';
    $header_contact_address_url         = '';
    $default_class             .= 'header_default';
}

if( defined( 'DM' ) && 'yes' == $header_top_info_show ) { ?>
    <div class="topbar">
       <div class="container">
          <ul class="top-info">
             <?php if($header_contact_mail != ''): ?>
               <li><i class="icon icon-envelope2"></i><a href="mailto:<?php echo esc_url($header_contact_mail); ?>"><?php echo sassico_kses($header_contact_mail); ?></a></li>
             <?php endif; ?>
             <?php if($header_contact_address != ''): ?>
               <li>
               <i class="icon icon-map-marker1"></i>
               <?php if ('' != $header_contact_address_url) { ?>
                  <a href="<?php echo esc_url( $header_contact_address_url )?>"><?php echo sassico_kses($header_contact_address); ?></a>
               <?php } else { ?>
                  <?php echo sassico_kses($header_contact_address); ?>
               <?php } ?>
               </li>
             <?php endif; ?>
             <?php if($header_Contact_number != ''): ?>
               <li><i class="icon icon-phone-call2"></i><a href="tel:<?php echo esc_url($header_Contact_number); ?>"><?php echo sassico_kses($header_Contact_number); ?></a></li>
             <?php endif; ?>
          </ul>
       <!-- end container -->
       </div>
    </div>
<?php }; ?>
<header id="header" class="header header-standard <?php echo esc_attr( $default_class); ?> <?php echo esc_attr('yes' == $header_nav_sticky ? 'navbar-sticky' : ''); ?>">
   <div class="header-wrapper">
      <div class="container">
         <nav class="navbar navbar-expand-lg">

            <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
               <img  class="img-fluid" src="<?php
                  echo esc_url(
                     sassico_src(
                        'general_main_logo',
                        SASSICO_IMG . '/logo/logo-common.png'
                     )
                  );
               ?>" alt="<?php bloginfo('name'); ?>">
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#primary-nav"
                aria-controls="primary-nav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>

            <?php get_template_part( 'template-parts/navigations/nav', 'primary' ); ?>

            <?php if(defined( 'DM' )) {
            if("yes" == $header_nav_search_section) { ?>
            <div class="nav-search-area">
                <div class="nav-search">
                    <span id="search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="search-block">
                    <?php get_search_form(); ?>
                </div>
                <!--Search End-->
            </div>
            <?php }
            }; ?>
            <!-- Site search end-->

            <?php if( defined( 'DM' ) ) {
                if('yes' == $header_quota_button && $header_quota_text != '') { ?>
                  <div class="header-quote <?php if(!is_user_logged_in()){echo esc_attr("ml-auto");}?>">
                     <a href="<?php echo esc_url($header_quota_url); ?>" class="quote-btn btn">  <?php echo esc_html($header_quota_text); ?>
                     </a>
                  </div>
               <?php }
            } ?>

         </nav>
      </div><!-- container end-->
   </div><!-- header wrapper end-->
</header>
