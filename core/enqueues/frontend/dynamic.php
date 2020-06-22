<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * dynamic css, generated by customizer options
 */

if (defined('DM')) {

    $body_bg_url = '';
    $general_box_bg_image_url = '';
    $page_box_bg_image_url = '';
    $body_bg = sassico_option('style_body_bg', '#fff');
    $style_primary = sassico_option('style_primary', '#042ff8');
    $title_color = sassico_option('title_color', '#172541');
    $style_primary_dark = sassico_option('style_primary_dark', '#333');
    $secondary_color = sassico_option('secondary_color', '#666666');

    $global_body_font = sassico_option('body_font');
    Sassico_DM_Google_Fonts::add_typography_v2($global_body_font);
    $body_font = sassico_advanced_font_styles($global_body_font);

    $heading_font_one = sassico_option('heading_font_one');
    Sassico_DM_Google_Fonts::add_typography_v2($heading_font_one);
    $heading_font_one = sassico_advanced_font_styles($heading_font_one);

    $heading_font_two = sassico_option('heading_font_two');
    Sassico_DM_Google_Fonts::add_typography_v2($heading_font_two);
    $heading_font_two = sassico_advanced_font_styles($heading_font_two);

    $heading_font_three = sassico_option('heading_font_three');
    Sassico_DM_Google_Fonts::add_typography_v2($heading_font_three);
    $heading_font_three = sassico_advanced_font_styles($heading_font_three);

    $heading_font_four = sassico_option('heading_font_four');
    Sassico_DM_Google_Fonts::add_typography_v2($heading_font_four);
    $heading_font_four = sassico_advanced_font_styles($heading_font_four);

    $heading_font_five = sassico_option('heading_font_five');
    Sassico_DM_Google_Fonts::add_typography_v2($heading_font_five);
    $heading_font_five = sassico_advanced_font_styles($heading_font_five);

    $heading_font_six = sassico_option('heading_font_six');
    Sassico_DM_Google_Fonts::add_typography_v2($heading_font_six);
    $heading_font_six = sassico_advanced_font_styles($heading_font_six);

    // init custom css
    $custom_css     = sassico_option('custom_css');
    $output = $custom_css;



    // global style
    $output    .= "
        body{ 
            background-color: $body_bg;
            $body_font 
        }
        

        h1{
            $heading_font_one
        }
        h2{
            $heading_font_two
        }
        h3{
            $heading_font_three
        }
        h4{
            $heading_font_four
        }
        h5{
            $heading_font_five
        }
        h6{
            $heading_font_six
        }
        .entry-header .entry-title a:hover,
        .sidebar ul li a:hover{
            color: $style_primary;
            transition: all ease 500ms;
        }
        .header ul.navbar-nav > li > a:hover,
         .header ul.navbar-nav > li > a.active,
         .header ul.navbar-nav > li > a:focus{
            color: $style_primary;
        }

        ul.navbar-nav li .dropdown-menu li a:hover,
        .xs-service .xs-service-box .xs-service-box-info .xs-title a:hover,
        .recent-folio-menu ul li.active,
        .xs-footer .footer-left-widget ul li span,
        .xs-footer .footer-widget ul li a:hover,
        .copyright span a,
        .xs-latest-news .single-latest-news .single-news-content .ts-post-title a:hover,
        .xs-top-bar .top-bar .header-nav-right-info li i.fa,
        .xs-nav-classic .header-nav-right-info li i,
        .sidebar .widget .media-body .entry-title a:hover,
        .header ul.navbar-nav li .dropdown-menu li a:hover,
        .header ul.navbar-nav li .dropdown-menu li a.active,
        .btn:hover,
        .readmore-btn-area a,
        .post .entry-header .entry-title a:hover,
         .wp-block-quote:before
        .woocommerce ul.products li.product .price,.woocommerce ul.products li.product .woocommerce-loop-product__title:hover,
        .wp-block-quote:before{
           color: $style_primary;
        }


        .btn-primary,
        .recent-folio-menu ul li.active,
        .copyright .footer-social ul li a:hover,
        .testimonial-footer:after,
        .btn-border-dark:hover,
        .ts-working-box:hover .working-icon-wrapper,
        .header ul.navbar-nav > li:hover > a:before, .header ul.navbar-nav > li.active > a:before,
        .blog-post-comment .comment-respond .comment-form .form-control:focus,
        .qutoe-form-inner.ts-qoute-form .form-control:focus{
           border-color: $style_primary;
        }
        .recent-folio-menu ul li.active:after,
        .ts-latest-news .single-latest-news{
           border-bottom-color: $style_primary;
        }
        .nav-classic .main-logo a:after{
           border-top-color: $style_primary;
        }
        .btn-primary:hover,
        .post .post-footer .readmore:hover,
        .input-group-btn.search-button:hover,
        .sidebar .widget.widget_search .input-group-btn:hover,
        .btn-comments.btn btn-primary,
        .search .page .post-footer .readmore:hover, .post .post-footer .readmore:hover, .sidebar .widget.widget_search .input-group-append:hover{
         background: $secondary_color;
         border-color: $secondary_color;
        }
        blockquote.wp-block-quote, .wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote blockquote,
         blockquote.wp-block-pullquote, .wp-block-quote.is-large, .wp-block-quote.is-style-large{
            border-left-color: $style_primary;
        }
         .entry-header .entry-title a:hover, .sidebar ul li a:hover{
            color: $secondary_color;
         }
         .single-intro-text .count-number, .sticky.post .meta-featured-post,
        .sidebar .widget .widget-title:before, .pagination li.active a, .pagination li:hover a,
        .pagination li.active a:hover, .pagination li:hover a:hover,
        .sidebar .widget.widget_search .input-group-btn, .tag-lists a:hover, .tagcloud a:hover,
        .back_to_top, .ticket-btn.btn:hover,
        .navbar-container .navbar-light .navbar-nav > li > a:before,
        .nav-button,
        .btn-primary,
        .single-recent-work .link-more,
        .ts-team-slider .owl-nav .owl-prev:hover i, .ts-team-slider .owl-nav .owl-next:hover i,
              .ts-footer-info-box,
        .working-process-number,
        .copyright .footer-social ul li a:hover,
        .btn-border-dark:hover,
        .nav-classic .main-logo a:before,
        .btn,
        .main-logo,
        .hero-area.owl-carousel.owl-theme .owl-nav [class*=owl-]:hover,
        .post .post-footer .readmore,
        .post .post-media .video-link-btn a,
        .woocommerce ul.products li.product .button,.woocommerce ul.products li.product .added_to_cart,
        .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover,
        .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,
        .woocommerce ul.products li.product span.onsale, .woocommerce span.onsale,
        .sidebar .widget.widget_search .input-group-append,
        .search-forms .input-group-append {
            background: $style_primary;
        }
        .post .post-footer .readmore,.sidebar .widget.widget_search .form-control:focus {
            border-color: $style_primary;
        }
        .owl-carousel.owl-loaded .owl-nav .owl-next.disabled,
        .owl-carousel.owl-loaded .owl-nav .owl-prev.disabled,
        .xs-about-image-wrapper.owl-carousel.owl-theme .owl-nav [class*=owl-]:hover{
            background: $style_primary !important;

        }


        .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {
            background-color: $secondary_color;
       }
       .search .page .entry-header .entry-title a:hover,
       .post .entry-header .entry-title a:hover,
       .meta-categories a:hover{
           color: $style_primary;
       }
        ";
    // footer style
    $footer_copyright_color = sassico_option('footer_copyright_color', '#a5a5a5');
    $copyright_bg_color              = sassico_option("copyright_bg_color");
    $footer_text_color = sassico_option('footer_text_color', '#fff');
    $xs_footer_widget_title_color = sassico_option('xs_footer_widget_title_color', '#101010');
    $xs_footer_widget_link_color = sassico_option('xs_footer_link_color', '#f3525a');
    $xs_footer_bg_color = sassico_option('xs_footer_bg_color', '#172541');
    $footer_text_color = sassico_option('xs_footer_text_color', '#fff');
    $footer_padding_top = sassico_option('footer_padding_top', '#fff');
    $footer_padding_bottom = sassico_option('footer_padding_bottom', '#fff');

    if ($footer_padding_top != '' || $footer_padding_bottom != '') {

        $footer_padding_top =  'padding-top:' . sassico_style_unit($footer_padding_top);
        $footer_padding_bottom =  'padding-bottom:' . sassico_style_unit($footer_padding_bottom);
        $output .= ".xs-footer{
            $footer_padding_top;
            $footer_padding_bottom;
         }";
    }


    $output    .= "

      .xs-footer{
          background-color: $xs_footer_bg_color;
          background-repeat:no-repeat;
          background-size: cover;
      }

      .xs-footer-classic .widget-title,
      .footer-widget .widget-title,
      .xs-footer-classic h3,
      .xs-footer-classic h4,
      .xs-footer-classic .contact h3{
          color: $xs_footer_widget_title_color;
      }
      .xs-footer-classic .widget-title,
      .footer-widget .widget-title,
      .xs-footer-classic h3,
      .xs-footer-classic h4,
      .xs-footer-classic .contact h3{
          color: $xs_footer_widget_title_color;
      }
      .xs-footer-classic p,
      .xs-footer-classic .list-arrow li a,
      .xs-footer-classic .menu li a,
      .xs-footer-classic .service-time li,
      .xs-footer-classic .list-arrow li::before,
      .xs-footer-classic .menu li::before{
        color: $footer_text_color;
      }

      .xs-footer a{
        color: $xs_footer_widget_link_color;
      }

      .copy-right {
         background: $copyright_bg_color;
      }
      .copy-right .copyright-text{
         color: $footer_copyright_color;
      }
      ";

    wp_add_inline_style('sassico-master', $output);
}
