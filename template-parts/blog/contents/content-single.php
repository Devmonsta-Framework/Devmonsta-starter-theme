<?php

$blog_url = '';
$blog_sidebar = sassico_option('blog_sidebar',1);
if(has_post_thumbnail()){
	if($blog_sidebar == 1) {
		$blog_url = get_the_post_thumbnail_url(get_the_ID(), 'sassico-large');
	}else {
		$blog_url = get_the_post_thumbnail_url();
	}

}

if ( has_post_thumbnail() && !post_password_required() ) : ?>
		<div class="post-media post-image">
		     <img class="img-fluid" src="<?php echo esc_url($blog_url); ?>" alt=" <?php the_title_attribute(); ?>">
               <?php 
                  $date_style = sassico_option('blog_date_style','classic');
                  if ( $date_style == "creative" ) :
                        sassico_post_meta_date();
                  endif;
                ?>
      </div>
    
	<?php endif; ?>
	<div class="post-body clearfix">

		<!-- Article header -->
		<header class="entry-header clearfix">
			<?php sassico_post_meta(); ?>
		</header><!-- header end -->

		<!-- Article content -->
		<div class="entry-content clearfix">
			<?php
			if ( is_search() ) {
				the_excerpt();
			} else {
				the_content( esc_html__( 'Continue reading &rarr;', 'sassico' ) );
				sassico_link_pages();
			}
			?>
         <div class="post-footer clearfix">
            <?php get_template_part( 'template-parts/blog/post-parts/part', 'tags' ); ?>
         </div> <!-- .entry-footer -->
			
         <?php
            if ( is_user_logged_in() && is_single() ) {
         ?>

                  <p style="float:left;margin-top:20px;">
                  <?php
                  edit_post_link( 
                     esc_html__( 'Edit', 'sassico' ),
                     '<span class="meta-edit">', 
                     '</span>'
                  );
                  ?>
            
           </p>
         <?php
            }
         ?>
		</div> <!-- end entry-content -->
   </div> <!-- end post-body -->
